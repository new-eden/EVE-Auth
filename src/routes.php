<?php

// Index controller
$app->group("", function() use ($app) {
    $controller = new \EVEAuth\Controller\IndexController($app);
    $app->get("/[{name:[a-zA-Z0-9]+}]", $controller("index"));
});