<?php

function ctrladdhabitacio($peticio, $resposta, $imatges){
    include '../src/config.php';



    $model = new \Daw\adminpdo($config["db"]);

    $tipus = $_REQUEST['tipus'];
    print_r($tipus);
    $id = $model->ultimahabitacio();
    $id++;

    $model->crearhabitacio($id,$tipus);



    header ('Location: index.php?r=adminhabitacio');
 
    $resposta->SetTemplate("admin.php");

    return $resposta; 
}