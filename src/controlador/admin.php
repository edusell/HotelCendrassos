<?php 

function ctrlAdmin($peticio, $resposta, $imatges){
    include '../src/config.php';

    $model = new \Daw\adminpdo($config["db"]);

    $reserves = $model->getreserva();
    $tipus = $model->gettipus();
    $rols = $model->getrol();

    //print_r($reserves);
    $resposta->set("llistar_tipus", $tipus);
    $resposta->set("llistar_reserves", $reserves);
    $resposta->set("llistar_rols", $rols);

    $resposta->SetTemplate("admin.php");

    return $resposta; 
}