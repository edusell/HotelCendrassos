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

$stm = $conn->prepare("INSERT INTO `usuari` (`DNI`, `Nom`, `Cognom`, `tel`, `correu`, `rol`, `username`, `password`, `id_departament_usuari`) VALUES ( :dni , :nom, :cognom, :tel , :mail , '0', :usuari , :pass , '0');");

$stm1 = $conn->prepare("select COUNT(*) from usuari where DNI = :dni;");
$sql1 = $stm1->execute([
  ':dni' => $dni
]);

//Verificar si existeix el usuari a registrar
if($stm1->rowCount()>0){
  header("Location: ../public/registre.html");
  
}else{
  $sql = $stm->execute([
    ':dni' => $dni,
    ':nom' => $nom,
    ':cognom' => $cognom,
    ':usuari' => $usuari,
    ':mail' => $mail,
    ':tel' => $telefon,
    ':pass' => $contrasenya,
  ]);
}











