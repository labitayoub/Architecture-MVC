<?php
require_once '../app/core/Database.php';
use App\Core\Database;

class Article {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM articles");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
