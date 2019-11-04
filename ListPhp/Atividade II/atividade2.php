<?php
    $A = $_POST["A"];
    $B = $_POST["B"];
    $auxiliar = $A;
    $A = $B;
    $B = $auxiliar;
    echo '<h3> Resultado </h3>';
    echo 'Variável A: '. $A .'<br>';
    echo 'Variável B: '. $B .'<br>';
?>