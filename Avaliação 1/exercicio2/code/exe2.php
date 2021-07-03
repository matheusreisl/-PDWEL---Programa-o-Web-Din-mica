<?php
    $n = $_POST['n'];
    $m = $_POST['m'];
    $arrayMultiplos = [];

    for ($i=1; $i<=$m; $i++){
        $arrayMultiplos[] =   $n * $i;
    }

    print_r($arrayMultiplos);

?>
