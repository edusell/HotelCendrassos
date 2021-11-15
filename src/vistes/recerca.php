<?php
/*if(!isset($_REQUEST['arribada_hotel'],$_REQUEST['sortida_hotel'],$_REQUEST['ocupants'])){
    header('Location: index.php');
}

$arribada=$_REQUEST['arribada_hotel'];
$sortida=$_REQUEST['sortida_hotel'];*/
$data = $_REQUEST['daterange'];
$ocupants=$_REQUEST['ocupants'];
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
            <?= $data.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DATA SORTIDA: '.$sortida.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; OCUPANTS:'.$ocupants ?>
        </div>
        <div>

        <div id="pop_up" class="pop_up_pago">
     
                            <div  class="container bg-light d-md-flex align-items-center" >
                        <div class="card box1 shadow-sm p-md-5 p-md-5 p-4">
                            <div class="fw-bolder mb-4"><span class="fas fa-dollar-sign"></span><span class="ps-1">599,00</span></div>
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center justify-content-between text mb-4"> <span>Total</span> <span class="fas fa-dollar-sign"><span class="ps-1">600.99</span></span> </div>
                                <div class="border-bottom mb-4"></div>
                                <div class="d-flex flex-column mb-4"> <span class="far fa-file-alt text"><span class="ps-2">Invoice ID:</span></span> <span class="ps-3">SN8478042099</span> </div>
                                <div class="d-flex align-items-center justify-content-between text mt-5">
                                    <div class="d-flex flex-column text"> <span>Customer Support:</span> <span>online chat 24/7</span> </div>
                                    <div class="btn btn-primary rounded-circle"><span class="fas fa-comment-alt"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="card box2 shadow-sm">
                            <div class="d-flex align-items-center justify-content-between p-md-5 p-4"> <span class="h5 fw-bold m-0">Pagament</span>
                                <div class="btn btn-primary bar"><span class="fas fa-bars"></span></div>
                            </div>
                            <ul class="nav nav-tabs mb-3 px-md-4 px-2">
                                <li class="nav-item"> <a class="nav-link px-2 active" aria-current="page" href="#">Tarjeta Bancaria</a> </li>
                            </ul>
                            <div class="px-md-5 px-4 mb-4 d-flex align-items-center">
                                <div class="btn btn-success me-4"><span class="fas fa-plus"></span></div>
                            </div>
                            <form action="">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-column px-md-5 px-4 mb-4"> <span>Tarjeta Bancaria</span>
                                            <div class="inputWithIcon"> <input class="form-control" type="text" value="5136 1845 5468 3894"> <span class=""> <img src="https://www.freepnglogos.com/uploads/mastercard-png/mastercard-logo-logok-15.png" alt=""></span> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column ps-md-5 px-md-0 px-4 mb-4"> <span>Caducitat<span class="ps-1">Date</span></span>
                                            <div class="inputWithIcon"> <input type="text" class="form-control" value="05/20"> <span class="fas fa-calendar-alt"></span> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column pe-md-5 px-md-0 px-4 mb-4"> <span>Codi CVV</span>
                                            <div class="inputWithIcon"> <input type="password" class="form-control" value="123"> <span class="fas fa-lock"></span> </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex flex-column px-md-5 px-4 mb-4"> <span>Nom i cognom</span>
                                            <div class="inputWithIcon"> <input class="form-control text-uppercase" type="text" value="valdimir berezovkiy"> <span class="far fa-user"></span> </div>
                                        </div>
                                    </div>
                                    <div class="col-12 px-md-5 px-4 mt-3">
                                        <div class="btn btn-primary w-100">Pay $599.00</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
















        <!--<div class="m-0 vh-100 row justify-content-center align-items-center">
        <div class="Popup-reserva  col-6  p-5 text-center">

            <h1><b>Dades Pagament</b></h1>
            <label>Numero de tarjeta <input type="text" class="col-6" id="numero-tarjeta" placeholder="0000 0000 0000 0000"></input></label><br>
            <h4>Data de caducitat</h4>
            <select>
            <option id="trans-label_month" value="" default="default" selected="selected">Mes</option>
				<option value="1">01</option>
				<option value="2">02</option>
				<option value="3">03</option>
				<option value="4">04</option>
				<option value="5">05</option>
				<option value="6">06</option>
				<option value="7">07</option>
			    <option value="8">08</option>
				<option value="9">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
			</select>

            <select>
            <p>Any</p><option id="trans-label_month" value="" default="default" selected="selected">Any</option>
				<option value="1">21</option>
				<option value="2">22</option>
				<option value="3">23</option>
				<option value="4">24</option>
				<option value="5">25</option>
				<option value="6">26</option>
			</select>

            <label>CVC <input type="number" class="col-3" id="numero-tarjeta" placeholder="888"></input></label><br>
            <label><input type="checkbox" class="" id="numero-tarjeta" placeholder="888"></input> Accepto les politiques de privacitat i cookies</label><br>


        </div>
        </div>-->
        <div id="tipus_habitacions">
        
        <?php
        
        
        include '../src/database.php';
        try{

//Ocupants select t.id_tipus FROM habitacio h , tipushabitacio t, reservahabitacio i, reserva r where t.id_tipus=h.id_tipus_habitacio AND h.id_habitacio=i.id_habitacio AND i.id_reserva=r.id_reserva AND t.ocupants_tipus>= 2;
//SELECT rh.id_habitacio from reserva r,reservahabitacio rh where rh.id_reserva=r.id_reserva AND ( 2021-10-01 >=r.data_sortida OR ( 2021-10-01 <r.data_arribada AND 2021-10-28 <=data_arribada));

 /*       $stm1 = $conn->prepare("select h.id_habitacio , t.m_tipus ,t.preu, t.serveis_tipus , t.ocupants_tipus , t.desc_tipus ,t.id_tipus ,t.nom_tipus, r.data_arribada,r.data_sortida FROM habitacio h , tipushabitacio t, reservahabitacio i, reserva r where t.id_tipus=h.id_tipus_habitacio AND h.id_habitacio=i.id_habitacio AND i.id_reserva=r.id_reserva AND t.ocupants_tipus> :ocupants AND ( :arribada >=r.data_sortida OR ( :arribada <r.data_arribada AND :sortida <=data_arribada)) group by h.id_habitacio;");
        
        $stm1->execute([
             ':arribada' => $arribada,
             ':ocupants' => $ocupants,
             ':sortida' => $sortida
        ]);

        while($row = $stm1->fetch(PDO::FETCH_ASSOC)) {//recorrem el select*/



            

            
            foreach($disponibles as $row){

                $img = 'habitacio_familiar.jpg';

            
            print "<div class='container_reserva_habitacions' id='tipus_habitacio'>";
            print '<div class="recerca_habitacions">';
              print"<h1>".$row['nom_tipus']."</h1>";
              print'<div class="container_imatges_recerca">';
                print'<div><img class="imatges_recerca" src="img/habitacio_doble.jpg"></div>';
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
                        if( !isset($_SESSION["DNI"]) ){
                            print"<a  href='index.php?r=login'><div class='boto_reserva' id='reserva'>Reserva</div></a>";
                        }else{
                            //print "<form action='index.php?r=recerca' method='post'>";
                            //print "<input type='hidden' name='id_tipus_habitacio' value='".$row['id_tipus_habitacio']."'> </input>";
                            //print"<button type='submit'><div class='boto_reserva' id='reserva1'>Reserva</div></button>";
                            //print"</form>";

                            print "<form action='index.php?r=dadesreserva' method='post'>";
                            print "<input type='hidden' name='id_tipus_habitacio' value='".$row['id_tipus_habitacio']."'>";
                            print"<button type='submit'><div class='boto_reserva' id='reserva1'>Reserva</div></button>";
                            print"</form>";
                            if(isset($resum_reserva)){
                                print "<script>const metodo_pago = document.querySelector('#pop_up'); metodo_pago.style.display = 'block '; </script>";
                            }
                            
                            


                        }
                    print"</div>";
              print"</div>";
            print"</div>";
            print "</div>";
          }
        }catch(Exeption $e ){}

        ?>
        <?php print_r($resum_reserva)

        
        
        ?>
        </div>
        </div>
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