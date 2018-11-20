<?php
    echo "Primer Punto <br>";
    echo "Numeros <br>";
    $numPares = 0;
    $numImpares = 0;
    $pares = 0;
    $impares = 0;
    $num = 75;
    $suma = 0;
    $promedio = 0;
    for ($i=0; $i < $num; $i++) { 
        $numero = rand(1,75);
        if ($numero % 2 == 0 && $numero != 0) {
            $numPares = $numPares + $numero;
            $pares = $pares + 1;
        } else if($numero % 2 != 0 && $numero != 0) {
            $numImpares = $numImpares + $numero;
            $impares = $impares + 1;
        }
        if ($numero >= 0) {
            $suma = $suma + $numero;
        }
    }
    $promedio = $suma / $num;
    echo "los numero pares fueron $pares y su suma fue $numPares <br>";
    echo "los numero impares fueron $impares y su suma fue $numImpares <br>";
    echo "el promedio de los numeros positivos es de $promedio <br>";
    echo "<br>";
    echo "Segundo punto <br>";
    $base = 7;
    for ($i=1; $i < $base; $i++) { 
        echo "*<br>";
        for ($j=1; $j > $i; $j--) { 
            echo "+";
        }
        for ($k=$base; $k >= 5; $k--) { 
            echo "*";
        }
        for ($k=$base; $k >= 5; $k--) { 
            echo "*";
        }
    }
?>