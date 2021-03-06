<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="css.css"rel="stylesheet" type="text/css">
  <LINK REL=StyleSheet HREF="estil.css" TYPE="text/css" MEDIA=screen> 
    <title>Registre</title>

</head>
<body>
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
    <!--MENU-->

    <form id='registre' action="../src/validacioregistre.php" method='GET' novalidate>

          <ul>
                <label for="mail">
                  <span>Correu electronic: </span><br>
                  <input type="email" id="mail" name="mail" required minlength="8">
                  <span id="emailerr" class="error" aria-live="polite"></span>
                </label>
            
                <label for="nom">
                  <span>Nom: </span><br>
                  <input type="text" id="nom" name="nom" required minlength="1">
                  <span id='nomerr' class="error" aria-live="polite"></span>
                </label>
              

                <label for="cognom">
                  <span>Cognoms: </span><br>
                  <input type="text" id="cognom" name="cognom" required>
                  <span id='cognomerr' class="error" aria-live="polite"></span>
                </label>
             

                <label for="dni">
                  <span>DNI: </span><br>
                  <input type="text" id="dni" name="dni" required minlength="9" maxlength="9">
                  <span id='dnierr' class="error" aria-live="polite"></span>
                </label>
              

                <label for="telefon">
                  <span>Telefon:</span><br>
                  <input type="tel" id="telefon" name="telefon" required minlength="9" maxlength="9">
                  <span id='telefonerr' class="error" aria-live="polite"></span>
                </label>
           

                <label for="usuari">
                  <span>Usuari: </span><br>
                  <input type="text" id="usuari" name="usuari" required minlength="8">
                  <span id='usuarierr' class="error" aria-live="polite"></span>
                </label>
              

                <label for="contrasenya">
                  <span>Contrasenya: </span><br>
                  <input type="password" id="contrasenya" name="contrasenya" required minlength="8"><br>
                  <span id='contrasenyaerr' class="error" aria-live="polite"></span>
                </label>
              </ul>
        
      </form>
      <button onclick="validar()">Enviar</button>


       <!-- FOOTER-->
       <div class="footer">
        <footer>
            <div class="logos_footer">
            <img src="logos\footer\twiter_logo.png" alt="..." width="60" height="60">
            <img src="logos\footer\facebook_logo.png" alt="..." width="60" height="60">
            <img src="logos\footer\youtube_logo.png" alt="..." width="60" height="60">
            <img src="logos\footer\instagram_logo.png" alt="..." width="60" height="60">


            <div class="resultado">
                <?php if(isset($_GET['dni']) && $_GET['dni'] == 'true'): ?>
                <h2>L'usuari ja existeix</h2>
                <?php endif;?>
                <?php if(isset($_GET['caracters_dni']) && $_GET['caracters_dni'] == 'true'): ?>
                <h2>El dni ha de contenir 9 caracters</h2>
                <?php endif;?>
                <?php if(isset($_GET['caracters_tlf']) && $_GET['caracters_tlf'] == 'true'): ?>
                <h2>El telefon nomes pot contenir digits de 0 a 9</h2>
                <?php endif;?>
                <?php if(isset($_GET['largada_tlf']) && $_GET['largada_tlf'] == 'true'): ?>
                <h2>El telefon ha de contenir 9 digits</h2>
                <?php endif;?>
                <?php if(isset($_GET['mail_err']) && $_GET['mail_err'] == 'true'): ?>
                <h2>Correo incorrecte</h2>
                <?php endif;?>

            </div>
            </div>
            <ul class="footer_ul">
                <li ><a href="Pagina_principal.php"><p class="footer_seccions">Pagina principal</p></li>
                <li><a href="serveis.php"><p class="footer_seccions">Serveis</p></li>
                <li><a href="Habitacions.php"><p class="footer_seccions">Serveis</p></li>
                <li><a href="contacta.php"><p class="footer_seccions">Contacta</p></li>
                <li><a href="serveis.php"><p class="footer_seccions">galeria</p></li>
            </ul>
        </footer>
      <script>

 
 
          function validar(){
            var submit = 0;
            //validar correu
            var email = document.getElementById('mail').value;
            //document.write(email);
            if(!email.includes('@')){
              document.getElementById('mail').classList.add("incorrecte");
              submit = 1;
            } else{document.getElementById('mail').classList.remove("incorrecte");}

            //validar nom
            var nom = document.getElementById('nom').value;

            if(hasNumber(nom) || nom.length==0){
              document.getElementById('nom').classList.add("incorrecte");
              submit = 1;
            } else{document.getElementById('nom').classList.remove("incorrecte");}

            //validar cognom
            var cognom = document.getElementById('cognom').value;
            if(hasNumber(cognom) || cognom.length==0){
              document.getElementById('cognom').classList.add("incorrecte");
              submit = 1;
            } else{document.getElementById('cognom').classList.remove("incorrecte");}

            //validar telefon
            var telefon = document.getElementById('telefon').value;
            if(telefon.length!=9 || !hasNumber(telefon)){
              document.getElementById('telefon').classList.add("incorrecte");
              submit = 1;
            } else{document.getElementById('telefon').classList.remove("incorrecte");}

          //validar DNI
            var dni = document.getElementById('dni').value;
            if(!hasNumber(dni) || dni.length<9 || dni.length>9){
              document.getElementById('dni').classList.add("incorrecte");
            } else{document.getElementById('dni').classList.remove("incorrecte");}

           //validar usuari
           var usuari = document.getElementById('usuari').value;
            if(usuari.length==0 || usuari.length>20){
              document.getElementById('usuari').classList.add("incorrecte");
              submit = 1;
            } else{document.getElementById('usuari').classList.remove("incorrecte");}

             //validar password
           var contrasenya = document.getElementById('contrasenya').value;
            if(contrasenya.length<8 || contrasenya.length>50 || !hasNumber(contrasenya) || !tiene_minusculas(contrasenya) || !tiene_letras(contrasenya) || !tiene_mayusculas(contrasenya)){
              document.getElementById('contrasenya').classList.add("incorrecte");
              submit = 1;
            } else{document.getElementById('contrasenya').classList.remove("incorrecte");}

            if(submit==0){
              enviar()
            }
          
          }
          function enviar(){
            document.getElementById("registre").submit();
          }  

          function hasNumber(myString) {
            return /\d/.test(myString);
          }

          

          function tiene_letras(texto){
            var letras="abcdefghyjklmn??opqrstuvwxyz";
            texto = texto.toLowerCase();
            for(i=0; i<texto.length; i++){
              if (letras.indexOf(texto.charAt(i),0)!=-1){
                return 1;
              }
            }
            return 0;
          }

          

          function tiene_minusculas(texto){
            var letras="abcdefghyjklmn??opqrstuvwxyz";
            for(i=0; i<texto.length; i++){
              if (letras.indexOf(texto.charAt(i),0)!=-1){
                return 1;
              }
            }
            return 0;
            }
            
            

          function tiene_mayusculas(texto){
            var letras_mayusculas="ABCDEFGHYJKLMN??OPQRSTUVWXYZ";
            for(i=0; i<texto.length; i++){
              if (letras_mayusculas.indexOf(texto.charAt(i),0)!=-1){
                return 1;
              }
            }
            return 0;
          }
      </script>
</body>
</html>