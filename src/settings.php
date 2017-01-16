<?php
return [
    "settings" => [
        "debug" => true,
        "whoops.editor" => "sublime",
        "displayErrorDetails" => true, // set to false in production
        "addContentLengthHeader" => false, // Allow the web server to send the content-length header
        "determineRouteBeforeAppMiddleware" => false,

        // View settings
        "view" => [
            "template_path" => __DIR__ . "/../templates",
            "twig" => [
                "cache" => __DIR__ . "/../cache/twig",
                "debug" => true,
                "auto_reload" => true,
            ],
        ],

        // Monolog settings
        "logger" => [
            "name" => "eveauth",
            "path" => isset($_ENV["docker"]) ? "php://stdout" : __DIR__ . "/../logs/app.log",
            "level" => \Monolog\Logger::DEBUG,
        ],
    ],
];