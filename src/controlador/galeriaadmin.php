<?php 


/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per dirigir al panell de la galeria en el menu administrador.
***************************/

function ctrlgaleriaadmin($peticio, $resposta, $imatges){
    include '../src/config.php';

    $resposta->SetTemplate("galeriaadmin.php");

    return $resposta; 
} 