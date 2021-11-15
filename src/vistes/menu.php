<div class="topnav" id="myTopnav">
         <a href="index.php">INICI</a>
         <a href="index.php?r=habitacions">HABITACIONS</a>
         <a href="index.php?r=galeria">GALERIA</a>
         <a href="index.php?r=contacte">CONTACTE</a>


         <?php
         session_start();
     
          if(isset($_SESSION['user'])){
            if($_SESSION['rol']==1){
            print  '<a href="index.php?r=admin">ADMINISTRACIO</a>';
            }
            print '<a href="index.php?r=usuari" class=iniciinici id="logat"></a>';
            

          }else{
            print '<a href="index.php?r=login" class=logoinici></a>';
          }
         ?>
         
         <a href="javascript:void(0);" class="icon" onclick="myFunction()">
         <i class="fa fa-bars"></i>
         </a>
         
</div>
<div class="cambicontrasenya " id="contrasenya1">
  <div class='visible_logout'>
          <a class='user' href="index.php?r=tanca_sesio"><div class='log'><img src="logos\admin_icon\sortir.svg" width="30px" heigth="30px">&nbsp;&nbsp;Tancasesio </div></a>
         <a class='user' href="index.php?r=usuari"> <div class='log'><img src="logos\admin_icon\infouser.svg" width="30px" heigth="30px">&nbsp;&nbsp;Perfil </div></a>
          <a  class='user' href="index.php?r=usuari"><div class='log'><img src="logos\admin_icon\key-fill.svg" width="30px" heigth="30px">&nbsp;&nbsp;Cambiar Contrasenya</div> </a>
  </div>      
</div>
      <script>
        const button = document.getElementById('contrasenya1');
        const logo = document.getElementById('logat');
        const button1 = document.getElementById('contrasenya1');
        const logo1 = document.getElementById('logat');

        

        logo.addEventListener('mouseover', () => {
        button1.style.display = 'block';
});
button1.addEventListener('mouseover', () => {
        button1.style.display = 'block';
        button1.style.transition = "all 2s";
});
button.addEventListener('mouseleave', () => {
        button.style.display = 'none';
});


logo.addEventListener('mouseleave', () => {
        button.style.display = 'none';
        button.style.transition = "all 2s";
});

function tanca_Sesio(){
  
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