<?php

function ctrlresumreserva($peticio, $resposta, $imatges){
    include '../src/config.php';

    $dades_reserva = new \Daw\llistartipushab($config["db"]);
    $reserva_id_tipus_habitacio = $_POST['id_tipus_habitacio'];
    $dades = $dades_reserva->resumreserva($reserva_id_tipus_habitacio);
    $redireccio_pagina_recerca=$_SERVER['HTTP_REFERER'];
    
    //print_r($dades);
    //die();
    
    $resposta->set("resum_reserva", $dades);
    //header("Location:index.php?r=recerca");

    
    //$resposta->SetTemplate("recerca.php");
    $resposta->redirect("Location:".$redireccio_pagina_recerca);
    print_r($resposta);
    die();
    
    
    
    return $resposta;
}