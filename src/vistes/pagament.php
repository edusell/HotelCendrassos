<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css.css"rel="stylesheet" type="text/css">
    <link href="metodo-pago.css"rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"rel="stylesheet" type="text/css">
</head>
<body>
<?php include 'menu.php'; ?>

<div id="pop_up" class="pop_up_pago">
     
                            <div  class="container bg-light d-md-flex align-items-center" >
                        <div class="card box1 shadow-sm p-md-5 p-md-5 p-4">
                            <div class="fw-bolder mb-4"></span><span class="ps-1">1x <?php print $resum_reserva[0]['nom_tipus']?></span></div>
                            <div class="d-flex flex-column">

                            <div class="d-flex align-items-center justify-content-between text mb-4"> <span>preu</span><?php print $resum_reserva[0]['preu'].'€ /'?>nit</span></span> </div>
                            <div class="d-flex align-items-center justify-content-between text mb-4"> <span>Instancia</span><?php print $dias -1?> nits</span></span> </div>
                                <div class="d-flex align-items-center justify-content-between text mb-4"> <span>Total</span><span class="ps-1"></span><?php print $total?>€</span> </div>
                                <div class="border-bottom mb-4"></div>
                                <div class="d-flex flex-column mb-4"> <span class="far fa-file-alt text"><span class="ps-2">Invoice ID:</span></span> <span class="ps-3">SN8478042099</span> </div>
                                <div class="d-flex align-items-center justify-content-between text mt-5">
                                    <div class="d-flex flex-column text"> <span>Customer Support:</span> <span>online chat 24/7</span> </div>
                                    <div class="btn btn-primary rounded-circle"><span class="fas fa-comment-alt"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="card box2 shadow-sm">
                            <div class="d-flex align-items-center justify-content-between p-md-5 p-4"> <span class="h5 fw-bold m-0">Pagament</span>
                                <div class="btn btn-primary bar"><span class="fas fa-bars"></span></div>
                            </div>
                            <ul class="nav nav-tabs mb-3 px-md-4 px-2">
                                <li class="nav-item"> <a class="nav-link px-2 active" aria-current="page" href="#">Tarjeta Bancaria</a> </li>
                            </ul>
                            <div class="px-md-5 px-4 mb-4 d-flex align-items-center">
                                <div class="btn btn-success me-4"><span class="fas fa-plus"></span></div>
                            </div>
                            <form action="">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-column px-md-5 px-4 mb-4"> <span>Tarjeta Bancaria</span>
                                            <div class="inputWithIcon"> <input class="form-control" type="text" value="5136 1845 5468 3894"> <span class=""> <img src="https://www.freepnglogos.com/uploads/mastercard-png/mastercard-logo-logok-15.png" alt=""></span> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column ps-md-5 px-md-0 px-4 mb-4"> <span>Caducitat<span class="ps-1">Date</span></span>
                                            <div class="inputWithIcon"> <input type="text" class="form-control" value="05/20"> <span class="fas fa-calendar-alt"></span> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column pe-md-5 px-md-0 px-4 mb-4"> <span>Codi CVV</span>
                                            <div class="inputWithIcon"> <input type="password" class="form-control" value="123"> <span class="fas fa-lock"></span> </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex flex-column px-md-5 px-4 mb-4"> <span>Nom i cognom</span>
                                            <div class="inputWithIcon"> <input class="form-control text-uppercase" type="text" value="valdimir berezovkiy"> <span class="far fa-user"></span> </div>
                                        </div>
                                    </div>
                                    <div class="col-12 px-md-5 px-4 mt-3">
                                        <form action="index.php" method="post">
                                            <input type="hidden" name="r" value="validacio_pagament">
                                            <input type="hidden" name="entrada" value="validacio_pagament">
                                            <input type="hidden" name="sortida" value="validacio_pagament">
                                        <button class="btn btn-primary w-100"><?php print $total?>€</button>
                                        </form>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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