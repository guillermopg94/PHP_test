<?php

$cuenta=$_COOKIE["Adrian"]+1;

setcookie(
    "Adrian",
    $cuenta,  
    time()+(60*60*24*365)
);

echo $_COOKIE["Adrian"];


