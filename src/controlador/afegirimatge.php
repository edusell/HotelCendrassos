<?php 

/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per affegir una imatge a la galeria de la web, aquesta no s'enmagatzema a la base de dades, només es guarda la imatge a la carpeta galeria 
***************************/

function ctrladdimage($peticio, $resposta, $imatges){

    $r=$_POST['r'];
 
    $directori = $_FILES['imatge']['name']; 
    $temp = $_FILES['imatge']['tmp_name'];
    move_uploaded_file($temp,'img/galeria/'.$directori);


    $resposta->SetTemplate("galeriaadmin.php");

    return $resposta; 
}