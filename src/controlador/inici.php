<?php


/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per a la pagina principal, aquest retorna els dies festius per mostrar-los en el calendari.
***************************/

function ctrlPortada($peticio, $resposta, $imatges){
    include '../src/config.php';

    $model = new \Daw\llistartipushab($config["db"]);

    $dades = $model->calendari();
    $resposta->set("arraycalendari", $dades);

    $resposta->SetTemplate("Pagina_principal.php");

    return $resposta;
} 