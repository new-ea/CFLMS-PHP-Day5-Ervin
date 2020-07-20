<?php

class DBConnection {
   
    private $DB_HOST = "localhost";
    private $DB_USER = "root";
    private $DB_PWD = "";
    private $DB_NAME = "cr10_Ervin_biglibrary";
    private $conn = "";

    public function __construct(){
        $this->conn = new mysqli($this->DB_HOST, $this->DB_USER, $this->DB_PWD, $this->DB_NAME);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $this->conn;
    }

}