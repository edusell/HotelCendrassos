<?php
/*if(!isset($_REQUEST['arribada_hotel'],$_REQUEST['sortida_hotel'],$_REQUEST['ocupants'])){
    header('Location: index.php');
}

$arribada=$_REQUEST['arribada_hotel'];
$sortida=$_REQUEST['sortida_hotel'];*/
$data = $_REQUEST['daterange'];
$ocupants=$_REQUEST['ocupants'];
$dates=explode(' - ',$data);
$a = $dates[0];
$s = $dates[1];

$part=explode('/',$a);
$date =new DateTime( implode('-',array_reverse($part)));
$entrada = date_format($date,'Y/m/d');

$part=explode('/',$s);
$date =new DateTime( implode('-',array_reverse($part)));
$sortida = date_format($date,'Y/m/d');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="metodo-pago.css"rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"rel="stylesheet" type="text/css">
    <link href="css.css"rel="stylesheet" type="text/css">

  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESERVA</title>
</head>
<body class='recerca'>
<?php include 'menu.php'; ?>
        <div class="habitacions"> 
            <?= $entrada.'-'.$sortida.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DATA SORTIDA: '.$sortida.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; OCUPANTS:'.$ocupants ?>
        </div>
       

        
        <div id="tipus_habitacions">
        
        <?php
        
        try{

            foreach($disponibles as $row){

               

                $img = 'habitacio_familiar.jpg';

            
            print "<div class='container_reserva_habitacions' id='tipus_habitacio'>";
                print '<div class="recerca_habitacions">';
                print"<h1>".$row['nom_tipus']."</h1>";
                print'<div class="container_imatges_recerca">';
                    print'<img class="imatges_recerca" src="img/habitacio_doble.jpg">';
                    print'<div class="text">';
                        print"<p>".$row['desc_tipus']."</p>";
                        print"<div class='especificacions_recerca'>";
                            print "<img src='logos\habitacions_logos\silueta-persona.png'>";
                            print"<p><b>MAX ".$row['ocupants_tipus']." p</b></p>";
                            print "<img src='logos\habitacions_logos\information.png'>";
                            print"<p><b>".$row['m_tipus']."m<sup>2 </sup></b></p>";
                        print"</div>";
                        print"<div class='preu_recerca'>".$row['preu']."€ </div>";
                        if( !isset($_SESSION["DNI"]) ){
                            print"<a  href='index.php?r=login'><div class='boto_reserva' id='reserva'>Reserva</div></a>";
                        }else{
                            //print "<form action='index.php?r=recerca' method='post'>";
                            //print "<input type='hidden' name='id_tipus_habitacio' value='".$row['id_tipus_habitacio']."'> </input>";
                            //print"<button type='submit'><div class='boto_reserva' id='reserva1'>Reserva</div></button>";
                            //print"</form>";

                            print "<form action='index.php?r=dadesreserva' method='post'>";
                            print "<input type='hidden' name='id_tipus_habitacio' value='".$row['id_tipus_habitacio']."'>";
                            print "<input type='hidden' name='data-entrada' value='".$entrada."'>";
                            print "<input type='hidden' name='data-sortida' value='".$sortida."'>";
                            print"<button  class='boto_reserva' type='submit'>Reserva</button>";
                            print "</form>";
                        }
                        print"</div>";
                    print"</div>";
                 print"</div>";
            print "</div>";
          }
        }catch(Exeption $e ){}

        ?>
      
    </div>
    </body>




<!-- CSS only -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.7.2/css/all.css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
//const boto = document.querySelector("#reserva1");

const id_habitacio = document.getElementById('id_tipus_habitacio').value;

const boto = document.getElementById('reserva1');
const fondo=document.querySelector("body > div:nth-child(5)");
const metodo_pago = document.querySelector("#pop_up");
const habitacions=document.querySelector("#tipus_habitacions");
const body=document.querySelector("body");


boto.addEventListener('click', () => {
        metodo_pago.style.display = 'block ';
       // metodo_pago.style.zIndex = "1" ;
        //habitacions.style.display ='none';
        body.style.overflowY = "hidden";
        fondo.style.backgroundColor = "rgba(0, 0, 0, 0.5)";        
});

/*boto.addEventListener('click', () => {
        prova.style.display = 'block ';
});*/
</script>
</html>