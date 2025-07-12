<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$op = $_POST['operacao'];

switch ($op) {
    case 'somar': echo "Resultado é:".$numero1 + $numero2; break;
    case 'subtrair': echo "Resultado é:".$numero1 - $numero2; break;
    case 'multiplicar': echo "Resultado é:".$numero1 * $numero2; break;
    case 'dividir':
        if ($numero2 != 0) {
            echo "Resultado é:". $numero1 / $numero2;
        } else {
            echo "Divisão por zero!";
        }
        break;
    default:
        echo "Operação inválida";
}
?>