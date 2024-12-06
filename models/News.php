<?php
require_once("config.php");

class News {
    private $id;
    private $title;
    private $content;
    private $date;
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // Get news by ID
    public function getNewsById($id) {
        $stmt = $this->db->prepare("SELECT * FROM news WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); // Return the news item as an associative array
    }

    // Search news by keyword
    public function search($keyword) {
        $sql = "SELECT * FROM news WHERE title LIKE :keyword OR content LIKE :keyword";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['keyword' => "%$keyword%"]); // Correctly bind the keyword parameter
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Get all news
    public function getAllNews() {
        $sql = $this->db->prepare("SELECT * FROM news");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    // Getter and Setter for ID
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    // Getter and Setter for Title
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter and Setter for Content
    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    // Getter and Setter for Date
    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }
}
?>
