<?php

function ctrlresumreserva($peticio, $resposta, $imatges){
    include '../src/config.php';
    $resposta->SetTemplate("pagament.php");


    
    $reserva_id_tipus_habitacio = $_POST['id_tipus_habitacio'];
   // $id_seleccionat=$_POST['id_tipus_habitacio'];
    $arribada=$_POST['data-entrada'];
    $sortida=$_REQUEST['data-sortida'];
    //$arribada1=date_format($date,'Y/m/d');
    //$sortida1=date_format($date1,'Y/m/d');

    $entrada1= new DateTime($arribada);
    $sortida1= new DateTime($sortida);
    $dias = $entrada1->diff($sortida1);
    $dias_reserva=$dias ->days;

   

    $dades_reserva = new \Daw\llistartipushab($config["db"]);
    $reserva_id_tipus_habitacio = $_POST['id_tipus_habitacio'];
    $dades = $dades_reserva->resumreserva($reserva_id_tipus_habitacio);
    $preu_total=$dades[0]['preu']*($dias_reserva-1);
   
    $resposta->set("total", $preu_total);
    $resposta->set("resum_reserva", $dades);
    $resposta->set("dias", $dias_reserva);
   
    
    $resposta->SetTemplate("pagament.php");
    
    
    
    
    
    return $resposta;
}