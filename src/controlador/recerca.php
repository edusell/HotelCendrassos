<?php 

function ctrlRecerca($peticio, $resposta, $imatges){
    include '../src/config.php';

    $tip_habs = new \Daw\llistartipushab($config["db"]);
    /*if(isset($_POST['id_tipus_habitacio'])){
        $reserva_id_tipus_habitacio = $_POST['id_tipus_habitacio'];
        $dades = $tip_habs->resumreserva($reserva_id_tipus_habitacio);
        
        $resposta->set("resum_reserva", $dades);
        $resposta->SetTemplate("recerca.php");
        return $resposta;
        
        
    }else{*/
    
    $data = $_REQUEST['daterange'];
    
    $dates =explode(" - ",$data);

    $arribada = $dates[0];
    $parts = explode("/",$arribada);
    $arribada= $parts[2].'-'.$parts[1].'-'.$parts[0];

    $sortida = $dates[1];
    $parts = explode("/",$sortida);
    $sortida= $parts[2].'-'.$parts[1].'-'.$parts[0];



    $ocupants = $_REQUEST['ocupants'];

    $hab = $tip_habs->reserves($arribada,$sortida,$ocupants);

    $resposta->set("disponibles", $hab);
    $resposta->SetTemplate("recerca.php");
    return $resposta;
   
    //}
    
    
    
}