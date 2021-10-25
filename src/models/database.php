<?php

class conn{
    private $conn;
    private $dsn='mysql:dbname=hotelcendrassos;host=localhost';
    private $user='root';
    private $pass='';

    public function __contruct(){
        $this->$conn = new PDO($dsn,$user,$pass);
    }
}
