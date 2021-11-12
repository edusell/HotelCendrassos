<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="logos/logo-hotel.png" type="image/x-icon">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link href="css.css"rel="stylesheet" type="text/css">
      <link href="mcss.css"rel="stylesheet" type="text/css">
      <title>Document</title>
      <?php $data_avui = date("Y-m-d");?>
   </head>
   <body  class='boles'>
      <?php include('menu.php'); ?>
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active" style='transition: transform 3s ease, opacity .8s ease-out'>
            <img src="logos\slider_menu_principal\piscina1.jpg" class="d-block w-100 slider" alt="...">
            </div>
            <div class="carousel-item" style='transition: transform 3s ease, opacity .8s ease-out'>
            <img src="logos\slider_menu_principal\hotel1.jpg" class="d-block w-100 slider" alt="...">
            </div>
         </div>
         <div class="reserva">
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
      </div>
      <div id=provasticki>
         <div class='sticky'>
             <div class='container-submenu'>
            <a class='submenu' href='#serveis'><div>SERVEIS</div></a>
            <a class='submenu' href='#calendari'><div>CALENDARI</div></a>
            <a class='submenul' href='#carouselExampleSlidesOnly'><div> <img src="logos/logo-hotel.png" alt="" width=40px></div></a>
            <a class='submenu' href='#nosaltres'><div>SOBRE NOSALTRES</div></a>
            <a class='submenu' href='#aventatges'><div>CONTACTE</div></a>
            </div>
         </div>
         <?php
$tmp = $_COOKIE['mode'];
if(!isset($tmp) || $tmp==0){
 print "<button class='ligth' onclick='clar()' style='float: right;'><img  id='clar' src = 'logos/admin_icon/sun-fill.svg' alt='clar' width=25px/></button>";
} else {
    print "<button class='ligth' onclick='clar()' style='float: right;'><img  id='clar' src = 'logos/admin_icon/moon.svg' alt='clar' width=25px/></button>";
}
?>
<!--<img class='cercle' src="img/fons.jpg" alt="img">-->

         <div class='nosaltres'>
            <div class='sobrenos'>
               <br>
            <h2>BENVINGUT A HOTEL CENDRASSOS</h2>
           
            <p>
            Tot el que fem a cada espai dels nostres hotels està dissenyat per donar-li la benvinguda per part de la nostra comunitat. 
            Des de les nostres habitacions fins als nostres espais públics, passant pels spas, els gimnasos i els restaurants, creem espais on se sentirà com a casa.
            </p>   
            </div>
         </div>
<hr>
         <div id='serveis' class='serveis'>
            <h2>SERVEIS</h2> 
            <div class='containerservei'>

            <div id='servei'class='servei'>
               <img src="img/serveis/piscina.jpg" alt="" width=100%>
               
               <div class='infoservei'>
               <h4>PISCINA</h4>
                <p>  El nostre hotel disposa d'una amplia piscina per gaudir amb tota la familia.</p>
               </div>
            </div>

            <div id='servei1' class='servei'>
            <img src="img/serveis/parking.jpg" alt="" width=100%>
            <div class='infoservei'>
               <h4>ESTACIONAMENT</h4>
                <p>  Hotel Cendrassos disposa d'un aparcament garantit per a cada habitacio de l'hotel.</p>
               </div>
            </div>


            <div id='servei2' class='servei'>
            <img src="img/serveis/bar.jpg" alt="" width=100%>
                           <div class='infoservei'>
               <h4>RESTAURANT</h4>
                <p>  Hotel cendrassos disposa d'un restaurat amb un ampli menu on disfrutar del gust mediterrani.</p>
               </div>
            </div>
            <div id='servei3' class='servei'>
            <img src="img/serveis/spa.jpg" alt="" width=100%>
            <div class='infoservei'>
               <h4>SPA</h4>
                <p>  Disfruta i relaxet en el nostre SPA de l'hotel cendrassos, aquest disposa de piscines, saunes, jacuzzis i una gran catititat de massatges disponibles per els nostres clients sense cost adicional als residents de l'hotel.</p>
               </div>
            </div>
         </div>
         <hr style='margin-top:30px;margin-bottom:30px'>
         

         <h2 id=calendari>CALENDARI 2021</h2>
         <div class='ccmes'>
            <div class='cmes'>
                         <P>GENER</P>
                        <table id='gener' class=mes>
                        </table>
                     </div>
                     <div class='cmes'>
                     <P>FEBRER</P>
                        <table id='febrer' class=mes>
                        </table>
                     </div>
                     <div class='cmes'>
                     <P>MARÇ</P>
                        <table id='marc' class=mes>
                        </table>
                     </div>
                     <div class='cmes'>
                     <P>ABRIL</P>
                        <table id='abril' class=mes>
                        </table>
                     </div>
                     <div class='cmes'>
                     <P>MAIG</P>
                        <table id='maig' class=mes>
                        </table>
                     </div>
                     <div class='cmes'>
                     <P>JUNY</P>
                        <table id='juny' class=mes>
                        </table>
                     </div class='cmes'>
</div>
<div class='ccmes'>
                     <div class='cmes'>
                     <P>JULIOL</P>
                        <table id='juliol' class=mes>
                        </table>
                     </div>
                     <div class='cmes'>
                     <P>AGOST</P>
                        <table id='agost' class=mes>
                        </table>
                     </div>
                     <div class='cmes'>
                     <P>SEPTEMBRE</P>
                        <table id='septembre' class=mes>
                        </table>
                     </div>
                     <div class='cmes'>
                     <P>OCTUBRE</P>
                        <table id='octubre' class=mes>
                        </table>
                     </div>
                     <div class='cmes'>
                     <P>NOVEMBRE</P>
                        <table id='novembre' class=mes>
                        </table>
                     </div>
                     <div class='cmes'>
                     <P>DESEMBRE</P>
                        <table id='desembre' class=mes>
                        </table>
                     </div>
         </div >
         <hr style='margin-top: 30px;margin-bottom: 30px;'>

         <!--CALENDARI RESPONSIVE-->
         <div id='calendariresponsive'>
         <h2 id=mesresponsive></h2>
         <table id='responsive'></table>
         <button onclick='anterior()'>Anterior</button><button onclick='seguent()'>Seguent</button>
         </div>
         </div>



         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2952.2257547387367!2d2.962496515453574!3d42.27370407919278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ba8dd91251e3ff%3A0xe8dfb11cd9cdef78!2sInstitut%20Cendrassos!5e0!3m2!1ses!2ses!4v1636656220172!5m2!1ses!2ses" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <br><br><br><br><br>
      </div>
      <div class="footerpr">
        
      </div>
      <?php include 'footerprim.php';?>
   </body>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script>
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
   $('.sticky').css('background-color','rgb(137, 137, 137)');
   $('.sobrenos').css('color','black');
   $('.cmes').css('color','black');
   $('td').css('border','1px solid black');";
       
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
   $('.sticky').css('background-color','rgb(137, 137, 137)');
   $('.sobrenos').css('color','black');
   $('.cmes').css('color','black');
   $('td').css('border','1px solid black');
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
   $('.sticky').css('background-color','rgb(77, 77, 77)');
   $('.sobrenos').css('color','white');
   $('.cmes').css('color','white');
   $('td').css('border','1px solid white');
   document.cookie = "mode=0";

}




      
         var m=1;
         var arr=<?= json_encode($arraycalendari) ?>;
         var mes = ['gener','febrer','marc','abril','maig','juny','juliol','agost','septembre','octubre','novembre','desembre'];
         var dies = ['31','28','30','31','30','31','30','31','30','31','30','31'];
         var row;
         
         
         
         for(var m=0;m<12;m++){
         var dia=1;
         var table = document.getElementById(mes[m]);
         
         for(var i =0;i<5;i++){
             var  row = table.insertRow(-1);
                 for(var z=0;z<7;z++){
                     if(arr[m][dia]==0){
                         var cell1 = row.insertCell(-1);
                         cell1.innerHTML = dia;
                     } else if(arr[m][dia]==1){
                         var cell1 = row.insertCell(-1);
                         cell1.style.backgroundColor = "red";
                         cell1.innerHTML = dia;
                     }
                     else if(arr[m][dia]==2){
                         var cell1 = row.insertCell(-1);
                         cell1.style.backgroundColor = "rgba(95,95,95,0.9)";
                         cell1.innerHTML = dia;
                     }
                     else if(arr[m][dia]==3){
                         var cell1 = row.insertCell(-1);
                         cell1.style.backgroundColor = "rgb(150,150,150)";
                         cell1.innerHTML = dia;
                     }
                     dia++;
                 }
             }
         }    

         //CALENDARI MOBIL

        tmp=10;
      
         imprimircalendari(tmp);
         function seguent(){
            var table = document.getElementById("responsive");
            table.innerHTML= "";
            if(tmp <11){
               tmp ++;
            } else{
               tmp = 0;
            }
            imprimircalendari(tmp);
         }
         function anterior(){
            var table = document.getElementById("responsive");
            table.innerHTML= "";
            if(tmp >0){
               tmp --;
            } else{
               tmp = 11;
            }
            imprimircalendari(tmp);
         }

        function imprimircalendari(m){
           $('#mesresponsive').text(mes[m])
         var table = document.getElementById('responsive');
         var dia=1;
         
         for(var i =0;i<5;i++){
             var  row = table.insertRow(-1);
                 for(var z=0;z<7;z++){
                     if(arr[m][dia]==0){
                         var cell1 = row.insertCell(-1);
                         cell1.innerHTML = dia;
                     } else if(arr[m][dia]==1){
                         var cell1 = row.insertCell(-1);
                         cell1.style.backgroundColor = "red";
                         cell1.innerHTML = dia;
                     }
                     else if(arr[m][dia]==2){
                         var cell1 = row.insertCell(-1);
                         cell1.style.backgroundColor = "rgba(95,95,95,0.9)";
                         cell1.innerHTML = dia;
                     }
                     else if(arr[m][dia]==3){
                         var cell1 = row.insertCell(-1);
                         cell1.style.backgroundColor = "rgb(150,150,150)";
                         cell1.innerHTML = dia;
                     }
                     dia++;
                 }
             }
         }
      </script>
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

      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
   </script>
   <script type="text/javascript" src="vanilla-tilt.js"></script>
<script type="text/javascript">

	VanillaTilt.init(document.querySelector("#servei"), {
		max: 10,
		speed: 400,
        reverse:  true,
        glare: true,
        "max-glare": 0.2,
       
	});
   VanillaTilt.init(document.querySelector("#servei1"), {
		max: 10,
		speed: 400,
        reverse:  true,
        glare: true,
        "max-glare": 0.2,
       
	});
   VanillaTilt.init(document.querySelector("#servei2"), {
		max: 10,
		speed: 400,
        reverse:  true,
        glare: true,
        "max-glare": 0.2,
       
	});
   VanillaTilt.init(document.querySelector("#servei3"), {
		max: 10,
		speed: 400,
        reverse:  true,
        glare: true,
        "max-glare": 0.2,
        
	});
	
	//It also supports NodeList
	VanillaTilt.init(document.querySelectorAll(".servei"));
</script>
</html>