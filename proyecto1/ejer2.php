<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejer2.php" method="POST">
    Numero: <input type="number" name="name" /> <br />

    <input type="submit" name="submit"><br />
</form>

    <?php
      /*
    Ejercicio 2
Haz un archivo php que permita leer dos valores distintos dados en un formulario, y
determine cuál de los dos valores es el mayor y mostrarlo en el mismo archivo php.
    */
    $array=array();
    if (isset($_POST['submit'])) {
        $num = $_POST['name'];

      
            array_push($array, $num);
        
        if (count($array) > 2 ){
            print_r ($array);
            echo max($array($num));
    
        }
    }
    
    ?>
</body>
</html>