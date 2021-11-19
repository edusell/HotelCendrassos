<?php

function ctrlcrearusuari($peticio, $resposta, $imatges){
    include '../src/config.php';

    $model = new \Daw\adminpdo($config["db"]);

   // $reserves = $model->getreserva();
   // $tipus = $model->gettipus();
    

    

    $mail = $_POST['mail'];
    $nom = $_POST['nom'];
    $cnom =$_POST['cognom'];
    $dni = $_POST['dni'];
    $tel = $_POST['telefon'];
    $usuari = $_POST['usuari'];
    $pass =$_POST['contrasenya'];
   // $rol=0;

    
    $model ->adduser($mail,$nom,$cnom,$dni,$tel,$usuari,$pass);
    $resposta->SetTemplate("login.php");
    
   
    return $resposta;
}