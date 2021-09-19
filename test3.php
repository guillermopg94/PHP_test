<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="test2.php" method="POST">
        Fruta: <input type="text" name="fruta" /> <br />

        <input type="submit" name="submit"><br />
    </form>

    <?php
    /*

3.- Haz un bucle while que itere desde el 0 al 10. Para cada iteración del bucle, multiplica ese número por 4 y muestra el resultado de la siguiente forma: 3 * 4 = 12

4.- Crea un array con los siguientes elementos: "Jose", "Lola", "Lorenzo", “Isabel”, "Mariluz" y "Maria Jose". Pide mediante un formulario un nombre de los anteriores y utiliza un bucle for para buscar el nombre indicado. 

     Si encuentra el nombre en el array, que muestre el mensaje “Nombre encontrado”, si no, muestra el mensaje “xxx no es profesor” donde xxx es el nombre que has escrito en el formulario.

     Extra: No tengas en cuenta mayúsculas y minúsculas del nombre escrito en el formulario.
    
*/

    $i = 0;
    while ($i < 10) {

        $resultado = $i * 4;
        echo "$i * 4 = $resultado";
        $i++;
        echo "<br>";
    }

    ?>

</body>

</html>
