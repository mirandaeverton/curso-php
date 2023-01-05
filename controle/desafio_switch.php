<div class="titulo">Desafio Switch</div>

<?php
include 'desafio_switch_form.php';
const MILHA = 1.609344;
$valorMedida = 0;
$tipoConversao = '';
$resultado = 0;
$unidadeMedida;


if($_POST['param'] && $_POST['conversao']) {
    $valorMedida = $_POST['param'];
    $tipoConversao = $_POST['conversao'];
}

switch ($tipoConversao) {
    case 'km-milha':
        $resultado = $valorMedida / MILHA;
        $unidadeMedida = 'milhas';
        break;
        case 'milha-km':
            $resultado = $valorMedida * MILHA;
            $unidadeMedida = 'quilómetros';
            break;
        case 'metro-km':
            $resultado = $valorMedida / 1000;
            $unidadeMedida = 'quilómetros';
            break;
        case 'km-metro':
            $resultado = $valorMedida * 1000;
            $unidadeMedida = 'metros';
            break;
        case 'cel-fah':
            $resultado = ($valorMedida * 9/5) + 32;
            $unidadeMedida = 'graus Fahrenheit';
            break;
        case 'fah-cel':
            $resultado = ($valorMedida * 32) * 5/9;
            $unidadeMedida = 'graus Celsius';
        break;
    default:
        break;
}

if($_POST)
    echo "O resultado da conversão de $valorMedida $tipoConversao é: $resultado $unidadeMedida.";
