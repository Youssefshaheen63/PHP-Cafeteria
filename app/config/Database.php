<?php
require_once __DIR__ . '/config.php';
class Database
{

    private $host = DB_HOST;
    private $db = DB_NAME;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $port = DB_PORT;
    public $conn = Null;

    public function connect()
    
    {
        try{

        $this->conn = new PDO(
            "mysql:host=" . $this->host . ";dbname=" . $this->db . ";port=" . $this->port,
            $this->user,
            $this->pass
        );

           $this->conn->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            $this->conn->setAttribute(
                PDO::ATTR_DEFAULT_FETCH_MODE,
                PDO::FETCH_ASSOC
            );

        } catch(PDOException $e){
            die("faild to connect to database: " . $e.getMessage());
        }

        return $this->conn;
    }
}
