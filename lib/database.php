<?php
// class Database{
//     public $host = DB_HOST;
//     public $user = DB_USER;
//     public $pass = DB_PASS;
//     public $dbname = DB_NAME;

//     public $link;
//     public $error;

//     public function __construct(){
//         $this->connectDB();
//     }

//     private function connectDB(){
//         $this->link = new mysqli($this->host, $this->user, $this->pass,
//         $this->dbname);
        
//         if(!$this->link){
//             $this->error = "Connection fail".$this->link->connect_error;
//             return false;
//         }
//     }

    //select or read data
    // public function select($query){}

    //insert data
    // public function insert($query){}

    //update data
    // public function update($query){}

    //delete data
//     public function delete($query){}
// }


class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    public $conn;

    public function __construct() {
        $this->connectDB();
    }

    private function connectDB() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($sql) {
        $result = $this->conn->query($sql);
        if (!$result) {
            die("Query failed: " . $this->conn->error);
        }
        return $result;
    }

    public function close() {
        $this->conn->close();
    }
}

?>