<?php
    $n = $_GET['n'];
    $m = $_GET['m'];
    $mmc = $m;
    $anterior = $n;
    $atual = $m;
    $restoDiv = $anterior % $atual;

    if($n < $m){
        echo('O primeiro parâmetro precisa ser maior que o segundo.');
    }
    else{

        while($restoDiv != 0){
            $anterior = $atual;
            $atual = $restoDiv;
            $restoDiv = $anterior % $atual;
        }

        for ($i=2; $i<$m; $i++){
        
            if (($n%$i == 0) && ($m%$i == 0)){
                $mmc = $i; break;
            }
        
        }
           
        echo('O MDC é '.$atual.' e o MMC é '.$mmc);
    }
?>