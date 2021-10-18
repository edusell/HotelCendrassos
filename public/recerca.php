<?php
if(!isset($_GET['arribada_hotel'],$_GET['sortida_hotel'],$_GET['ocupants'])){
    header('Location: pagina_principal.php');
}

$arribada=$_GET['arribada_hotel'];
$sortida=$_GET['sortida_hotel'];
$ocupants=$_GET['ocupants'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css.css"rel="stylesheet" type="text/css">
    <link href="recerca.css"rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container_principal menu_superior">
            <div class="item logo" ></div>
            <div class="item"><a href="habitacions.php">Habitacions</a></div>
            <div class="item">Serveis</div>
            <div class="item">Galeria</div>
            <div class="item">contacta</div>
            <div class="item">Inicia sesio</div>
            <div class="item">Registrarte</div>
        </div>
        <div class="habitacions">

        <?php
        echo($arribada.','.$sortida);
        include 'database.php';

        $sql = "select h.id_habitacio , t.m_tipus , t.serveis_tipus , t.ocupants_tipus , t.desc_tipus ,t.id_tipus ,t.nom_tipus, r.data_arribada,r.data_sortida FROM habitacio h , tipushabitacio t, reservahabitacio i, reserva r where t.id_tipus=h.id_tipus_habitacio AND h.id_habitacio=i.id_habitacio AND i.id_reserva=r.id_reserva AND t.ocupants_tipus>'".$ocupants."' AND ('".$arribada."'>=r.data_sortida OR ('".$arribada."'<r.data_arribada AND '".$sortida."'<=data_arribada));";
        $habitacions = $conn->query($sql);
        echo($sql);

        while($row = $habitacions->fetch_assoc()) {//recorrem el select
         

            $sql='select r.data_arrivada , r.data_sortida , h.id_reserva , h.id_habitacio FROM reserva r, reservahabitacio h WHERE r.id_reserva=h.id_reserva AND h.id_habitacio='.$row['id_habitacio'];
            $reserves = $conn->query($sql);

            

            if($row['id_tipus']==1){
                $img = 'habitacio_familiar.jpg';
            } else {
                $img = 'habitacio_doble.jpg';
            }

            print '<div class="habitacio">';
            print '<img src="img/'.$img.'" alt="Girl in a jacket" height="300px">';
            print '<div>';
            print "Numero d'habitacio:".$row['id_habitacio']."<br>";
            print $row['nom_tipus']." ->".$row['m_tipus']."m<sup>2</sup> <br>";
            print $row['desc_tipus']."<br>";
            print "Ocupants: ".$row['ocupants_tipus']."<br>";
            print "Serveis: ".$row['serveis_tipus']."<br>";
            print '</div>';
            print '</div>';
            print "<br><br><br>";
          }

        ?>
        </div>
</body>
</html>