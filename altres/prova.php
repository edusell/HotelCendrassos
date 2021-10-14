<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'database.php';
    
    //echo $mysqli->host_info . "\n";
    $sql = "SELECT * FROM usuari";
    $result = $conn->query($sql);

     while($row = $result->fetch_assoc()) {
    echo "user: " . $row["username"]. " - Name: " . $row["Nom"]. " " . $row["Cognom"]. "<br>";
  }
    ?>
    
</body>
</html>