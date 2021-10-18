<?php
$dsn='mysql:dbname=hotelcendrassos;host=localhost';

$host='localhost';
$user='root';
$pass='';
$dbname='hotelcendrassos';

try{
    $conn = new PDO($dsn,$user,$pass);
} catch(PDOExepttion $e){
    die('Ha fallat la conexio a la base de dades');
}

    ?>