<?php
include 'database.php';

if(!isset($_POST['reserves'])){
    header('Location: ../public/admin.php');
}

$ids = $_POST['reserves'];

for($i=0;$i<count($ids);$i++){

    $sql= "DELETE FROM reserva WHERE id_reserva = ".$ids[$i].";";
    print $sql;
    if ($conn->query($sql) === TRUE) {
       header('Location: ../public/admin.php');
    }else {
        header('Location: ../public/admin.php');
    }
}
