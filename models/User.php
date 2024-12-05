<?php 
require_once __DIR__ . '/../config.php';

 Class User {
    private $id;
    private $username;
    private $password;
    private $role;
    private $db;
     public function __construct(){
        $this->db = new PDO('mysql:host='.DB_HOST .';dbname='. DB_NAME, DB_USER, DB_PASS);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     }
    public function getAllData(){
       
        $sql = $this->db->prepare("SELECT * FROM users");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getId(){
        return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
    public function getUserName(){
        return $this->username;
    }    
    public function setUserName($username){
        $this->username = $username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function getRole(){
        return $this->role;
        }
        public function setRole($role){
            $this->role = $role;
        }
 }

?>