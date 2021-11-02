<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="grabarSesion.php" method="GET">
    <input type="text" name="Nombre" >  
    <input type="text" name="Password"> 
    <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php  
if($_SESSION["Nombre"]==$_GET["Nombre"] &&
$_SESSION["password"]==$_GET["Password"]){

}