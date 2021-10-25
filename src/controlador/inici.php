<?php

function ctrlPortada($peticio, $resposta, $imatges){

    $resposta->SetTemplate("Pagina_principal.php");

    return $resposta;
}