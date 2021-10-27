<?php
$fitxer=fopen("nou_fitxer.php", "w");
$txt="Alba";
fwrite($fitxer, $txt);
fclose($fitxer);
?>