<?php

function ctrldelimage($peticio, $resposta, $imatges){

    $ruta= $_REQUEST['fotos'];


    for($i=0;$i<count($ruta);$i++){
        unlink($ruta[$i]);
    }

    header ('Location: index.php?r=galeriaadmin');

    $resposta->SetTemplate("admin.php");

    return $resposta;
}