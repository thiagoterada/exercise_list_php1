<?php
    $custoFab = $_POST["custoFab"];
    $porcentDist = $_POST["porcentDist"];
    $porcentImp = $_POST["porcentImp"];
    $custoDist = ($custoFab * $porcentDist) / 100;
    $custoImp = ($custoFab * $porcentImp) / 100;
    $preco_final = $custoFab + $custoDist + $custoImp;
    echo '<h3> Resultado </h3>';
    echo 'Preço Final: '. $preco_final .'<br>';
?>