<?php
include 'database.php';

if(!isset($_POST['tipus'])){
    header('Location: ../public/admin.php');
}

$ids = $_POST['tipus'];


//borrar habitacio 
try{
    for($i=0;$i<count($ids);$i++){
    $stm1 = $conn->prepare("DELETE FROM habitacio WHERE id_tipus_habitacio = :ids ;");
    $sql1 = $stm1->execute([':ids' => $ids[$i]]);
    }
}catch(Exception $e){

}


//borrar tipus habitacio
try{
    for($i=0;$i<count($ids);$i++){

        $stm = $conn->prepare("DELETE FROM tipushabitacio WHERE id_tipus = :ids ;");
        $sql = $stm->execute([':ids' => $ids[$i]]);
    }
}catch(Exception $e){
   
}


header('Location: ../public/admin.php');

