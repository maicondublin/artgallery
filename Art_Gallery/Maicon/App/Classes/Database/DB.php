<?php

namespace App\Classes\Database;

class DB {

    private $dbServername = "52.215.185.140";
    private $dbUsername = "maicon_2017053";
    private $dbPassword = "A234b!@9";
    private $dbName = "maicon_2017053";

    public function connect(){
        
        $conn = mysqli_connect($this->dbServername, $this->dbUsername, $this->dbPassword, $this->dbName);

        if(!$conn){
            die("Connection failed: ".mysqli_connect_error());
        }

        return $conn;
    }

}