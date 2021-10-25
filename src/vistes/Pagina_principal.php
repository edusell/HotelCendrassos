<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link href="css.css"rel="stylesheet" type="text/css">
      <title>Document</title>
      <?php $data_avui = date("Y-m-d");?>
   </head>
   <body>
      <?php include('menu.php'); ?>
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="logos\slider_habitacions\habitacio1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="logos\slider_menu_principal\imatge2.jpg" class="d-block w-100" alt="...">
            </div>
         </div>
         <div class="reserva">
            <form action="index.php?r=recerca" method='GET'>
               <label> Data arribada <input type="date" id="arribada" name="arribada_hotel" value="<?php echo $data_avui?>" min="<?php echo $data_avui?>" max="2100-12-31" required></label>
               <label> Data sortida  <input type="date" id="sortida" name="sortida_hotel" value="<?php echo $data_avui?>" min="<?php echo $data_avui?>" max="2100-12-31"></label>
               <label> Ocupants  <input type="number" id="ocupants" name="ocupants"min="1" max="6" required></label>
               <button >Reserva</button>
            </form>
         </div>
      </div>
      <div id=provasticki>
         <div class='sticky'>
             <div class='container-submenu'>
            <a class='submenu' href='#aventatges'><div>SERVEIS</div></a>
            <a class='submenu' href='#avantatges'><div>CALENDARI</div></a>
            <a class='submenul' href='#carouselExampleSlidesOnly'><div> <img src="logos/logo-hotel.png" alt="" width='40px'> </div></a>
            <a class='submenu' href='#nosaltres'><div>SOBRE NOSALTRES</div></a>
            <a class='submenu' href='#aventatges'><div>CONTACTE</div></a>
            </div>
         </div>
         <div id="avantatges" class="avantatges">
            <h1>SERVEIS</h1>
            <div class="avantatges_logos">
               <div>
                  <img src="logos\logo-parking.png" alt="..." width="60" height="60">
                  <p>Servei parking vigilat</p>
               </div>
               <div>
                  <img src="logos\logo-bicicleta.png" alt="..." width="60" height="60">
                  <p>Servei parking bicicleta</p>
               </div>
               <div>
                  <img src="logos\logo_piscina.png" alt="..." width="60" height="60">
                  <p>Servei piscina</p>
               </div>
            </div>
         </div>
         <div class="avantatges_logos">
               <div>
                  <img src="logos\logo-parking.png" alt="..." width="60" height="60">
                  <p>Servei parking vigilat</p>
               </div>
               <div>
                  <img src="logos\logo-bicicleta.png" alt="..." width="60" height="60">
                  <p>Servei parking bicicleta</p>
               </div>
               <div>
                  <img src="logos\logo_piscina.png" alt="..." width="60" height="60">
                  <p>Servei piscina</p>
               </div>
            </div>
         </div>
         <div class='nosaltres'>
            <p>hola</p>
         </div>
      
      <div id="nosaltres">
        <p>hola</p>
      </div>
      </div>  
      </div>
      </div>
      <div class="footerpr">
         <!-- <footer>
            <div class="logos_footer">
            <img src="logos\footer\twiter_logo.png" alt="..." width="60" height="60">
            <img src="logos\footer\facebook_logo.png" alt="..." width="60" height="60">
            <img src="logos\footer\youtube_logo.png" alt="..." width="60" height="60">
            <img src="logos\footer\instagram_logo.png" alt="..." width="60" height="60">
            
            
            
            </div>
            <ul>
                <li ><a href="Pagina_principal.php"><p class="footer_seccions">Pagina principal</p></li>
                <li><a href="serveis.php"><p class="footer_seccions">Serveis</p></li>
                <li><a href="Habitacions.php"><p class="footer_seccions">Serveis</p></li>
                <li><a href="contacta.php"><p class="footer_seccions">Contacta</p></li>
                <li><a href="serveis.php"><p class="footer_seccions">galeria</p></li>
            </ul>
            </footer>-->
      </div>
   </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
</html>