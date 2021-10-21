<?php
error_reporting(0);
session_start();
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
$caracters_dni=strlen($dni);
$caracts_numero_tlf=false;
$errvalid=false;
$permitidos = "0123456789";
  for ($i=0; $i<strlen($telefon); $i++){
    if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
      $caracts_numero_tlf = true;
    }
 }


 if($caracters_dni<9){
  header("Location: ../public/registre.php?caracters_dni=true");
  $errvalid=true;
}
if($caracts_numero_tlf==true){
  header("Location: ../public/registre.php?caracters_tlf=true");
  $errvalid=true;
}
if(strlen($telefon)<9){
  header("Location: ../public/registre.php?largada_tlf=true");
  $errvalid=true;
}
if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
  header("Location: ../public/registre.php?mail_err=true");
  $errvalid=true;
}
if(!checkdnsrr(array_pop(explode("@",$mail)),"MX")){
  header("Location: ../public/registre.php?mail_err=true");
  $errvalid=true;
}
if($stm1->rowCount()>0){
  header("Location: ../public/registre.php?dni=true");
  $errvalid=true;
}
if($errvalid==false){
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











