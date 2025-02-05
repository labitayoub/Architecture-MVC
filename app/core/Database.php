<?php
namespace App\Core;
use PDO;
class Database {
    private static $instance = null;
    private $pdo;

    private function __construct() {
        $config = require '../config/config.php';
        // var_dump($config);
        // exit;
        $dsn = "mysql:host={$config['db_host']};dbname={$config['db_name']}";
        $this->pdo = new PDO($dsn, $config['db_user'], $config['db_pass']);
        // $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        // echo "okay";
        return self::$instance->pdo;
    }
}
?>
