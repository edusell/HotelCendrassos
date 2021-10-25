<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css.css"rel="stylesheet" type="text/css">
</head>
<body>
<?php include 'menu.php'; ?>

        <div class="grid-gallery">
            <a class="grid-gallery__item" href="#">
                <img class="grid-gallery__image" src="img\galeria\habitacio1.jpg">
            </a>
            <a class="grid-gallery__item" href="#">
                <img class="grid-gallery__image" src="img\galeria\bany.jpg">
            </a>
            
        </div>

        <div class="footer">
            <footer>
            <div class="logos_footer">
                <img src="logos\footer\twiter_logo.png" alt="..." width="60" height="60">
                <img src="logos\footer\facebook_logo.png" alt="..." width="60" height="60">
                <img src="logos\footer\youtube_logo.png" alt="..." width="60" height="60">
                <img src="logos\footer\instagram_logo.png" alt="..." width="60" height="60">
    
    
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
    
</body>
</html>