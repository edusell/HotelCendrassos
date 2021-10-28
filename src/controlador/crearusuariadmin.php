<?php

function ctrlcrearusuariadmin($peticio, $resposta, $imatges){
    include '../src/config.php';

    $model = new \Daw\adminpdo($config["db"]);

    $reserves = $model->getreserva();
    $tipus = $model->gettipus();
    $rols = $model->getrol();

    //print_r($reserves);
    $resposta->set("llistar_tipus", $tipus);
    $resposta->set("llistar_reserves", $reserves);
    $resposta->set("llistar_rols", $rols);

    $mail = $_GET['mail'];
    $nom = $_GET['nom'];
    $cnom =$_GET['cognom'];
    $dni = $_GET['dni'];
    $tel = $_GET['telefon'];
    $usuari = $_GET['usuari'];
    $pass =$_GET['contrasenya'];
    $rol = $_GET['rol'];

    $err = $model->adduseradmin($mail,$nom,$cnom,$dni,$tel,$usuari,$pass,$rol);

    if(count($err)!=0){
        $resposta->set("erradduser",$err);
    }
    $resposta->SetTemplate("admin.php");

    return $resposta;
}