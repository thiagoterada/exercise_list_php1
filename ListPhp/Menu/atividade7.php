<?php
    $vlr1 = $_POST["vlr1"];
    $vlr2 = $_POST["vlr2"];
    $soma = $vlr1 + $vlr2;
    if($soma > 20){
        $soma += 8;
    } else if($soma == 20 || $soma < 20){
        $soma -= 5;
    }
    echo '<h3> Resultado </h3>';
    echo 'O valor final é: '. $soma .'<br>';
?>