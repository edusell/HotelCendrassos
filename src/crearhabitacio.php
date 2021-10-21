<?php
include 'database.php';

if(!isset($_POST['m'],$_POST['omax'],$_POST['preu'],$_POST['nom'],$_POST['descripcio'])){
    header('Location: ../public/admin.php');
}
$m = $_POST['m'];
$omax = $_POST['omax'];
$preu = $_POST['preu'];
$nom = $_POST['nom'];
$descripcio = $_POST['descripcio'];

$stm = $conn->prepare("DELETE FROM reserva WHERE id_reserva = :ids ;");
$sql = $stm->execute([':ids' => $ids[$i]]);