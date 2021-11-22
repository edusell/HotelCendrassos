<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitacions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css.css"rel="stylesheet" type="text/css">  
    <link href="mcss.css"rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
      <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

</head>
<body>
    <?php include "menu.php";?>

    <?php $data_avui = date("Y-m-d");?>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style='transition: transform 5s ease, opacity .5s ease-out'>
            <img src="logos\slider_habitacions\habitacio1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" style='transition: transform 5s ease, opacity .5s ease-out'>
            <img src="logos\slider_habitacions\habitacio2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>

        <div class="reserva">
            <form action="index.php" method='GET' class='forminici'>
               <input type="hidden" name="r" value='recerca'>
               <span id='hotel'>HOTEL</span><br>
               <span id='hotel'>CENDRASSOS</span>
               <label>Dates:<br> <input id='datarange' type="text" name="daterange" value="01/01/2018 - 01/15/2018" readonly/></label>
               <!--<label> Data arribada <br><input type="date" id="arribada" name="arribada_hotel" value="<?php echo $data_avui?>" min="<?php echo $data_avui?>" max="2100-12-31" onchange='datasortida()' required></label>
               <label> Data sortida  <br><input type="date" id="sortida" name="sortida_hotel" value="<?php echo $data_avui?>" min="<?php echo $data_avui?>"  max="2100-12-31"></label>-->
               <label> Ocupants  <br><input type="number" id="ocupants" name="ocupants"min="1" max="6" required></label>
               <button >Reserva</button>
            </form>
         </div>
       <!-- <div class="reserva">
            <form action="index.php?r=recerca&" method='GET' class='forminici'>
               <input type="hidden" name="r" value='recerca'>
               <span id='hotel'>HOTEL</span><br>
               <span id='hotel'>CENDRASSOS</span>
               <label> Data arribada <br><input type="date" id="arribada" name="arribada_hotel" value="<?php echo $data_avui?>" min="<?php echo $data_avui?>" max="2100-12-31" onchange='datasortida()' required></label>
               <label> Data sortida  <br><input type="date" id="sortida" name="sortida_hotel" value="<?php echo $data_avui?>" min="<?php echo $data_avui?>"  max="2100-12-31"></label>
               <label> Ocupants  <br><input type="number" id="ocupants" name="ocupants"min="1" max="6" required></label>
               <button >Reserva</button>
            </form>
         </div>
        </div>-->
        <?php
$tmp = $_COOKIE['mode'];
if(!isset($tmp) || $tmp==0){
 print "<button class='ligth' onclick='clar()' style='float: right;'><img  id='clar' src = 'logos/admin_icon/sun-fill.svg' alt='clar' width=25px/></button>";
} else {
    print "<button class='ligth' onclick='clar()' style='float: right;'><img  id='clar' src = 'logos/admin_icon/moon.svg' alt='clar' width=25px/></button>";
}
?>
        <div class="habitacions">
            <h1>Tipus de habitacions</h1>
        </div>
        <div id='separador-habitacions'></div>
        <div id='separador-habitacions1'></div>
        <div id='separador-habitacions2'></div>
        
        
        <?php 
        
            foreach($llistar_tiphab as $row){
                print "<div class='container_reserva_habitacionss' id='tipus_habitacio'>";
                print '<div class="recerca_habitacions">';
                print"<h1><b>".$row['nom_tipus']."</b></h1>";
                print'<img class="imatges_recerca_mbil" src="img/uploads/'.$row["imatge"].'">';
                print'<div class="container_imatges_recerca">';
                    print'<img class="imatges_recerca" src="img/uploads/'.$row["imatge"].'">';
                    print'<div class="text">';
                        print"<p>".$row['desc_tipus']."</p>";
                        print"<div class='especificacions_recerca'>";
                            print "<img src='logos\habitacions_logos\silueta-persona.png'>";
                            print"<p><b>MAX ".$row['ocupants_tipus']." p</b></p>";
                            print "<img src='logos\habitacions_logos\information.png'>";
                            print"<p><b>".$row['m_tipus']."m<sup>2 </sup></b></p>";
                        print"</div>";
                        print"<div class='preu_recerca'>".$row['preu']."€ /nit</div>";
                            //print "<form action='index.php?r=recerca' method='post'>";
                            //print "<input type='hidden' name='id_tipus_habitacio' value='".$row['id_tipus_habitacio']."'> </input>";
                            //print"<button type='submit'><div class='boto_reserva' id='reserva1'>Reserva</div></button>";
                            //print"</form>"
                        print"</div>";
                    print"</div>";
                 print"</div>";
            print "</div>";




                /*print "<div class='container_tipus_habitacions'>";
                print '<div class="tipus_habitacions">';
                  print"<h3>".$row['nom_tipus']."</h3>";
                  print'<div class="container_imatges_habitacions">';
                    print'<div class="imatges_habitacions"><img src="img/uploads/'.$row['imatge'].'"width=100% height=233px"></div>';
                        print'<div class="text">';
                            print"<p>".$row['desc_tipus']."</p>";
                            print"<div class='especificacions'>";
                                print "<img src='logos\habitacions_logos\silueta-persona.png'>";
                                print"<p><b>MAX ".$row['ocupants_tipus']." p</b></p>";
                                print "<img src='logos\habitacions_logos\information.png'>";
                                print"<p><b>".$row['m_tipus']."m<sub>2 </sub></b></p>";
                            print"</div>";
                            print"<div class='preu'>".$row['preu']."€ </div>";
                            print"<a href='habitacions.php#arribada_hotel'><div class='boto'>Reserva</div></a>";
                        print"</div>";
                  print"</div>";
                print"</div>";
                print "</div>";*/
            }

            
    
        ?>

        </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        function datasortida(){
         var tmp = $('#arribada').val();

         

         console.log(tmp);
         
        

         tmp1 = tmp.split('-');
         var dia=parseInt(tmp1[2])+1
         var dia_string = dia.toString();
       

         //var tmp2 = '"'+dia_string+'-'+tmp1[1]+'-'+tmp1[0]+'"';
         var tmp2 = tmp1[0]+'-'+tmp1[1]+'-'+dia_string;
         console.log(tmp2);
         
         $('#sortida').attr('min',$('#arribada').val());
         $('#sortida').val($('#arribada').val());
      }
          <?php
if(!isset($tmp) || $tmp==0){
    
   } else {
       print "   var element = document.body;
       element.classList.toggle('llum');
       $('#clar').attr('src','logos/admin_icon/moon.svg');
       $('.ligth').attr('onclick','fosc()');
       $('h1').css('color','black');
       $('h2').css('color','black');
       $('a').css('color','white');
       ";
       
   }
    ?>
    

function clar() {
   var element = document.body;
   element.classList.toggle("llum");
   $('#clar').attr('src','logos/admin_icon/moon.svg');
   $('.ligth').attr('onclick','fosc()');
   $('h1').css('color','black');
   $('h2').css('color','black');
   $('a').css('color','white');
   document.cookie = "mode=1";
  

}
function fosc(){
    var element = document.body;
   element.classList.toggle("llum");
   $('#clar').attr('src','logos/admin_icon/sun-fill.svg');
   $('.ligth').attr('onclick','clar()');
   $('h1').css('color','white');
   $('h2').css('color','white');
   $('a').css('color','white');
   document.cookie = "mode=0";

}
    </script>
</body>
<?php include 'footerprim.php';?>
</html>