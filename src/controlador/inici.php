<?php

function ctrlPortada($peticio, $resposta, $imatges){
    include '../src/config.php';

    $model = new \Daw\llistartipushab($config["db"]);

    $dades = $model->calendari();
    $resposta->set("arraycalendari", $dades);

    $resposta->SetTemplate("Pagina_principal.php");

    return $resposta;
} 