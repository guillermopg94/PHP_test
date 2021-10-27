<?php
unlink($_GET["arxiu"]);
header('Location: http://localhost/php_u2/carregar_fitxer.php');
?>