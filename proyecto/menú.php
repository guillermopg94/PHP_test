<?php
session_start();
if ($_SESSION["Usuario"] == "") {
    header("Location: login.php");
}
$hoy = date('d-m-Y');
echo ("<br>");
?>

<p class="bienvenida"><?php echo ("Benvingut " . $_SESSION["Usuario"] . " " . $hoy); ?></p>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        body {
            background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), linear-gradient(to bottom, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), linear-gradient(135deg, #670d10 0%, #092756 100%);
        }

        ul {
            display: flex;
            width: 100%;
            height: 80vh;
            margin: auto;
            max-width: 1000px;
            justify-content: space-between;
            text-align: center;
        }

        a {
            padding: 1rem 2rem 1.15rem;
            text-transform: uppercase;
            cursor: pointer;
            color: white;
            min-width: 80px;
            margin: auto;
            text-decoration:none
        }

        a:hover {
            background-image: url('https://scottyzen.sirv.com/Images/v/button.png');
            background-size: 100% 100%;
            color: #27262c;
            animation: spring 300ms ease-out;
            text-shadow: 0 -1px 0 #ef816c;
            font-weight: bold;
            text-decoration:none
        }

        li:active {
            transform: translateY(4px);
        }

        @keyframes spring {
            15% {
                -webkit-transform-origin: center center;
                -webkit-transform: scale(1.2, 1.1);
            }

            40% {
                -webkit-transform-origin: center center;
                -webkit-transform: scale(0.95, 0.95);
            }

            75% {
                -webkit-transform-origin: center center;
                -webkit-transform: scale(1.05, 1);
            }

            100% {
                -webkit-transform-origin: center center;
                -webkit-transform: scale(1, 1);
            }
        }

        .shameless-plug {
            position: absolute;
            bottom: 30px;
            right: 20;
            padding: 8px 20px;
            color: white;
            text-decoration: none;
        }

        .bienvenida {
            color: white;
            text-transform: uppercase;
            padding-left: 500px;
            padding-top: 10px;
            padding-bottom: 250px;
        }
    </style>
</head>

<body>
    <ul>
        <li> <a href="">Nou àlbum </a> </li>
        <li> <a href=""> Nova imatge </a></li>
        <?php
        if ($_SESSION["Usuario"] == "user") {
        ?>
            <li> <a href=""> Gestionar àlbums/imatges </a></li>
        <?php
        }
        ?>
        <?php
        if ($_SESSION["Usuario"] == "admin") {
        ?>
            <li> <a href=""> Gestionar servidor </a></li>
        <?php
        }
        ?>


    </ul>

    <a class="shameless-plug" href="cerrar-sesion.php">👋 Close Sesion</a>
</body>

</html>