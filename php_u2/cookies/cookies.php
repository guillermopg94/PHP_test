<?php

setcookie(
    "Nombre",
    "dos",
   time()+(60*60*24*365)
);

echo $_COOKIE["Nombre"];