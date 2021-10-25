<?php

function ctrlAdminreserva($peticio, $resposta, $imatges){

    $resposta->SetTemplate("admin_reserves.php");
    return $resposta;
}