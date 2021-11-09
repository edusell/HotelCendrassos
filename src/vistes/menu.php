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
        <ul>
          <a href="index.php?r=tanca_sesio">Tancasesio <img src="logos\menu\logout.png" width="20px" heigth="20px"></a>
          <a href="index.php?r=tanca_sesio">Perfil <img src="logos\menu\logout.png" width="20px" heigth="20px"></a>
        </ul>
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
});
button.addEventListener('mouseleave', () => {
        button.style.display = 'none';
});


logo.addEventListener('mouseleave', () => {
        button.style.display = 'none';
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