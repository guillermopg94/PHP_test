<?php
include 'funciones.php';

// echp __DIR__; //esto para saber la ruta
?>

<html>

<head>
    <title>Test6</title>
</head>

<body>

    <?php
    $var = 0;
    $c = 0;

    while ($var < 10) {
        if ($var == 4) {
    ?><script>
                alert("<?php echo $var ?>");
            </script>
    <?php
        } else {
            echo $var;
        }
        $var++;
    }

    ?>

    <!-- <script>
    alert("<?php echo $c ?>");
</script> -->

</body>

</html>