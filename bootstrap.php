<?php
define("APP_PATH", dirname(realpath(__FILE__)));

function nashRegister($className) 
{
    if(file_exists("/$className.php")) {
        require_once "/$className.php";
    } else if(file_exists(APP_PATH . "/Nash/Client/$className.php")) {
        require_once APP_PATH . "/Nash/Client/$className.php";
    } else if(file_exists(APP_PATH . "/Nash/Client/Models/$className.php")) {
        require_once APP_PATH . "/Nash/Client/Models/$className.php";
    } else if(file_exists(APP_PATH . "/Nash/Client/Services/$className.php")) {
        require_once APP_PATH . "/Nash/Client/Services/$className.php";
    } else if(file_exists(APP_PATH . "/Nash/Client/Util/$className.php")) {
        require_once APP_PATH . "/Nash/Client/Util/$className.php";
    } else if(file_exists(APP_PATH . "/vendor/$className.php")) {
        require_once APP_PATH . "/vendor/$className.php";
    }
}

spl_autoload_extensions(".php");
spl_autoload_register('nashRegister');

