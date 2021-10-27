<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="carregar_fitxer.php" method="POST" enctype="multipart/form-data">
        <Input type="file" name="foto" id="fitxer"> <br>
        <Input type="submit" name="submit" value="OK">
    </form>

    <?php
    if ($_FILES["foto"]["error"] > 0) {
        echo "Error: " . $_FILES["foto"]["error"] . "<br>";
    } else {
        echo "Nom de la imatge: " . $_FILES["foto"]["name"] . "<br>";
        echo "Tipus: " . $_FILES["foto"]["type"] . "<br>";
        echo "Mida: " . ($_FILES["foto"]["size"] / 1024) . "kB<br>";
        echo "Imatge emmagatzemada en: " . $_FILES["foto"]["tmp_name"];
    }
    if (file_exists("upload/" . $_FILES["foto"]["name"])) {
        echo $_FILES["foto"]["name"] . "ja exisiteix. ";
    } else {
        move_uploaded_file($_FILES["foto"]["tmp_name"], "upload/" . $_FILES["foto"]["name"]);
        echo "Imatge emmagatzemada en: " . "upload/" . $_FILES["foto"]["name"];
    }

    ?>
    <br>
    <img source width="500px" src="<?php echo "upload/" . $_FILES["foto"]["name"] ?>" alt="">
    <br>
    <a href="<?php echo "upload/" . $_FILES["foto"]["name"] ?> " download>descargar</a>
    <a href="pagina2.php?arxiu=<?php echo "upload/" . $_FILES["foto"]["name"] ?>">eliminar</a>

</body>

</html>