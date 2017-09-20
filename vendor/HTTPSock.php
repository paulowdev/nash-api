<?php

/**
* Class for sending HTTP Requests using raw sockets
*
* This class compiles HTTP Requests and use's raw sockets
* to interact with the given server. Upon recieving data
* it uses RegEx to parse the header information and any
* given cookie data.
*
* @author Joshua Gilman
* @package HTTPSock
*/
class HTTPSock
{
    const CONTENT_TYPE_JSON = "application/json";
    const CONTENT_TYPE_FORMURLENCODED = "application/x-www-form-urlencoded";
    
    public $error = array();
    public $last_error = NULL;

    public $headers = array();
    public $cookie = NULL;
    public $cookies = NULL;
    
    public $contentType = HTTPSock::CONTENT_TYPE_FORMURLENCODED;
    
    private $status = NULL;

    private $socket = NULL;
    private $host = NULL;
    private $numerical_host = NULL;
    private $path = NULL;
    private $port = NULL;

    private $header = NULL;
    private $content = NULL;

    protected $newline = "\r\n";
    protected $connection = "tcp";
    protected $service = "http";

    /**
    * Sends an HTTP Request and returns the content
    *
    * This function will send an HTTP Request using the specified
    * url as you would a web browser. A type ("GET" or "POST") and
    * a valid URL is mandatory. Upon recieving a response it will
    * remove and parse the headers and return the content.
    *
    * @var String $HTTP_TYPE
    * @var String $webURL
    * @var Mixed $HTTPPostVars
    * @var Mixed $headers
    *
    * @return String The returned HTTP response with stripped header
    */
    public function HTTPRequest($HTTP_Type, $webURL, $HTTPPostVars = array(), $headers = array())
    {
        //$this->new_socket();

        list($service, $host, $path, $port) = $this->url_details($webURL);

        $this->service = $service;
        $this->host = $host;
        $this->numerical_host = $this->get_numerical_host();
        $this->path = $path;
        $this->port = is_null($port) ? $this->get_port() : $port;

        $this->connect();

        $header = $this->assemble_header($HTTP_Type, $this->host, $this->path, $HTTPPostVars, $headers);
        
        //echo "\r\n\r\nRequest:\r\n============\r\n"; print_r($header);
        fwrite($this->socket, $header);
        //socket_write($this->socket, $header, strlen($header));

        $this->read_socket();
        //echo "\r\n\r\nResponse:\r\n============\r\n"; print_r($this->content);
        
        $this->parse_header();

        if (array_key_exists('Content-Encoding', $this->headers) && $this->headers['Content-Encoding'] == "gzip")
        {
            $content = gzinflate(substr($this->content, 10));
            $this->content = $content;
        }
        
        return $this->content;
    }
    
    public function getStatus() {
        return $this->status;
    }

    public function getContent() {
        return $this->content;
    }

    
    /**
    * Logs an error and throws an exception
    *
    * This function uses an error string to log an error
    * and throw a new exception. When using this class
    * always include it in a try/catch statement.
    *
    * @var String $error_string
    */
    private function new_error($error_string)
    {
        $this->error[] = $error_string;
        $this->last_error = $error_string;

        throw new Exception("Socket Error: " . $error_string);
    }

    /**
    * Creates a new TCP socket using some default values
    *
    * This function creates and sets the class socket to
    * be used when sending and reading data from and to
    * the socket stream.
    */
    //private function new_socket()
    //{
    //    $this->socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    //
    //    if (!$this->socket)
    //    {
    //        $this->new_error(socket_strerror($this->socket));
    //    }
    //}

    /**
    * Returns the default service port for the requested service
    *
    * This function uses the assigned settings for the service
    * and connection type to grab the default port for the settings
    *
    * @return Integer
    */
    private function get_port()
    {
        return $service_port = getservbyname($this->service, $this->connection);
    }

    /**
    * Returns the IP of the given host name
    *
    * This function takes a host name and returns the
    * numerical IP related to the host name.
    *
    * @return String
    */
    private function get_numerical_host()
    {
        $host = explode(":", $this->host);
        return gethostbyname($host[0]);
    }

    /**
    * Connects the already created class socket
    *
    * This function connects the socket using the
    * already set host and port details. Throws an
    * exception when the connection fails.
    */
    private function connect()
    {
        $hostPrefix = strcmp($this->service, "https") == 0 ? "ssl://" : "";
        $errorMessage = "";
        $errorCode = null;
        $remotePath = phpversion() < '5.6' ? $this->numerical_host : $this->host;
        $this->socket = fsockopen("{$hostPrefix}{$remotePath}", $this->port, $errorCode, $errorMessage);
        
        if (!$this->socket) {
            $this->new_error($errorMessage);
        }
        
        //if (!($result = socket_connect($this->socket, $this->numerical_host, $this->port)))
        //{
        //    $this->new_error(socket_strerror(socket_last_error()));
        //}
    }

    /**
    * Assembles an HTTP Header
    *
    * This function is used to create an HTTP Header using
    * some minor details. Default values are given to the
    * common HTTP values but can be overriden by refferencing
    * them in the $headers variable.
    *
    * @param String $HTTP_Type
    * @param String $host
    * @param String $path
    * @param Mixed $HTTPPostVars
    * @param Mixed $headers
    *
    * @return String
    */
    private function assemble_header($HTTP_Type, $host, $path, $HTTPPostVars, $headers)
    {
        $cookie_str = "";
        $postData = "";
        $HTTP_Type = strtoupper($HTTP_Type);

        $header = "{$HTTP_Type} {$path} HTTP/1.0\r\n";
        $header .= "Host: " . $host . "\r\n";

        $params['User-Agent'] = "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1";
        $params['Accept'] = "application/json,text/xml,application/xml,application/xhtml+xml,text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
        $params['Accept-Language'] = "pt-BR,pt;q=0.8,en-US;q=0.6,en;q=0.4,fr;q=0.2,es;q=0.2";
        $params['Accept-Encoding'] = "gzip,deflate,sdch";
        $params['Accept-Charset'] = "ISO-8859-1,utf-8;q=0.7,*;q=0.7";
        $params['Keep-Alive'] = "300";
        $params['Connection'] = "Close";

        if (sizeof($headers) >= 1)
        {
            $params = array_merge($params, $headers);
        }

        foreach ($params as $key => $value)
        {
            $header .= "{$key}: {$value}\r\n";
        }

        if (!empty($this->cookie))
        {
            $header .= "Cookie: " . $this->cookie . "\r\n";
        } elseif (sizeof($this->cookies >= 1)) {
            foreach ($this->cookies as $key => $value)
            {
                $cookie_str .= "$key=$value;";
            }

            $header .= "Cookie: " . $cookie_str . "\r\n";
        }

        //if ($HTTP_Type == "POST")
        //{
            if ($this->contentType == HTTPSock::CONTENT_TYPE_FORMURLENCODED) {
                foreach ($HTTPPostVars as $key => $value)
                {
                    if (!is_null($value)) {
                        $key = urlencode($key);
                        $value = is_bool($value) ? ($value ? "true" : "false") : urlencode($value);

                        if ($value) $postData .= "{$key}={$value}&";
                    }
                }

                $postData = substr($postData, 0, strlen($postData) - 1);
            } elseif ($this->contentType == HTTPSock::CONTENT_TYPE_JSON) {
                $postData = str_replace("\/", "/", $HTTPPostVars);
            }
            
            if (!is_string($postData)) $postData = "";

            $header .= "Content-Type: {$this->contentType}\r\n";
            $header .= "Content-Length: " . strlen($postData) . "\r\n\r\n";
            $header .= $postData;
        //} else {
        //    $header .= "\r\n";
        //}

        return $header;
    }

    /**
    * Parses the returned HTTP Header
    *
    * This function parses the returned HTTP Header into
    * logical parts using an array. Each value is parsed
    * and loaded into the $headers array
    */
    private function parse_header()
    {
        $parts = explode($this->newline . $this->newline, $this->content);

        $this->header = array_shift($parts);
        $this->content = implode($parts, $this->newline . $this->newline);

        $parts = explode($this->newline, $this->header);
        foreach ($parts as $part)
        {
            if (preg_match("/(.*)\: (.*)/", $part, $matches))
            {
                $this->headers[$matches[1]] = $matches[2];
            } else if (preg_match("/[0-9][0-9]+/", $part, $matches)) {
                $this->status = $matches[0];
            }
        }

        //if (eregi("Set-Cookie", $this->header))
        if (preg_match("%Set-Cookie%i", $this->header))
        {
            $this->parse_cookies();
        }
    }

    /**
    * Parses the cookies from the HTTP Header
    *
    * This function uses RegEx to parse all cookies
    * from the HTTP header and load them into an
    * associative array with the cookie name as the
    * key and the cookie value as the value
    */
    private function parse_cookies()
    {
        $lines = explode($this->newline, $this->header);

        foreach ($lines as $line)
        {
            if (preg_match("/Set-Cookie: (.+?)=(.+?);/", $line, $matches))
            {
                $this->cookies[$matches[1]] = $matches[2];
            }
        }
    }

    /**
    * Reads all data from the socket
    *
    * This reads all the returned data off of
    * the socket stream and returns it in one
    * string
    *
    * @return String
    */
    private function read_socket()
    {
        while (!feof($this->socket)) {
            $this->content .= fgets($this->socket, 2048);
        }
        fclose($this->socket);
        
        //while ($buffer = socket_read($this->socket, 2048))
        //{
        //     $this->content .= $buffer;
        //}
        //socket_close($this->socket);
        
        return $this->content;
    }

    /**
    * Parses a URL into a host and a path
    *
    * This function uses RegEx to parse the host
    * and the path from a URL. Returns the host
    * and path in an array.
    *
    * @param String $url
    *
    * @return Mixed
    */
    private function url_details($url)
    {
        $partsService = explode("://", $url);
        
        $service = $partsService[0];
        $url = $partsService[1];
        $host = preg_replace("/\/.*/", "", $url);
        $path = str_replace($host, "", $url);
        
        $parts = explode(":", $host);
        $port = count($parts) > 1 ? $parts[1] : NULL;

        return array($service, $host, $path, $port);
    }
}


?>