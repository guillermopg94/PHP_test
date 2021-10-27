<?php
$fitxer=fopen("cont.php", "r");
$leido = fgets($fitxer);
echo $leido;
fclose($fitxer);

$fitxer=fopen("cont.php", "w");
$leido++;
fwrite($fitxer, $leido);
fclose($fitxer);
?>