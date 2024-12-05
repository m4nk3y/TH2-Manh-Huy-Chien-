<?php
require_once __DIR__ . '/../include/database.php';

class News
{
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
