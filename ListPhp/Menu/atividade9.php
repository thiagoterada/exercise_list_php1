<?php
    $nro = $_POST["nro"];
    echo '<h3> Resultado </h3>';
    switch ($nro){
        case 1:
        echo 'O mês 1 é Janeiro!';
        break;
        
        case 2:
        echo 'O mês 2 é Fevereiro!';
        break;

        case 3:
        echo 'O mês 3 é Março!';
        break;

        case 4:
        echo 'O mês 4 é Abril!';
        break;

        case 5:
        echo 'O mês 5 é Maio!';
        break;

        case 6:
        echo 'O mês 6 é Junho!';
        break;

        case 7:
        echo 'O mês 7 é Julho!';
        break;

        case 8:
        echo 'O mês 8 é Agosto!';
        break;

        case 9:
        echo 'O mês 9 é Setembro!';
        break;

        case 10:
        echo 'O mês 10 é Outubro!';
        break;

        case 11:
        echo 'O mês 11 é Novembro!';
        break;

        case 12:
        echo 'O mês 12 é Dezembro!';
        break;

        default:
        echo 'O número ' . $nro . ' não equivale a nenhum mês... =( <br>';
    
    }

?>