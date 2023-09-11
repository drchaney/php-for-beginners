<?php

$routes = require('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function abort($code = 404) {
  http_response_code($code);
  require "views/{$code}.php";
  die();
}

function routeToController($uri, $routes) {
  if (array_key_exists($uri, $routes)){ // if the uri matches the route, then grab the associated controller
    require $routes[$uri];
  } else {
    abort(404);
  }
}

routeToController($uri, $routes);