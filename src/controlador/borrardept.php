<?php

function ctrldropdept($peticio, $resposta, $imatges){
    include '../src/config.php';

    $model = new \Daw\adminpdo($config["db"]);
    $id=$_REQUEST['ids'];

    $model->dropdept($id);

    //print_r($reserves);
    header('Location: index.php?r=adminusuari')
    $resposta->SetTemplate("admin.php");

    return $resposta;
}