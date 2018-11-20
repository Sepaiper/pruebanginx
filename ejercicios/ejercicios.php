<?php
$numero = 10;
$arreglo = array();
$contador = 0;

for ($i=0; $i < $numero; $i++) { 
    $nota = rand(1,5);
    $contador = $contador + $nota;
    $arreglo[$i] = $nota;
}
echo $contador/$numero;
echo "<br><br>";
print_r($arreglo);


?>