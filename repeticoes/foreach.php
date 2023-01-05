<div class="titulo">Foreach</div>

<?php
$array = [
    1 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'
];
// Declaração do array as valor de cada elemento
foreach ($array as $valor) {
    echo "$valor <br>";
}
// Declaração do array as índice e valor de cada elemento
foreach ($array as $indice => $valor) {
    echo "$indice => $valor <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach ($matrix as $linha) {
    // echo "$linha <br>";
    foreach($linha as $letra) {
        echo "$letra ";
    }
    echo "<br>";
}

$numeros = [1, 2, 3, 4, 5];
// Declaração do array as índice/referência de cada elemento
foreach ($numeros as &$dobrar) {
    $dobrar *= 2;
    echo "$dobrar <br>";
}
print_r($numeros);