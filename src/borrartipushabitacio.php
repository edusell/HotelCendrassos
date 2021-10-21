<?php
include 'database.php';

if(!isset($_POST['tipus'])){
    header('Location: ../public/admin.php');
}

$ids = $_POST['tipus'];

for($i=0;$i<count($ids);$i++){

    $stm = $conn->prepare("DELETE FROM tipushabitacio WHERE id_tipus = :ids ;");
    $sql = $stm->execute([':ids' => $ids[$i]]);
}
header('Location: ../public/admin.php');

