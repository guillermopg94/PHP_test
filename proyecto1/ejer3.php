<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* 
    Ejercicio 3
Haz un archivo php que realice un bucle con la suma de los números enteros
comprendidos entre el 1 y el 10, mostrando por pantalla:
1 //para el número 1
3 //para 1+2
6 // para 1+2+3
...
    */
    $suma = 0;
    for ($i = 1; $i <= 10; $i++) {
        $suma = $suma + $i;
        echo $suma;
        echo '<br>';
    }

    ?>
</body>
</html>