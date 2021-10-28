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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class='recerca'>
<?php include 'menu.php'; ?>
        <div class="habitacions">
            <?= 'DATA ENTRADA:'.$arribada.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DATA SORTIDA: '.$sortida.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; OCUPANTS:'.$ocupants ?>
        </div>

        <?php
        
        include '../src/database.php';
        try{

//Ocupants select t.id_tipus FROM habitacio h , tipushabitacio t, reservahabitacio i, reserva r where t.id_tipus=h.id_tipus_habitacio AND h.id_habitacio=i.id_habitacio AND i.id_reserva=r.id_reserva AND t.ocupants_tipus>= 2;
//SELECT rh.id_habitacio from reserva r,reservahabitacio rh where rh.id_reserva=r.id_reserva AND ( 2021-10-01 >=r.data_sortida OR ( 2021-10-01 <r.data_arribada AND 2021-10-28 <=data_arribada));

        $stm1 = $conn->prepare("select h.id_habitacio , t.m_tipus ,t.preu, t.serveis_tipus , t.ocupants_tipus , t.desc_tipus ,t.id_tipus ,t.nom_tipus, r.data_arribada,r.data_sortida FROM habitacio h , tipushabitacio t, reservahabitacio i, reserva r where t.id_tipus=h.id_tipus_habitacio AND h.id_habitacio=i.id_habitacio AND i.id_reserva=r.id_reserva AND t.ocupants_tipus> :ocupants AND ( :arribada >=r.data_sortida OR ( :arribada <r.data_arribada AND :sortida <=data_arribada));");
        $stm1->execute([
             ':arribada' => $arribada,
             ':ocupants' => $ocupants,
             ':sortida' => $sortida
        ]);

        while($row = $stm1->fetch(PDO::FETCH_ASSOC)) {//recorrem el select
         
            
                $img = 'habitacio_familiar.jpg';

            
            print "<div class='container_reserva_habitacions'>";
            print '<div class="recerca_habitacions">';
              print"<h3>".$row['nom_tipus']."</h3>";
              print'<div class="container_imatges_recerca">';
                print'<div class="imatges_recerca"></div>';
                    print'<div class="text">';
                        print"<p>".$row['desc_tipus']."</p>";
                        print"<div class='especificacions_recerca'>";
                            print "<img src='logos\habitacions_logos\silueta-persona.png'>";
                            print"<p><b>MAX ".$row['ocupants_tipus']." p</b></p>";
                            print "<img src='logos\habitacions_logos\information.png'>";
                            print"<p><b>".$row['m_tipus']."m<sup>2 </sup></b></p>";
                            print"<p><b> Nº".$row['id_habitacio']."</b></p>";
                        print"</div>";
                        print"<div class='preu_recerca'>".$row['preu']."€ </div>";
                        print"<a href='habitacions.php#arribada_hotel'><div class='boto_reserva'>Reserva</div></a>";
                    print"</div>";
              print"</div>";
            print"</div>";
            print "</div>";
          }

        }catch(Exeption $e ){}

        ?>
        </div>
</body>
<?php include 'footerprim.php';?>
</html>