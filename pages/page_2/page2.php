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
            <p>Realizar un programa que reciba un valor numérico y dependiendo del número arroje el
                día que corresponda para septiembre 2018. EL sistema se debe desarrollar con
                sentencia Switch</p>
            
        </div>
    <br>
    <div id="blockTwo">
        <div id="blockTwoOne">
            <h2>Desarrollo</h2>
            <img src="../../image/imagen12.jpg" alt="imagen 1" height="100%" width="100%">
            <p>En la anterior imagen, se da respuesta al ejercicio 2 con el condicional switch, el comando $_GET['resultado']
                es como php captura la informacion que se envia desde el html
            </p>
            <img src="../../image/image22.jpg" alt="imagen 2" height="100%" width="100%">
            <p>Continuando con el codigo se aprecia como continua y finaliza el condicional switch</p>
            <h4> Si desea revizar el codigo mostrado en las anteriores imagenes digite un numero entre 1 y 30: </h4>
            <form action="logica.php" metodo="GET">
                <input type="number" name="resultado">
                <input type="submit" value="enviar">
            </form>
                    <p></p>
            <div id="buton2">
                <br>
                <form name="Regresar" method="POST" action="../../index.html">
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