<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejer5.php" method="POST">
Numero: <input type="number" name="num" /> <br />

<input type="submit" name="submit"><br />
</form>
    <?php
    /*
    Ejercicio 5
Haz un archivo php que tenga un formulario con 1 campo para introducir un número e
indicar si dicho número es par o impar.
    */
    
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];

            if ($num%2==0){
                echo "$num es par";
            } else {
                echo "$num es impar";
            }
    }
    ?>
</body>
</html>