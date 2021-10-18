<?php
$host='localhost';
$user='root';
$pass='';
$dbname='hotelcendrassos';


$conn = new mysqli($host, $user, $pass, $dbname);
    if ($conn->connect_errno) {
        echo "Error al connectar a MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
    }
    ?>