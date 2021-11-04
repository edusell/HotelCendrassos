<?php
include 'database.php';

if(!isset($_POST['m'],$_POST['omax'],$_POST['preu'],$_POST['nom'],$_POST['descripcio'])){
    header('Location: ../public/admin.php?err=true');

    
}

$m = $_POST['m'];
$omax = $_POST['omax'];
$preu = $_POST['preu'];
$nom = $_POST['nom'];
$descripcio = $_POST['descripcio'];
$servei = "Aquesta habitacio disposa de serveis de nateja i d'esmorzar";
$directori= $_FILES['imatge']['name'];

$stm = ('SELECT id_tipus FROM tipushabitacio ORDER BY id_tipus DESC LIMIT 1;');
foreach ($conn->query($stm) as $row) {
    $id=$row['id_tipus'];
}
$id++;

$dir_pujada = '../public/img/uploads/';
$imatge_pujat = $dir_pujada.basename($_FILES['imatge']['name']);
$tmp=$_FILES['imatge']['tmp_name'];
move_uploaded_file($tmp, $imatge_pujat);



$stm = $conn->prepare("INSERT INTO tipushabitacio (id_tipus, m_tipus, serveis_tipus, ocupants_tipus, desc_tipus, nom_tipus, id_hotel_tipus, preu,imatge) VALUES ( :id , :m , :serveis , :omax , :descripcio , :nom , '1', :preu , :img );");
$sql = $stm->execute([
    ':id' => $id,
    ':m' => $m,
    ':serveis' => $servei,
    ':omax' => $omax,
    ':descripcio' => $descripcio,
    ':nom' => $nom,
    ':preu' => $preu,
    ':img' =>$directori,
    ]);

header('Location: ../public/admin.php');