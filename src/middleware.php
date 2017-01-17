<?php
// Application middleware

$app->add(new \Zeuxisoo\Whoops\Provider\Slim\WhoopsMiddleware($app));
// e.g: $app->add(new \Slim\Csrf\Guard);