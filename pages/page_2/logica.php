<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/logica.css" type="text/css">
    <title>PHP</title>
</head>
<body>
    <div>
    <div id="Comando">
        <h1>Bienvenido a el ejercicio N°2</h1> 
        <?php
        echo 'El dia Digitado es: <br>';
        switch ($_GET['resultado']) {
            case 1:
            case 8:
            case 15:
            case 22:
            case 29:
                echo "Sabado";
                break;
            case 2:
            case 9:
            case 16:
            case 23:
            case 30:
                echo "Domingo";
                break;
            case 3:
            case 10:
            case 17:
            case 24:
                echo "Lunes";
                break;
            case 4:
            case 11:
            case 18:
            case 25:
                echo "Martes";
                break;
            case 5:
            case 12:
            case 19:
            case 26:
                echo "Miercoles";
                break;
            case 6:
            case 13:
            case 20:
            case 27:
                echo "Jueves";
                break;
            case 7:
            case 14:
            case 21:
            case 28:
                echo "Viernes";
                break; 
            default:
                echo "No es un Dia Habil";
                break;
        }
    ?>
    </div>
    <div id="boton">
    <form name="Regresar" method="POST" action="./page2.php">
                    <input value="Regresar" type="submit">
    </form>
    </div>
    </div>
</body>
</html>

