<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitacions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css.css"rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container_principal menu_superior">
        <div class="item logo"></div>
        <div class="item"><a href="habitacions.php">Habitacions</a></div>
        <div class="item">Serveis</div>
        <div class="item">Galeria</div>
        <div class="item">contacta</div>
        <div class="item">Inicia sesio</div>
        <div class="item">Registrarte</div>
    </div>

    <?php $data_avui = date("Y-m-d");?>



    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="slider_habitacions\habitacio1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="slider_habitacions\habitacio2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <div class="reserva">
                <form>
                    <label> Data arribada <input type="date" id="arribada" name="arribada_hotel" value="<?php echo $data_avui?>" min="<?php echo $data_avui?>" max="2100-12-31" required></label>
                    <label> Data sortida  <input type="date" id="sortida" name="sortida_hotel" value="<?php echo $data_avui?>" min="<?php echo $data_avui?>" max="2100-12-31"></label>
                    <label> Ocupants  <input type="number" id="ocupants" name="ocupants"min="1" max="6" required></label>
                    <button >Reserva</button>
                </form>
              </div>
        </div>



    <div class="footer">
        <footer>
        <div class="logos_footer">
            <img src="footer\twiter_logo.png" alt="..." width="60" height="60">
            <img src="footer\facebook_logo.png" alt="..." width="60" height="60">
            <img src="footer\youtube_logo.png" alt="..." width="60" height="60">
            <img src="footer\instagram_logo.png" alt="..." width="60" height="60">



            </div>
            <ul class="footer_ul">
                <li ><a href="Pagina_principal.php"><p class="footer_seccions">Pagina principal</p></li>
                <li><a href="serveis.php"><p class="footer_seccions">Serveis</p></li>
                <li><a href="Habitacions.php"><p class="footer_seccions">Serveis</p></li>
                <li><a href="contacta.php"><p class="footer_seccions">Contacta</p></li>
                <li><a href="serveis.php"><p class="footer_seccions">galeria</p></li>
            </ul>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>