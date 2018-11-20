<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trabajo en Clase</title>
</head>
    <body>
        <div>
            <?php
                if(isset($_POST['vec'])){
                    $vector=$_POST['vec'];
                    $n = count($vector);
                    $suma = 0;
                    for($i = 0; $i < $n; $i++){
                        echo "$i = $vector[$i] <br>";
                        $suma = $suma + $vector[$i];
                    }
                    echo "la suma es $suma <br>";
                }
            ?>
            digite el numero de veces que quieres sumar
            <form class= "" action="clase_arreglos_html.php" method="post">
                <input type="text" name="numero" value="">
                <input type="submit" value="enviar">
            </form>
            Digite los numero a sumar
            <br>
            <form class="" action="clase_arreglos_html.php" method="post">
                <?php
                    if (isset($_POST['numero'])) {
                        $n= $_POST['numero'];
                    }
                    for ($i=0; $i < $n; $i++){ 
                ?>
                        <input type="text" name="vec[]" value="">
                <?php
                    }
                ?>
                <input type="submit" value="Sumar">
            </form>
            <br>
        </div>
    </body>
</html>





<tr>
          <td><?php echo $arr[$i][0];?> </td>
        </tr>
        <tr>
          <td><?php echo $arr[$i][1];?> </td>
        </tr>
        <tr>
          <td><?php echo $arr[$i][2];?> </td>
        </tr>
       