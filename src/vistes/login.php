<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css.css"rel="stylesheet" type="text/css">

    <title>Document</title>
</head>
<body>
        <?php include 'menu.php'; ?>
                <!--MENU-->

        <div class="container-login">
            <form class="login" action="../src/validarlogin.php" method="POST">
                <label>Usuari:<br>
                    <input id='usuari' name="usuari" type="text" required>
                </label><br><br>
                <label>Contrasenya:<br>
                    <input id='contrasenya' name="contrasenya" type="password" required>
                </label><br><BR>
                    <label class='center'>
                    <input type="submit" class="but">
                </label>
                </div>
        </div>

</body>
<?php include 'footerprim.php';?>
</html>