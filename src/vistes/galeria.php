<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css.css"rel="stylesheet" type="text/css">
    <link href="mcss.css"rel="stylesheet" type="text/css">

</head>
<body>
<?php include 'menu.php'; ?>

<?php
$tmp = $_COOKIE['mode'];
if(!isset($tmp) || $tmp==0){
 print "<button class='ligth' onclick='clar()' style='margin-top:100px;float: right;'><img  id='clar' src = 'logos/admin_icon/sun-fill.svg' alt='clar' width=25px/></button>";
} else {
    print "<button class='ligth' onclick='clar()' style='margin-top:100px;float: right;'><img  id='clar' src = 'logos/admin_icon/moon.svg' alt='clar' width=25px/></button>";
}
?>

<h1 id='galeria'>GALERIA</h1>
<hr>
<div class="grid-gallery">
    <?php
    $carpeta = "img/galeria/";
if ($handler = opendir($carpeta)) {
    while (false !== ($file = readdir($handler))) {
        if($file == '.' || $file == '..'){} else {
            print '<a class="grid-gallery__item" href="'.$carpeta.$file.'">
            <img class="grid-gallery__image" src="'.$carpeta.$file.'">
        </a>';
    }
    }
    closedir($handler);
}
?>
</div>



<?php include 'footerprim.php';?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    <?php
if(!isset($tmp) || $tmp==0){
    
   } else {
       print "   var element = document.body;
       element.classList.toggle('llum');
       $('#clar').attr('src','logos/admin_icon/moon.svg');
       $('.ligth').attr('onclick','fosc()');
       $('h1').css('color','black')";
       
   }
    ?>


function clar() {
   var element = document.body;
   element.classList.toggle("llum");
   $('#clar').attr('src','logos/admin_icon/moon.svg');
   $('.ligth').attr('onclick','fosc()');
   $('h1').css('color','black');
   $('a').css('color','white');
   
   document.cookie = "mode=1";
  

}
function fosc(){
    var element = document.body;
   element.classList.toggle("llum");
   $('#clar').attr('src','logos/admin_icon/sun-fill.svg');
   $('.ligth').attr('onclick','clar()');
   $('h1').css('color','white');
   $('a').css('color','white');
  
   document.cookie = "mode=0";

}
    jQuery(document).ready(function(){
  $('.overlay').show();
  $('.spinner').show();
});

jQuery(window).load(function(){
  $('.overlay').fadeOut();
  $('.spinner').fadeOut();
  var elementos= jQuery('.gal_item');
  for (var i=0; i < elementos.length; i++){
        animate(elementos[i],i);
    }
});

function animate(e,t){
    setTimeout(function(){
        jQuery(e).addClass('aparecer');
    }, t+'00');
}
</script>
</html>