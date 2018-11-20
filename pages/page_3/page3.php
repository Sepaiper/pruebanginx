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
            <p>Busque 3 números aleatoriamente y defina si el número encontrado es mayor a 50, menor
               de 20 o es un numero negativo.</p>       
        </div>
    <br>
    <div id="blockTwo">
        <div id="blockTwoOne">
            <h2>Desarrollo</h2>
            <img src="../../image/image333.jpg" alt="imagen 1" height="100%" width="100%">
            <p>En la imagen anterior se aprecia como identificar si un numero mayor a 50, menor  20 o si es negativo
                con la sentencia IF
            </p>
            <h3> el resultado del Ejercicio planteado es: </h3>
                    <?php
                    $one = rand(-100,100); $two = rand(-100,100); $tree = rand(-100,100); 
                    echo "los numero son: <br>";
                    echo "$one <br>";
                    echo "$two <br>";
                    echo "$tree <br>";
                    if($one > 50){
                        echo "el primer numero es mayor a 50";
                    } else if ($one < 20 && $one >= 0) {
                        echo "el primer numero es menor a 20";
                    } else if ($one < 0) {
                        echo "el primer numero es negativo";
                    }
                    echo "<br>";
                    if($two > 50){
                        echo "el segundo numero es mayor a 50";
                    } else if ($two < 20 && $two >= 0) {
                        echo "el segundo numero es menor a 20";
                    } else if ($two < 0) {
                        echo "el segundo numero es negativo";
                    }
                    echo "<br>";
                    if($tree > 50){
                        echo "el tercer numero es mayor a 50";
                    } else if ($tree < 20 && $tree >= 0) {
                        echo "el tercer numero es menor a 20";
                    } else if ($tree < 0) {
                        echo "el tercer numero es negativo";
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