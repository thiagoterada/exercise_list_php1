<?php
    $nro = $_POST["nro"];
    echo '<h3> Resultado </h3>';
    if($nro % 10 == 0){
        echo 'O número '. $nro .' é divisível por 10.<br>';
    }
    if($nro % 5 == 0){
        echo 'O número '. $nro .' é divisível por 5.<br>';
    }
    if($nro % 2 == 0){
        echo 'O número '. $nro .' é divisível por 2.<br>';
    }
    else if($nro % 10 != 0 && $nro % 5 != 0 && $nro % 2 != 0){
        echo 'O número '. $nro .' não é divisível por 10, 5 e 2.<br>';
    }

?>