<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="admin.css"rel="stylesheet" type="text/css">
      <title>Admin</title>
   </head>
   <body>
      <nav>
      </nav>
      <div class='sidebar'>
        <a href="admin.php" class='menuesquerra'>&nbsp&nbsp<img src="logos/admin_icon/panell.png" width='25px'><div>&nbsp&nbsp PANELL</div><a>
        <a href="admin_usuaris.php" class='menuesquerra '>&nbsp&nbsp<img src="logos/admin_icon/people.png" width='25px'><div>&nbsp&nbsp USUARIS</div><a>
        <a href="admin_reserves.php" class='menuesquerra actiu'>&nbsp&nbsp<img src="logos/admin_icon/reserves.png" width='25px'><div>&nbsp&nbsp RESERVES</div><a>
        <a href="admin_calendari.php" class='menuesquerra'>&nbsp&nbsp<img src="logos/admin_icon/calendari.png" width='25px'><div>&nbsp&nbsp CALENDARI</div><a>
        <a href="admin_habitacions.php" class='menuesquerra'>&nbsp&nbsp<img src="logos/admin_icon/room.png" width='25px'><div>&nbsp&nbsp HABITACIONS</div><a>
      </div>
      <div class='pagina'>
          <table class='panell'>
              <tr class='estructura'>
                  <td colspan=2></td>

              </tr>
              <tr class='estructura'>
                  <td></td>
                  <td></td>

              </tr>

          </table>
     
     </div>
   </body>
   <script>
      document.getElementById('hide').style.visibility = "hidden";
      document.getElementById('hidebut').style.visibility = "hidden";
      document.getElementById('creartipus').style.visibility = "visible";
      
       function crearhabitacio(){
         document.getElementById('hide').style.visibility = "visible";
         document.getElementById('hidebut').style.visibility = "visible";
         document.getElementById('creartipus').style.visibility = "hidden";
       }
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
</html>