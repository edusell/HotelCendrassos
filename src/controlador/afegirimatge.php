<?php 

function ctrladdimage($peticio, $resposta, $imatges){

    $r=$_POST['r'];
 
    $directori = $_FILES['imatge']['name']; 
    $temp = $_FILES['imatge']['tmp_name'];
    move_uploaded_file($temp,'img/galeria/'.$directori);


    $resposta->SetTemplate("galeriaadmin.php");

    return $resposta; 
}