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
            <p>Realice un programa que imprima el número mayor, el número menor entre 10 números.
                    El sistema debe declarar cada variable y su valor debe ser calculado aleatoriamente por
                    PHP. Se debe realizar con la sentencia IF</p>
            
        </div>
    <br>
    <div id="blockTwo">
        <div id="blockTwoOne">
            <h2>Desarrollo</h2>
            <img src="../../image/imagen11.jpg" alt="imagen 1" height="100%" width="100%">
            <p>El codigo de la imagen anterior escoge un valor aleatorio entre 1 y 10, con el metodo rand(1,10)
                en donde se asigna automaticamente a la variable
            </p>
            <img src="../../image/image21.jpg" alt="imagen 2" height="100%" width="100%">
            <p>En el codigo de la imagen anterior con el condicional if - else, se realiza una busqueda
                del numero mayor y se imprime en pantalla con PHP
            </p>
            <img src="../../image/image31.jpg" alt="imagen 2" height="100%" width="100%">
            <p>En el codigo de la imagen anterior con el condicional if - else, se realiza una busqueda
                del numero menor y se imprime en pantalla con PHP
            </p>
            <h3> el resultado del Ejercicio planteado es: </h3>
                    <?php
                    $one = rand(1,10); $two = rand(1,10); $tree = rand(1,10); $four = rand(1,10); $five = rand(1,10); $six = rand(1,10);
                    $seven = rand(1,10); $eigth = rand(1,10); $nine = rand(1,10); $ten = rand(1,10);
                    echo "los numero son: <br>";
                    echo "$one <br>";
                    echo "$two <br>";
                    echo "$tree <br>";
                    echo "$four <br>";
                    echo "$five <br>";
                    echo "$six <br>";
                    echo "$seven <br>";
                    echo "$eigth <br>";
                    echo "$nine <br>";
                    echo "$ten <br>";
                    if($one >= $two && $one >= $tree && $one >= $four && $one >= $five && $one >= $six 
                        && $one >= $seven && $one >= $eigth && $one >= $nine && $one >= $ten){
                        echo "el numero mayor es: $one";
                    } else if ($two >= $one && $two >= $tree && $two >= $four && $two >= $five && $two >= $six 
                    && $two >= $seven && $two >= $eigth && $two >= $nine && $two >= $ten){
                        echo "el numero mayor es: $two";
                    } else if ($tree >= $one && $tree >= $two && $tree >= $four && $tree >= $five && $tree >= $six 
                    && $tree >= $seven && $tree >= $eigth && $tree >= $nine && $tree >= $ten) {
                        echo "el numero mayor es: $tree";
                    } else if ($four >= $one && $four >= $two && $four >= $tree && $four >= $five && $four >= $six 
                    && $four >= $seven && $four >= $eigth && $four >= $nine && $four >= $ten) {
                        echo "el numero mayor es: $four";
                    } else if ($five >= $one && $five >= $two && $five >= $four && $five >= $tree && $five >= $six 
                    && $five >= $seven && $five >= $eigth && $five >= $nine && $five >= $ten) {
                        echo "el numero mayor es: $five";
                    } else if ($six >= $one && $six >= $two && $six >= $four && $six >= $five && $six >= $tree 
                    && $six >= $seven && $six >= $eigth && $six >= $nine && $six >= $ten) {
                        echo "el numero mayor es: $six";
                    } else if ($seven >= $one && $seven >= $two && $seven >= $four && $seven >= $five && $seven >= $six 
                    && $seven >= $tree && $seven >= $eigth && $seven >= $nine && $seven >= $ten) {
                        echo "el numero mayor es: $seven";
                    } else if ($eigth >= $one && $eigth >= $two && $eigth >= $four && $eigth >= $five && $eigth >= $six 
                    && $eigth >= $seven && $eigth >= $tree && $eigth >= $nine && $eigth >= $ten) {
                        echo "el numero mayor es: $eigth";
                    } else if ($nine >= $one && $nine >= $two && $nine >= $four && $nine >= $five && $nine >= $six 
                    && $nine >= $seven && $nine >= $tree && $nine >= $eigth && $nine >= $ten) {
                        echo "el numero mayor es: $nine";
                    } else if($ten >= $one && $ten >= $two && $ten >= $tree && $ten >= $four && $ten >= $five 
                    && $ten >= $six && $ten >= $seven && $ten >= $eigth && $ten >= $nine) {
                        echo "el numero mayor es: $ten";
                    }
                    echo "<br>";
                    if($one <= $two && $one <= $tree && $one <= $four && $one <= $five && $one <= $six 
                        && $one <= $seven && $one <= $eigth && $one <= $nine && $one <= $ten){
                        echo "el numero menor es: $one";
                    } else if ($two <= $one && $two <= $tree && $two <= $four && $two <= $five && $two <= $six 
                    && $two <= $seven && $two <= $eigth && $two <= $nine && $two <= $ten){
                        echo "el numero menor es: $two";
                    } else if ($tree <= $one && $tree <= $two && $tree <= $four && $tree <= $five && $tree <= $six 
                    && $tree <= $seven && $tree <= $eigth && $tree <= $nine && $tree <= $ten) {
                        echo "el numero menor es: $tree";
                    } else if ($four <= $one && $four <= $two && $four <= $tree && $four <= $five && $four <= $six 
                    && $four <= $seven && $four <= $eigth && $four <= $nine && $four <= $ten) {
                        echo "el numero menor es: $four";
                    } else if ($five <= $one && $five <= $two && $five <= $tree && $five <= $four && $five <= $six 
                    && $five <= $seven && $five <= $eigth && $five <= $nine && $five <= $ten) {
                        echo "el numero menor es: $five";
                    } else if ($six <= $one && $six <= $two && $six <= $tree && $six <= $four && $six <= $five 
                    && $six <= $seven && $six <= $eigth && $six <= $nine && $six <= $ten) {
                        echo "el numero menor es: $six";
                    } else if ($seven <= $one && $seven <= $two && $seven <= $tree && $seven <= $four && $seven <= $five 
                    && $seven <= $six && $seven <= $eigth && $seven <= $nine && $seven <= $ten) {
                        echo "el numero menor es: $seven";
                    } else if ($eigth <= $one && $eigth <= $two && $eigth <= $tree && $eigth <= $four && $eigth <= $five 
                    && $eigth <= $six && $eigth <= $seven && $eigth <= $nine && $eigth <= $ten) {
                        echo "el numero menor es: $eigth";
                    } else if ($nine <= $one && $nine <= $two && $nine <= $tree && $nine <= $four && $nine <= $five 
                    && $nine <= $six && $nine <= $seven && $nine <= $eigth && $nine <= $ten) {
                        echo "el numero menor es: $nine";
                    } else if ($ten <= $one && $ten <= $two && $ten <= $tree && $ten <= $four && $ten <= $five 
                    && $ten <= $six && $ten <= $seven && $ten <= $eigth && $ten <= $nine){
                        echo "el numero menor es: $ten";
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