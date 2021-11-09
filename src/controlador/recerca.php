<?php 

function ctrlRecerca($peticio, $resposta, $imatges){
    include '../src/config.php';

    $tip_habs = new \Daw\llistartipushab($config["db"]);

    $entrada = $_REQUEST['arribada_hotel'];
    $sortida = $_REQUEST['sortida_hotel'];
    $ocupants = $_REQUEST['ocupants'];

    $hab = $tip_habs->reserves($entrada,$sortida,$ocupants);

    $resposta->set("disponibles", $hab);
    $resposta->SetTemplate("recerca.php");

    return $resposta;
}