<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejer6.php" method="POST">
        Numero: <input type="number" name="num1" /> <br />
        Numero: <input type="number" name="num2" /> <br />
        Numero: <input type="number" name="num3" /> <br />
        Numero: <input type="number" name="num4" /> <br />

        <input type="submit" name="submit"><br />
    </form>


    <?php
    /* 
    Ejercicio 6
Haz un archivo php que tenga un formulario con 4 campos de texto para introducir
números. Cuando se reciban esos números, debes indicar:
 ¿Cuántos están entre el 15 y 30, ambos inclusive?
 ¿Cuántos son mayores de 30?
 ¿Cuántos son menores de 25?
    
    */
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $num4 = $_POST['num4'];

        if ($num1 >= 15 && $num1 <= 30) {
            echo "$num1 esta entre 15 y 30";
            echo '<br>';
        }
        if ($num1 > 30) {
            echo "$num1 es mayor que 30";
            echo '<br>';
        }
        if ($num1 < 25) {
            echo "$num1 es menor que 25";
            echo '<br>';
        }




        if ($num2 >= 15 && $num2 <= 30) {
            echo "$num2 esta entre 15 y 30";
            echo '<br>';
        }
        if ($num2 > 30) {
            echo "$num2 es mayor que 30";
            echo '<br>';
        }
        if ($num2 < 25) {
            echo "$num2 es menor que 25";
            echo '<br>';
        }



        if ($num3 >= 15 && $num3 <= 30) {
            echo "$num3 esta entre 15 y 30";
            echo '<br>';
        }
        if ($num3 > 30) {
            echo "$num3 es mayor que 30";
            echo '<br>';
        }
        if ($num3 < 25) {
            echo "$num3 es menor que 25";
            echo '<br>';
        }



        if ($num4 >= 15 && $num4 <= 30) {
            echo "$num4 esta entre 15 y 30";
            echo '<br>';
        }
        if ($num4 > 30) {
            echo "$num4 es mayor que 30";
            echo '<br>';
        }
        if ($num4 < 25) {
            echo "$num4 es menor que 25";
            echo '<br>';
        }
    }

    ?>
</body>

</html>