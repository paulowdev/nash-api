<?php

return array (
    "running" => require("env.php"),
    "development" => array(
        "authenticationPath" => "http://localhost:30627",
        "servicePath" => "http://localhost:31877",
        "username" => "site",
        "password" => "4321"
    ),
    "staging" => array(
        "authenticationPath" => "http://nashstaging.elasticbeanstalk.com:8081",
        "servicePath" => "http://nashstaging.elasticbeanstalk.com",
        "username" => "site",
        "password" => "4321"
    ),
    "production" => array(
        "authenticationPath" => "https://accounts.fortesinformatica.com.br",
        "servicePath" => "https://core.fortesinformatica.com.br",
        "username" => "xxxxxxxxxxx",
        "password" => "xxxxxxxxxxx"
    )
);