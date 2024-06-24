<?php
class Database{
    private $host = "fdb30.awardspace.net";
    private $db_name = "3816249_final";
    private $username = "3816249_final";
    private $password = "mypassword123";
    public $conn;
 
    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);}
        catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>