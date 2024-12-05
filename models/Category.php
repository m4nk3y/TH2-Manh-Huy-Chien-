<?php
// Trong Category.php
require_once __DIR__ . '/../include/database.php';

class Category
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllCategories()
    {
        $query = "SELECT * FROM categories";
        $stmt = $this->db->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
