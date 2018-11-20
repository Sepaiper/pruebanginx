<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP</title>
</head>
<body>
<?php 
if (isset($_POST['index'])) {
  $arr = $_POST['index'];
  $numberVector = count($arr);
  $par = 0;
  $impar = 0;
  for ($b=0; $b < $numberVector; $b++) { 
    if ($arr[$b] > 0 && $arr[$b] < 21) {
      echo "$arr[$b] <br>";
      if ($arr[$b] % 2 == 0) {
        echo "el numero $arr[$b] es par <br>";
        $par = $par + $arr[$b];
      } else {
        echo "el numero $arr[$b] es impar <br>";
        $impar = $impar + $arr[$b];
      }
    } else {
      echo 'los numeros digitados deben ser entre 1 y 20';
      $b = $numberVector;
    }
  }
  echo "la suma de los numero pares es $par <br>";
  echo "la suma de los numero impares es $impar <br>";
 }
?>
  <h1>Digite un numero de 1 a 20 </h1>
  <p>
  <form class= "" action="ejemplo.php" method="post">
    <input type='number' name="numero" value=""/>
    <input type='submit' value='enviar' />
  </form> 
  <?php
   if(isset($_POST['numero'])) {
     $number = $_POST['numero'];
     if ($number > 0 && $number < 21) {
       for ($i=0; $i < $number; $i++) { 
         ?>
          <form class= "" action="ejemplo.php" method="post">
            <input type='text' name="index[]" value=""/>
         
         <?php
       }
       ?>
            <input type='submit' value='enviar' />
            </form> 
       <?php
     } else {
       print 'numero fuera de rango';
     }
   }
  ?>
</body>
</html>