<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/page.css" type="text/css">
    <title>PHP</title>
</head>
<body>
    <div>
        <div id="blockOne">
            
            <h1>Ejercicio</h1>
            <p>Identifique si un número es par o impar. El sistema debe recibir una variable entera que se
                calcule aleatoriamente.</p>       
        </div>
    <br>
    <div id="blockTwo">
        <div id="blockTwoOne">
            <h2>Desarrollo</h2>
            <img src="../../image/image14.jpg" alt="imagen 1" height="100%" width="100%">
            <p>En el anterior ejercicio observamos como el operador logico asignado % genera como resultado el Residuo
                de la division que se realiza entre el numero aleatorio con 2, si el resultado es 0, el numero es "PAR"
                de lo contrario es "IMPAR"</p>
            <h3> el resultado del Ejercicio planteado es: </h3>
                    <?php
                    $one = rand(0,100);
                    echo "El numero es: <br>";
                    echo "$one <br>";
                    if($one % 2 == 0){
                        echo "el numero es par";
                    } else {
                        echo "el numero es impar";
                    }
                    ?>
                    <p>Nota: si actualizan los valores cambian aleatoriamente</p>
            <div id="buton2">
                <br>
                <a href="../../index.html">
                    <input type="submit" value="Regresar">
            </a>
            </div>
        </div>
        <div id="blockTwoTwo">
                <h2> Paginas para aprender</h2>
                <h5>«Todos somos muy ignorantes, lo que ocurre es que no todos ignoramos las mismas cosas» 
                    Albert Einstein</h5>
                    <p>CSS: Remodela tu pagina web con este simple y eficaz
                        lenguaje de estilo, sigue este enlace. <a href="https://www.w3schools.com/css/css_padding.asp">CSS</a></p>
                    <p>HTML: Diseña tu pagina web con este poderoso lenguaje de etiquetes
                        y llevas tu ideas a lo mas alto, sigue este enlace.  <a href="https://www.w3schools.com/html/default.asp">HTML</a></p>
                    <p>PHP: Aprende este increible y poderoso lenguaje de programación, sigue este enlace. 
                        <a href="https://www.w3schools.com/php/default.asp">PHP</a></p>
        </div>
    </div>
</div>
</body>
</html>