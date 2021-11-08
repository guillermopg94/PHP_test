<?php
session_start();
if ($_SESSION["Usuario"] == "") {
    header("Location: login.php");
}
$hoy = date('d-m-Y');
echo ("<br>");
?>

<p class="bienvenida"><?php echo ("Benvingut " . $_SESSION["Usuario"] . " <br> <br> " . $hoy); ?></p>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/menu.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <ul>
        <li> <a href="nou-album.php">Nou àlbum </a> </li>
        <li> <a href=""> Nova imatge </a></li>
        <?php
        if ($_SESSION["Usuario"] == "user") {
        ?>
            <li> <a href="menu.php"> Gestionar àlbums/imatges </a></li>
        <?php
        }
        ?>
        <?php
        if ($_SESSION["Usuario"] == "admin") {
        ?>
            <li> <a href=""> Gestionar servidor </a></li>
        <?php
        }
        ?>


    </ul>

    <a class="shameless-plug" href="cerrar-sesion.php">👋 Close Sesion</a>
</body>

</html>