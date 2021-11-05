<?php
session_start();
if($_SESSION["user"]==""){
  header("Location: login.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script>
    function eliminar(foto, album) {
      if (confirm("Desea eliminarlo?") == true) {
        window.location.href = "eliminar.php?foto=" + foto + "&nombreCarpeta=" + album;
      }
    }
  </script>
</head>
<body>

  <?php
  $nombreCarpeta = $_GET["album"];
  $albumes = scandir("Albumes/$nombreCarpeta/Thumbs");

  for ($x = 2; $x < count($albumes); $x++) {
    echo "<br>";
  ?>
    <a href="Albumes/<?php echo $nombreCarpeta; ?>/<?php echo $albumes[$x]; ?>"> <img src="Albumes/<?php echo $nombreCarpeta; ?>/Thumbs/<?php echo $albumes[$x]; ?>" alt=""> </a>
    <a href="Albumes/<?php echo $nombreCarpeta; ?>/<?php echo $albumes[$x]; ?>" download> descargar</a>


    <button onclick="eliminar('<?php echo $albumes[$x] ?>','<?php echo $nombreCarpeta; ?>')">
      Eliminar
    </button>

  <?php
  }
  ?>
</body>

</html>