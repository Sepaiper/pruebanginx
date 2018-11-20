<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>resultado</title>


</head>
<body>
    <h1>Resultado</h1>
    <?php
        echo 'la suma de los numeros digitas es: ';
        $arreglo = array();
        $arreglo[0] = $_GET['resultado'];
        $arreglo[1] = $_GET['resultado1'];
        $arreglo[2] = $_GET['resultado2'];
        $arreglo[3] = $_GET['resultado3'];
        $arreglo[4] = $_GET['resultado4'];
        $arreglo[5] = $_GET['resultado5'];
        $arreglo[6] = $_GET['resultado6'];
        $arreglo[7] = $_GET['resultado7'];
        $resultado = $_GET['resultado']+$_GET['resultado1']+$_GET['resultado2']+$_GET['resultado3']+$_GET['resultado4']+$_GET['resultado5']+$_GET['resultado6']+$_GET['resultado7'];
        echo $resultado;
        echo '<br>';
        print_r($arreglo);
    ?>
    <form name="Regresar" method="POST" action="clase_arreglos_html.php">
        <input value="Regresar" type="submit">
    </form>
</body>
</html>