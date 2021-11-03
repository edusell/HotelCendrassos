<?php

function ctrlAdminreserva($peticio, $resposta, $imatges){
    include '../src/config.php';

    $model = new \Daw\adminpdo($config["db"]);

    $reserves = $model->getreserva();
    $resposta->set("llistar_reserves", $reserves);

    $resposta->SetTemplate("admin_reserves.php");
    return $resposta;
}