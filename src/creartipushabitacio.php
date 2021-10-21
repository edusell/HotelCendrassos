<?php
include 'database.php';

if(!isset($_POST['m'],$_POST['omax'],$_POST['preu'],$_POST['nom'],$_POST['descripcio'])){
    //header('Location: ../public/admin.php');
    echo('err');
}

$m = $_POST['m'];
$omax = $_POST['omax'];
$preu = $_POST['preu'];
$nom = $_POST['nom'];
$descripcio = $_POST['descripcio'];
$servei = "Aquesta habitacio disposa de serveis de nateja i d'esmorzar";

$stm = ('SELECT id_tipus FROM tipushabitacio ORDER BY id_tipus DESC LIMIT 1;');
foreach ($conn->query($stm) as $row) {
    $id=$row['id_tipus'];
}
$id++;



$stm = $conn->prepare("INSERT INTO tipushabitacio (id_tipus, m_tipus, serveis_tipus, ocupants_tipus, desc_tipus, nom_tipus, id_hotel_tipus, preu) VALUES ( :id , :m , :serveis , :omax , :descripcio , :nom , '1', :preu );");
$sql = $stm->execute([
    ':id' => $id,
    ':m' => $m,
    ':serveis' => $servei,
    ':omax' => $omax,
    ':descripcio' => $descripcio,
    ':nom' => $nom,
    ':preu' => $preu,
    ]);

header('Location: ../public/admin.php');