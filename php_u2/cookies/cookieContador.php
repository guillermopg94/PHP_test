<?php 

setcookie(
    "Contador",
    $count = 0,  
);

echo $_COOKIE["Contador"];
$count++;