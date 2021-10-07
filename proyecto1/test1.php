<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="form2.php" method="POST">
        Fruta: <input type="text" name="fruta" /> <br />

        <input type="submit" name="submit"><br />
    </form>




    <?php
    /*
    
    1.- Crea una página que te pida el nombre de una fruta mediante un formulario que se procese en la misma página (if..else)
Si es sandía, que muestre un texto que ponga “Me gusta la sandía”
Si es manzana, que muestre un texto que ponga “Me gusta la manzana”
Si no es ninguna de estas frutas, muestra un texto que ponga “No me gusta la fruta” 

2.- Crea una página que te pida el nombre de una fruta mediante un formulario que se procese en la misma página (switch)
Si es sandía, que muestre un texto que ponga “Me gusta la sandía”
Si es manzana, que muestre un texto que ponga “Me gusta la manzana”
Si no es ninguna de estas frutas, muestra un texto que ponga “No me gusta la fruta”

3.- Haz un bucle while que itere desde el 0 al 10. Para cada iteración del bucle, multiplica ese número por 4 y muestra el resultado de la siguiente forma: 3 * 4 = 12

4.- Crea un array con los siguientes elementos: "Jose", "Lola", "Lorenzo", “Isabel”, "Mariluz" y "Maria Jose". Pide mediante un formulario un nombre de los anteriores y utiliza un bucle for para buscar el nombre indicado. 

     Si encuentra el nombre en el array, que muestre el mensaje “Nombre encontrado”, si no, muestra el mensaje “xxx no es profesor” donde xxx es el nombre que has escrito en el formulario.

     Extra: No tengas en cuenta mayúsculas y minúsculas del nombre escrito en el formulario.
    


*/



    if (isset($_POST['submit'])) {

        $fruta = $_POST['fruta'];
        if ($fruta  == 'sandia') {

            echo "Me gusta la sandia";
        } else if ($fruta == 'manzana') {

            echo "Me gusta la manzana";
        } else {
            echo "No me husta la fruta";
        }
    }

    ?>






</body>

</html>