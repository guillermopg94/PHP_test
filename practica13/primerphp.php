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
$nombre=Guille;
$apellido=Paton;
?>
    <p> <a href="segundophp.php?nombre=guille&apellido=paton">segundo enlace sin variable </a> </p>
    <p> <a href="segundophp.php?nombre=<?php echo $nombre;?>&apellido=<?php echo $apellido;?>">segundo enlace con variable</a> </p>
    <p> <a href="primerphp.php?nombre=<?php echo $nombre;?>&apellido=<?php echo $apellido;?>">enlace isset</a> </p>

    <?php
    if (isset($_GET["nombre"])){
        //Recoger las variables nombre y apellidos con $_GET
        echo $_GET["nombre"];
    } else {
        echo "Aun no existe la variable nombre porque no has pulsado el enlace";
    }
    ?>


</body>
</html>
