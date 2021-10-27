<?php

if(isset($_POST["submit"])){
$album=$_POST["albumSelect"];
echo $album;
}

$target_dir = "Albumes/$album/";
$target_file=$target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
$img=$_FILES["fileToUpload"]["name"];

if(isset($_POST["submit"])){
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

    include("resize/resize-class.php");

    $resizeObj = new resize("Albumes/$album/$img");

    $resizeObj -> resizeImage(150, 100, "crop");

    $resizeObj -> saveImage("Albumes/$album/Thumbs/$img", 100);
    
}
header('Location: menu.php');
