<?php 

/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per llistar les reserves ,els tipus d'habitacions i els rols(departaments) que 
hi ha a la base de dades, retorna les dades a admin.php (Panell principal de administració).
***************************/

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