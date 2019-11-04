<?php
    $n1 = $_POST["nota1"];
    $n2 = $_POST["nota2"];
    $n3 = $_POST["nota3"];
    $mediafinal = ($n1 * 2 + $n2 * 3 + $n3 * 5) / 10; 
    echo '<h3> Resultado </h3>';
    echo 'Média Final: '. $mediafinal .'<br>';
?>