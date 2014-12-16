<?php

return array (
    "running" => require("env.php"),
    "development" => array(
        "authenticationPath" => "http://localhost:30627",
        "servicePath" => "http://localhost:31877",
        "username" => "site",
        "password" => "site"
    ),
    "statement" => array(
        "authenticationPath" => "http://nash-comercial.elasticbeanstalk.com:8081",
        "servicePath" => "http://nash-comercial.elasticbeanstalk.com",
        "username" => "site",
        "password" => "4321"
    )
);