<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="test4.php" method="POST">
        Nombre: <input type="text" name="name" /> <br />

        <input type="submit" name="submit"><br />
    </form>

    <?php
    /*


4.- Crea un array con los siguientes elementos: "Jose", "Lola", "Lorenzo", “Isabel”, "Mariluz" y "Maria Jose". Pide mediante un formulario un nombre de los anteriores y utiliza un bucle for para buscar el nombre indicado. 

     Si encuentra el nombre en el array, que muestre el mensaje “Nombre encontrado”, si no, muestra el mensaje “xxx no es profesor” donde xxx es el nombre que has escrito en el formulario.

     Extra: No tengas en cuenta mayúsculas y minúsculas del nombre escrito en el formulario.



     
    
*/

if (isset($_POST['submit'])) {

    $prof=array("jose","lola","lorenzo", "isabel", "mariluz", "maria jose");

    $name = $_POST['name'];


    for ($i = 0; $i <  count($prof); $i++ ){
         if ($prof[$i]==$name){

            echo "El profesor es  $prof[$i]";

         }   else {

            echo "$name no es un profesor";
    
         }


    }

}

    ?>

</body>

</html>