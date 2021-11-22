<?php


/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador llistar les habitacions amb la informacio del tipus d'habitacio i els tipus d'ahbitacions.
***************************/

function ctrlAdminhabitacio($peticio, $resposta, $imatges){
    include '../src/config.php';

    $model = new \Daw\adminpdo($config["db"]);

    $tipus = $model->gettipus();
    $habitacions = $model->gethabitacions();
    $resposta->set("llistar_tipus", $tipus);
    $resposta->set("llistar_habitacions", $habitacions);

    $resposta->SetTemplate("admin_habitacions.php");
    return $resposta;
}