<?php
require_once '../config/config.php';
require_once '../vendor/autoload.php';
use App\Core\Router;
use App\Core\Database;


$router = new Router();
$router->dispatch($_SERVER['REQUEST_URI']);
Database::getInstance();
?>
