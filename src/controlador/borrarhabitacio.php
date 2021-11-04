<?php

function ctrldrophabitacio($peticio, $resposta, $imatges){
    include '../src/config.php';

    $model = new \Daw\adminpdo($config["db"]);

    $ids = $_REQUEST['ids'];
    print_r($ids);
 
    
    $model->drophabitacio($ids);

    header ('Location: index.php?r=adminhabitacio');


    $resposta->SetTemplate("admin.php");

    return $resposta; 
}