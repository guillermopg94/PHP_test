<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejer8.php" method="POST">
        Numero: <input type="number" name="num" /> <br />

        <input type="submit" name="submit"><br />
    </form>
    <?php
    $array = array();
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];


        for ($i = count($array); $i > 2; $i++) {
            array_push($array, $num);
        }
        echo asort($array);
    }


    ?>
</body>

</html>