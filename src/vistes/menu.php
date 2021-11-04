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
<div class="cambicontrasenya " id="contrasenya">
          <a>Tancasesio</a>
</div>


      <script>
        const button = document.getElementById('contrasenya');
        const logo = document.getElementById('logat');

        logo.addEventListener('mouseover', () => {
        button.style.display = 'block';
});
button.addEventListener('mouseover', () => {
        button.style.display = 'block';
});

logo.addEventListener('mouseleave', () => {
        button.style.display = 'none';
});

      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
   </script>