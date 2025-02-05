<?php

namespace App\Core;

class Router {
    private $routes = [];

    public function __construct() {
        $this->routes = require '../config/routes.php';
    }

    public function dispatch($uri) {
        $uri = str_replace('/mvc/', '',$uri);
        // var_dump($uri);
        // exit;

        if (isset($this->routes[$uri])) {
            $controllerName = $this->routes[$uri]['controller'];
            $methodName = $this->routes[$uri]['method'];

            require_once "../app/controllers/$controllerName.php";
            $controller = new $controllerName();
            $controller->$methodName();
        } else {
            echo "404 - Page non trouvée";
        }
    }
}
?>
