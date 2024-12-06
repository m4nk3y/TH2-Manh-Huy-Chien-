<?php

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../include/database.php';

class News {
    private $id;
    private $title;
    private $content;
    private $date;
    private $db;

    // public function __construct() {
    //     $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    //     $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // }

    // Get news by ID
    // public function getNewsById($id) {
    //     $stmt = $this->db->prepare("SELECT * FROM news WHERE id = :id");
    //     $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    //     $stmt->execute();
    //     return $stmt->fetch(PDO::FETCH_ASSOC); // Return the news item as an associative array
    // }

    // Search news by keyword
    public function search($keyword) {
        $sql = "SELECT * FROM news WHERE title LIKE :keyword OR content LIKE :keyword";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['keyword' => "%$keyword%"]); // Correctly bind the keyword parameter
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
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

    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function getAllNews()
    {
        $query = "SELECT news.*, categories.name AS category_name FROM news 
                  LEFT JOIN categories ON news.category_id = categories.id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getNewsById($id)
    {
        $query = "SELECT * FROM news WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addNews($title, $content, $image_name, $category_id)
    {
        $sql = "INSERT INTO news (title, content, image, category_id, created_at) 
            VALUES (:title, :content, :image, :category_id, NOW())";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':image', $image_name);  // Lưu tên file ảnh
        $stmt->bindParam(':category_id', $category_id);

        if ($stmt->execute()) {
            return true;
        } else {
            // Hiển thị lỗi nếu không thành công
            echo "Error: " . implode(", ", $stmt->errorInfo());
            return false;
        }
    }

    public function updateNews($id, $title, $content, $image_name, $category_id)
    {
        // Nếu có ảnh mới, cập nhật ảnh mới
        $sql = "UPDATE news SET title = :title, content = :content, image = :image, category_id = :category_id 
            WHERE id = :id";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':image', $image_name);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }


    public function deleteNews($id)
    {
        $query = "DELETE FROM news WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
}


// require_once __DIR__ . '/../include/database.php';

// class News
// {
//     private $conn;

//     public function __construct()
//     {
//         $database = new Database();
//         $this->conn = $database->connect();
//     }

//     public function getAllNews()
//     {
//         $query = "SELECT news.*, categories.name AS category_name FROM news 
//                   LEFT JOIN categories ON news.category_id = categories.id";
//         $stmt = $this->conn->prepare($query);
//         $stmt->execute();
//         return $stmt->fetchAll(PDO::FETCH_ASSOC);
//     }

//     public function getNewsById($id)
//     {
//         $query = "SELECT * FROM news WHERE id = :id";
//         $stmt = $this->conn->prepare($query);
//         $stmt->bindParam(":id", $id);
//         $stmt->execute();
//         return $stmt->fetch(PDO::FETCH_ASSOC);
//     }

//     public function addNews($title, $content, $image_name, $category_id)
//     {
//         $sql = "INSERT INTO news (title, content, image, category_id, created_at) 
//             VALUES (:title, :content, :image, :category_id, NOW())";

//         $stmt = $this->conn->prepare($sql);
//         $stmt->bindParam(':title', $title);
//         $stmt->bindParam(':content', $content);
//         $stmt->bindParam(':image', $image_name);  // Lưu tên file ảnh
//         $stmt->bindParam(':category_id', $category_id);

//         if ($stmt->execute()) {
//             return true;
//         } else {
//             // Hiển thị lỗi nếu không thành công
//             echo "Error: " . implode(", ", $stmt->errorInfo());
//             return false;
//         }
//     }

//     public function updateNews($id, $title, $content, $image_name, $category_id)
//     {
//         // Nếu có ảnh mới, cập nhật ảnh mới
//         $sql = "UPDATE news SET title = :title, content = :content, image = :image, category_id = :category_id 
//             WHERE id = :id";

//         $stmt = $this->conn->prepare($sql);
//         $stmt->bindParam(':title', $title);
//         $stmt->bindParam(':content', $content);
//         $stmt->bindParam(':image', $image_name);
//         $stmt->bindParam(':category_id', $category_id);
//         $stmt->bindParam(':id', $id);

//         return $stmt->execute();
//     }


//     public function deleteNews($id)
//     {
//         $query = "DELETE FROM news WHERE id = :id";
//         $stmt = $this->conn->prepare($query);
//         $stmt->bindParam(":id", $id);
//         $stmt->execute();
//     }
// }

