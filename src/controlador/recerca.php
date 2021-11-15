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
    
    $dates =explode("-",$data);

    $entrada = $dates[0];
    $sortida = $dates[1];
    $ocupants = $_REQUEST['ocupants'];

    $hab = $tip_habs->reserves($entrada,$sortida,$ocupants);

    $resposta->set("disponibles", $hab);
    $resposta->SetTemplate("recerca.php");
    return $resposta;
   
    //}
    
    
    
}