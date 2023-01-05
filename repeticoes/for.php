<div class="titulo">FOR</div>

<?php
// A variável contadora está disponível fora do laço, mesmo tendo sido declarada dentro dele
for($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

// Não é necessário declarar todos os elementos do laço FOR. Por boas práticas, favor declarar todos os elementos.
for(; $cont <= 10; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

for(; $cont <= 15; ) {
    echo "$cont <br>";
    $cont++;
}


$array = [
    1 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'
];

print_r($array);

echo "<hr>";

for($i = 1; $i <= count($array); $i++) {
    echo "{$array[$i]} <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

echo "<hr>";

for($i = 0; $i < count($matrix); $i++) {
    for($j = 0; $j < count($matrix[$i]); $j++) {
        echo "{$matrix[$i][$j]} ";
    }
    echo "<br>";
}