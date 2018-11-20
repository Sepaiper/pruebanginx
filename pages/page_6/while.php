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
            
            <h1>While</h1>
            <p>El Bucle while o bucle mientras es una estructura de la mayoría de los lenguajes de programación 
            estructurados cuyo propósito es repetir un bloque de código mientras una condición se mantenga verdadera.</p>
            
        </div>
    <br>
    <div id="blockTwo">
        <div id="blockTwoOne">
            <h2>Desarrollo</h2>
            <img src="../../image/while.jpg" alt="imagen 1" height="100%" width="100%">
            <p></p>
            <p> A continuacion, se dara respuesta al codigo planteado en las imagenes anteriores
                para sacar el promedio de 25 estudiantes cuya nota es tomada aleatoriamente</p>
            <p>Nota: si actualiza la pagina obtendra nuevos datos</p>
            <?php
                echo "Bienvenido a While <br>";
                $a = 0;
                $notaFinal = 0;
                $promedio = 0;
                while ($a < 26) {
                    $a = $a + 1;
                    $nota = rand(1.0,5.0);
                    echo "las nota es: $nota <br>";
                    $notaFinal = $notaFinal + $nota;
                }
                $promedio = $notaFinal/25;
                echo "el promedio general de los 25 estudiantes es: $promedio";
            ?>
            <div id="buton2">
                <br>
                <form name="Regresar" method="POST" action="page6.php">
                    <input value="Regresar" type="submit">
                </form>
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