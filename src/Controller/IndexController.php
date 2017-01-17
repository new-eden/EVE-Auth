<?php

namespace EVEAuth\Controller;

use EVEAuth\Middleware\Controller;

class IndexController extends Controller {
    public function index($name = null) {
        return $this->render("index.twig", array("name" => $name));
    }
}