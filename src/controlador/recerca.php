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
    $entrada = $_REQUEST['arribada_hotel'];
    $sortida = $_REQUEST['sortida_hotel'];
    $ocupants = $_REQUEST['ocupants'];

    $hab = $tip_habs->reserves($entrada,$sortida,$ocupants);

    $resposta->set("disponibles", $hab);
    $resposta->SetTemplate("recerca.php");
    return $resposta;
   
    //}
    
    
    
}