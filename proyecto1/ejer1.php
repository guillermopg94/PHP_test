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
    /*  Ejercicio 1
Haz una función random que muestre por pantalla la calificación obtenida:
Si el número es:
menor que 5 → mostrará “suspendido”
entre 5 y 6 → mostrará “suficiente”
entre 6 y 7 → mostrará “bien”
entre 7 y 9 → mostrará “notable”
entre 9 y 10 → mostrará “sobresaliente”
NOTA: Funcion php random:
$var = rand(1,10);
*/
    $var = rand(1, 10);
    echo "La nota es $var";
    echo "<br>";

    if ($var < 5) {
        echo "suspendido";
    } elseif ($var >= 5 && $var <= 6) {
        echo "suficiente";
    } elseif ($var >= 6 && $var <= 7) {
        echo "bien";
    } elseif ($var >= 7 && $var <= 9) {
        echo "notable";
    } elseif ($var >= 9 && $var <= 10) {
        echo "sobresaliente";
    }
    ?>
</body>
</html>