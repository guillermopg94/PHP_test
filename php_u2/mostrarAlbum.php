<?php
$nombreCarpeta = $_GET["album"];
$albumes = scandir("Albumes/$nombreCarpeta/Thumbs");


for ($x = 2; $x < count($albumes); $x++) {
  echo "<br>";
?>
  <a href="Albumes/<?php echo $nombreCarpeta; ?>/<?php echo $albumes[$x]; ?>"> <img src="Albumes/<?php echo $nombreCarpeta; ?>/Thumbs/<?php echo $albumes[$x]; ?>" alt=""> </a>
  <a href="Albumes/<?php echo $nombreCarpeta; ?>/<?php echo $albumes[$x]; ?>" download> descargar</a>
  <a href="eliminar.php?foto=<?php echo $albumes[$x] ?>&nombreCarpeta=<?php echo $nombreCarpeta ?>">eliminar</a>
<?php
}
?>