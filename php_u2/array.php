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
    $jugador1 = [
        "nombre" => "WilliRex",
        "vida" => 20,
        "velocidad" => 1
    ];
    $jugador2 = [
        "nombre" => "Vegetta777",
        "vida" => 20,
        "velocidad" => 1
    ];
    $jugador3 = [
        "nombre" => "Auronplay",
        "vida" => 20,
        "velocidad" => 1
    ];
    $jugadores = [];

    $jugadores2 = [
        [
            "nombre" => "WilliRex",
            "vida" => 20,
            "velocidad" => 1
        ], [
            "nombre" => "Vegetta777",
            "vida" => 20,
            "velocidad" => 1
        ]

        ];

    array_push($jugadores, $jugador1, $jugador2, $jugador3);

    print_r($jugadores);
   echo("<br>");
    print_r($jugadores2);
    ?>
</body>

</html>