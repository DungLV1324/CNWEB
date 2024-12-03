<?php
class dbProduct{
    private $host = "localhost";
    private $name = "root";
    private $password = "";
    private $dbname = "products";
    protected $conn = null;
    public function __construct(){
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->name, $this->password);
        }catch (Exception $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
