<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="css.css"rel="stylesheet" type="text/css">
  <link href="mcss.css"rel="stylesheet" type="text/css">

    <title>Registre</title>

</head>
<body id=registrebody>
  <body>
   <?php include 'menu.php';?>
    <!--MENU-->
    <div class="container-login">

    <div class='registre'>
    <form id='registre' class='formregistre' action="index.php" method='post' >
      <input type="hidden" name='r' value='crearusuari'>
      <!--<input type="hidden" name='orig' value='usuari'>-->
      <table class='estructuraregistre'>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td colspan=2>
          <label for="nom">
                  <span>Nom: </span><br>
                  <input type="text" id="nom" name="nom" required minlength="1">
                  <span id='nomerr' class="error" aria-live="polite"></span>
                </label>
          </td>
          <td colspan=2>
          <label for="cognom">
                  <span>Cognoms: </span><br>
                  <input type="text" id="cognom" name="cognom" required>
                  <span id='cognomerr' class="error" aria-live="polite"></span>
                </label>
          </td>
          <td colspan=2>                
            <label for="telefon">
                  <span>Telefon:</span><br>
                  <input type="tel" id="telefon" name="telefon" required minlength="9" maxlength="9">
                  <span id='telefonerr' class="error" aria-live="polite"></span>
                </label></td>
          
        </tr>
        <tr>
        <td colspan=3>
          <label for="dni">
                  <span>DNI: </span><br>
                  <input type="text" id="dni" name="dni" required minlength="9" maxlength="9">
                  <span id='dnierr' class="error" aria-live="polite"></span>
                </label>
          </td>
          <td colspan='3'>
          <label for="mail">
                  <span>Correu electronic: </span><br>
                  <input type="email" id="mail" name="mail" required minlength="8">
                  <span id="emailerr" class="error" aria-live="polite"></span>
                </label>
            
          </td>
        </tr>
        <tr>
          <td colspan='3'>

          <label for="usuari">
                  <span>Usuari: </span><br>
                  <input type="text" id="usuari" name="usuari" required minlength="8">
                  <span id='usuarierr' class="error" aria-live="polite"></span>
                </label>
          </td>
          <td colspan=3>

          <label for="contrasenya">
                  <span>Contrasenya: </span><br>
                  <input type="password" id="contrasenya" name="contrasenya" required minlength="8"><br>
                  <span id='contrasenyaerr' class="error" aria-live="polite"></span>
                </label>
          </td>
        </tr>
      </table>
      <button id='env' onclick="validar()">Enviar</button>
      </form>
      <br><br>
      <div class="alert alert-warning alert-dismissable" id="error">
        <!--<button type="button" class="close" data-dismiss="alert">&times;</button>-->
        <strong>¡Error!</strong> Dades incorrectes
      </div>
      
      </div>


</div>
       <!-- FOOTER-->
       <?php include 'footerprim.php' ?>
      <script>
      
       
        <?php 
       
        if(isset($error)){
          print "const error = document.getElementById('error');
          error.style.display = 'block';
          ";
        }
        ?>

     /*  document.querySelector("#env").click(){
         
       }*/
 
 
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
            var letras="abcdefghyjklmnñopqrstuvwxyz";
            texto = texto.toLowerCase();
            for(i=0; i<texto.length; i++){
              if (letras.indexOf(texto.charAt(i),0)!=-1){
                return 1;
              }
            }
            return 0;
          }

          

          function tiene_minusculas(texto){
            var letras="abcdefghyjklmnñopqrstuvwxyz";
            for(i=0; i<texto.length; i++){
              if (letras.indexOf(texto.charAt(i),0)!=-1){
                return 1;
              }
            }
            return 0;
            }
            
            

          function tiene_mayusculas(texto){
            var letras_mayusculas="ABCDEFGHYJKLMNÑOPQRSTUVWXYZ";
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