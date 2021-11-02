<?php

function ctrrmuser($peticio, $resposta, $imatges){
    include '../src/config.php';

    $reserva = new \Daw\adminpdo($config["db"]);

    $ids = $_REQUEST['usuaris'];
    print_r($ids);
    
    
    $reserva->dropuser($ids);


    header ('Location: index.php?r=adminusuari');

    $resposta->SetTemplate("admin_usuaris.php");

    return $resposta;
}