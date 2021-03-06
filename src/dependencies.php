<?php
// DIC configuration
$container = $app->getContainer();

// Env
$container["env"] = function(\Slim\Container $c) {
    if(file_exists(__DIR__ . "/../.env.php"))
        $env = require_once(__DIR__ . "/../.env.php");
    else
        throw new \Exception("Error, .env.php does not exist..");

    return $env;
};

// View renderer
$container["view"] = function (\Slim\Container $c) {
    $settings = $c->get("settings");
    $view = new Slim\Views\Twig($settings["view"]["template_path"], $settings["view"]["twig"]);
    // Add extensions
    $view->addExtension(new Slim\Views\TwigExtension($c->get("router"), $c->get("request")->getUri()));
    $view->addExtension(new Twig_Extension_Debug());
    return $view;
};

// Monolog
$container["logger"] = function (\Slim\Container $c) {
    $settings = $c->get("settings")["logger"];
    $logger = new Monolog\Logger($settings["name"]);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings["path"], $settings["level"]));
    return $logger;
};

// MongoDB
$container["mongodb"] = function (\Slim\Container $c) {
    return new MongoDB\Client("mongodb://127.0.0.1:27017", array(), array("typeMap" => array("root" => "array", "document" => "array", "array" => "array")));
};

// Cache
$container["cache"] = function(\Slim\Container $c) {
    return new \EVEAuth\Lib\Cache();
};

// Session handler
$container["sessionHandler"] = function(\Slim\Container $c) {
    $cache = $c->get("cache");
    return new \EVEAuth\Lib\Sessions($cache);
};