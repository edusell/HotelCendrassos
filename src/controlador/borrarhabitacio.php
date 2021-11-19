<?php

/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per esborrar una habitacio, rep les dedes de adminhabitacions.php(panell habitacions del menu administrador) i et retorna a la mateixa pagina.
***************************/

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