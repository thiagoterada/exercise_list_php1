<?php
    $raio = $_POST["raio"];
    $pi = 3.14159265359;
    $area = $pi * pow($raio, 2);
    echo '<h3> Resultado </h3>';
    echo 'A área do Círculo equivale a: '. $area .'m<br>';
?>