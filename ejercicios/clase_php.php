<?php
//los arreglos pueden ser predefinidos o personalizado
echo "1. predefinidos"."<br>";
echo "2. personalizado"."<br>";
$arreglo = array(1,2,3,4,5);
print_r($arreglo); // imprime el arreglo
var_dump($arreglo); //detalle de las variables
echo("<br><br>");
$arreglo = array(0=>1,"dos"=>2);
//si se identifica varias veces un indicador php toma el anterior
var_dump($arreglo);
echo("<br><br><br><br> agregar datos a un arreglo<br><br>");
$arreglo1 = array();
$arreglo1[0] = "dos";
$arreglo1[1] = "tres";
$arreglo1[2] = 4;
print_r($arreglo1);
echo("<br><br><br><br> eliminar datos a un arreglo<br><br>");
unset($arreglo1[1]);
print_r($arreglo1);
echo("<br><br><br><br> contar datos a un arreglo<br><br>");
$tamaño = count($arreglo1);
echo $tamaño;
echo "<br>";
$tamaño = sizeof($arreglo1);
echo $tamaño;
echo("<br><br><br><br>arreglos<br><br>");
$listas = array("limon","naranja","banana","manzana","pera");
print_r($listas);
sort($listas);
echo("<br>");
print_r($listas);
echo("<br><br><br><br>arreglos<br><br>");
$bool = in_array("banana",$listas);
echo $bool;
echo("<br><br><br><br>arreglos<br><br>");
$search = array_search("banana",$listas);
echo $search;
echo("<br><br><br><br>arreglos<br><br>");
for ($i=0; $i < count($listas); $i++) { 
    echo $listas[$i]."<br>";
}
echo("<br><br><br><br>arreglos<br><br>");
foreach ($listas as $frutas) {
    echo $frutas."<br>";
}
echo("<br><br><br><br>multidimencionales<br><br>");
$arreglo = array(
    0 => 1,
    1 => array(0 => "hola", 1 => "mundo"),
    2 => 3
);
print_r($arreglo);
echo "<br><br>";
echo "--------------------------------<br><br>--------<br>";
$lista = array(array("peru","colombia","argentina"),
                array("mexico", "honduras"),
                array("estador unidos","canada"));
print_r($lista);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <tr>
        <th>tirulo 2</th>
        <th>titulo 2</th>
    </tr>
    <?php
        for ($i=0; $i < count($lista); $i++) { ?>
        <tr>
            <td><?php echo $lista[$i][0];?> </td>
            <td><?php echo $lista[$i][1];?> </td>
        </tr>
            <?php
        }
    ?>
    </table>
</body>
</html>