<?php
    $nro1 = $_POST["nro1"];
    $nro2 = $_POST["nro2"];
    $result_soma = $nro1 + $nro2;
    $result_sub = $nro1 - $nro2;
    $result_mult = $nro1 * $nro2;
    $result_div = $nro1 / $nro2;
    $result_pot = pow($nro1, $nro2);
    echo '<h3> Resultados </h3>';
    echo 'Soma: '. $result_soma .'<br>';
    echo 'Subtração: '. $result_sub .'<br>';
    echo 'Multiplicação: ' .$result_mult. '<br>';
    echo 'Divisão: ' . $result_div . '<br>';
    echo 'Potênciação: ' . $result_pot . '<br>';
?>