<?php

$foto = $_GET["foto"];
$nombreCarpeta = $_GET["nombreCarpeta"];

unlink("Albumes/$nombreCarpeta/$foto");
unlink("Albumes/$nombreCarpeta/Thumbs/$foto");

header('Location: http://localhost/php_u2/menu.php');
