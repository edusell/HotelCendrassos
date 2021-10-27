<?php

function ctrlAdminusuari($peticio, $resposta, $imatges){
    include '../src/config.php';

    $model = new \Daw\adminpdo($config["db"]);

    $usuaris= $model->getusers();
    $resposta->set("llistar_usuaris", $usuaris);

    $dept= $model->getdept();
    $resposta->set("llistar_depts", $dept);

    $resposta->SetTemplate("admin_usuaris.php");


    return $resposta;
}