<?php

function ctradddept($peticio, $resposta, $imatges){
    include '../src/config.php';

    $model = new \Daw\adminpdo($config["db"]);

    $nom = $_POST['nom'];
    $desc = $_POST['descripcio'];
    $ids = $model->getdeptid();
    
    $id = $ids[0]['id_departament'];
    $id++;
    $model->adddept($id,$nom,$desc);

    header('Location:index.php?r=adminusuari');

    return $resposta;
}