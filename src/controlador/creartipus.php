<?php

function ctrlcreartipus($peticio, $resposta, $imatges){
    include '../src/config.php';

    $reserva = new \Daw\adminpdo($config["db"]);
    //$img = $_REQUEST['imatge'];
    $directori = $_FILES['imatge']['name'];
    $m = $_REQUEST['m'];
    $omax = $_REQUEST['omax'];
    $preu = $_REQUEST['preu'];
    $nom = $_REQUEST['nom'];
    $descripcio = $_REQUEST['descripcio'];
    $servei = "Aquesta habitacio disposa de serveis de nateja i d'esmorzar";
    //$directori = "C";
    $id= $reserva->ultimidtipus()+1;   


    $temp = $_FILES['imatge']['tmp_name'];
    move_uploaded_file($temp,'img/uploads/'.$directori);


    $reserva->creartipus($id,$m,$servei,$omax,$descripcio,$nom,$preu,$directori);

    
    //$archivo = $_FILES['imatge']['name'];
   


    //print_r($id);
    //die();
    $origen=$_REQUEST['origen'];
    if(isset($origen)){
        header ('Location: index.php?r='.$origen);
    }else{
    header ('Location: index.php?r=admin');
    }
    $resposta->SetTemplate("admin.php");


    return $resposta;
}