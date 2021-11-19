<?php

/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per esborrar un departament rep la id del departament desde adminhabitacions (panel d'habitacions del menu administrador) i et rederigeix un altre cop a la pagina.
***************************/

function ctrldropdept($peticio, $resposta, $imatges){
    include '../src/config.php';

    $model = new \Daw\adminpdo($config["db"]);
    $id=$_REQUEST['ids'];

    
    $model->dropdept($id);

    //print_r($reserves);
    header('Location: index.php?r=adminusuari');
    $resposta->SetTemplate("admin.php");

    return $resposta;
}