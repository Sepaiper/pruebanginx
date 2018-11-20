<?php
    
    $x=9;

    $y=($x-1)/2;
    $bool=false;
    $incremento = 1;
    for($i=1;$i<=$x;$i++){
        if($y == 0 ){
            $bool = true;
        }
        for($j=1;$j<=$y;$j++){ 
            echo "&nbsp&nbsp"; 
        }
        for($k=1;$k<=$incremento;$k++){ 
            echo "*";
            
        }
        for($j=1;$j<=$y;$j++){ 
            echo "&nbsp&nbsp"; 
        }
        if($bool==false){
            $y=$y-1;
            $incremento=$incremento+2;
        }
        echo "<br />";
        if($bool==true){
            $y=$y+1;
            $incremento=$incremento-2;
        }
    } 
?>