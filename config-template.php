<?php

return array (
    "running" => require("env.php"),
    "development" => array(
        "servicePath" => "http://localhost:2140/nash",
        "username" => "username",
        "password" => "******"
    ),
    "statement" => array(
        "servicePath" => "https://srvaramis/nash",
        "username" => "username",
        "password" => "******"
    ),
    "production" => array(
        "servicePath" => "https://nash.fortesinformatica.com.br",
        "username" => "username",
        "password" => "******"
    )
);