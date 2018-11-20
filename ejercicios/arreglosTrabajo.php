<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Arreglos</title>
</head>
<body>
  <table border='1'>
    <?php
      $arr = array('primero' => array('nombre' => 'joel', 'apellido' => 'Rodriguez', 'edad' => 20),
                  'segundo' => array('nombre' => 'tania', 'apellido' => 'Martinez', 'edad' => 21),
                  'tercero' => array('nombre' => 'viviana', 'apellido' => 'Torres', 'edad' => 19));
     print_r($arr)
    ?>
    <br>
    <h1>Datos del array anterior almacenados en una tabla</h1>
    <br>
    <?php
      for ($i=0; $i < count(array_keys($arr)); $i++) { ?>
        <tr>
          <td><?php print_r(array_keys($arr)[$i]);?></td>
          <td><?php print_r(array_column($arr, 'nombre')[$i]);?></td>
          <td><?php print_r(array_column($arr, 'apellido')[$i]);?></td>
          <td><?php print_r(array_column($arr, 'edad')[$i]);?></td>
        </tr>
    <?php
      }
    ?>
  </table>
</body>
</html>