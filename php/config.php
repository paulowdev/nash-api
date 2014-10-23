<?php

return array (
    "running" => require("env.php"),
    "development" => array(
        "servicePath" => "http://localhost:2140/nash",
        "username" => "site",
        "password" => "4321"
    ),
    "statement" => array(
        "servicePath" => "https://srvaramis/nash",
        "username" => "site",
        "password" => "4321"
    )
);