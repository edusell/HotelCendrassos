<?php 


/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per realitzar els dies festius en el calendari, tambe permet cancalar aquests dies festius.
***************************/

function ctrlfesta($peticio, $resposta, $imatges){
    include '../src/config.php';

    $model = new \Daw\adminpdo($config["db"]);
    $a = $_REQUEST['a'];

    $dades = $_REQUEST['d'];
    $dades = explode(',',$dades);
    $dades[0] = $dades[0]+1;
    $data = "2021-".$dades[0]."-".$dades[1];


    if(isset($a)){

        $model->nofesta($data);
    }else{
    $model->festa($data);}

    header('Location:index.php?r=admincalendari');

    $resposta->SetTemplate("admin.php");

    return $resposta;
}