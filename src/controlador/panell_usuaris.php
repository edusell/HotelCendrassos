<?php


/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per el panell usuaris del menu administrador.
***************************/

function ctrlAdminusuari($peticio, $resposta, $imatges){
    include '../src/config.php';

    $model = new \Daw\adminpdo($config["db"]);

    $rols = $model->getrol();
    $resposta->set("llistar_rols", $rols);

    $usuaris= $model->getusers();
    $resposta->set("llistar_usuaris", $usuaris);

    $dept= $model->getdept();
    $resposta->set("llistar_depts", $dept);

    $resposta->SetTemplate("admin_usuaris.php");


    return $resposta;
}