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
Ejercicio 4
Modifica el ejercicio 3 de forma que se sumen los números enteros múltiplos de 5,
comprendidos entre el 1 y el 100. El programa deberá imprimir los números en cuestión
y finalmente su suma.
    */
    $suma = 0;
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 5 == 0) {
            echo "El numero es $i ";
            $suma = $suma + $i;
            echo '<br>';
        }
    }
    echo "La suma es $suma";
    ?>
</body>

</html>