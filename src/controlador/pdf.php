<?php 


/**************************
Hotel Cendrassos
Autors: Eimantas Milkintas i Eduard Sellas
Controlador per enviar la informacio al pdf final de reserva.
***************************/

function ctrlpdf($peticio, $resposta, $imatges){
    include '../src/config.php';

    $model = new \Daw\adminpdo($config["db"]);

    $id=3;

    $info = $model->pdf($id);
    

    $resposta->set("in", $info);

    $resposta->SetTemplate("pdf.php");

    return $resposta; 
}