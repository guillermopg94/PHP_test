<?php
$user = $_POST["user"];
$password = $_POST["password"];

if ($user == "admin" && $password == "1234" || $user == "user" && $password == "1234") {
    if ($user == "admin") {
        session_start();
        $_SESSION["Usuario"] = $user;
        header("Location: menú.php");
    } else
    if ($user == "user") {
        session_start();
        $_SESSION["Usuario"] = $user;
        header("Location: menú.php");
    }
} else {
    header("Location: login.php");
}