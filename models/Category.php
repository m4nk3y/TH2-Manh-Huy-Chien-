<?php
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

    private $id;
    private $name;

    // public function __construct() {
    //     $this->db = new PDO('mysql:host='.DB_HOST .';dbname='. DB_NAME, DB_USER, DB_PASS);
    //     $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // }
    // public function getAlldata() {
    //     $sql = $this->db->prepare("SELECT * from categories");
    //     $sql->execute();
    //     return $sql->fetchAll(PDO::FETCH_ASSOC);
    // }
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }

}

?>
