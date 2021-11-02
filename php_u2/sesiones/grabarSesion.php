<?php


$nombre = $_GET["Nombre"];
$password = $_GET["Password"];
session_start();
$_SESSION["Nombre"]=$nombre;
$_SESSION["password"]=$password;
header("Location:login.php");