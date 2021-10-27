<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
    <select name="albumSelect" id="albumSelect">
    <?php
$albumes = scandir("Albumes");

for ($x = 2; $x < count($albumes); $x++) {
   
?>
   <option value="<?php echo $albumes[$x]; ?>"><?php echo $albumes[$x]; ?></option>
  
<?php
}
?>
    </select>
        <Input type="file" name="fileToUpload" id="fileToUpload"> <br>
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>

</html>


<?php
$albumes = scandir("Albumes");

for ($x = 2; $x < count($albumes); $x++) {
    echo "<br>";
?>
    <a href="mostrarAlbum.php?album=<?php echo $albumes[$x]; ?>">

        <?php echo $albumes[$x]; ?>
    </a>
<?php
}
?>