<?php

include 'database.php';

if(!isset($_GET['nom'],$_GET['dni'],$_GET['cognom'],$_GET['usuari'],$_GET['mail'],$_GET['telefon'],$_GET['contrasenya'])){
    echo('Location:singup.php');
    //header('Location:singup.php');
}
//echo('hola');
$nom= $_GET['nom'];
$dni=$_GET['dni'];
$cognom =$_GET['cognom'];
$usuari=$_GET['usuari'];
$mail=$_GET['mail'];
$telefon=$_GET['telefon'];
$contrasenya=$_GET['contrasenya'];

$sql = "INSERT INTO `usuari` (`DNI`, `Nom`, `Cognom`, `tel`, `correu`, `rol`, `username`, `password`, `id_departament_usuari`) VALUES ('".$dni."', '".$nom."', '".$cognom."', '".$telefon."', '".$mail."', '0', '".$usuari."', '".$contrasenya."', '0');";
//http://localhost/hotelcendrassos/validacioregistre.php?mail=eduardsellaslleo%40gmail.com&nom=Eduard&cognom=Sellas+Lleo&dni=41563450s&telefon=616161166&usuari=edu&contrasenya=Hola1234
if ($conn->query($sql) === TRUE) {
    echo "OK";      
  }else {
    echo "ERROR";
  }
echo($sql);