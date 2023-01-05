<div class="titulo">Comparação entre arrays</div>

<?php
/*
 * Comparação simples (== ou !=) desconsidera ordem dos elementos e tipo da variável.
 * Se ambos os arrays tiverem os mesmo elementos com valores similares, mesmo que de tipos diferentes,
 * a comparação devolve TRUE.
 * 
 * Já a comparação estrita (=== ou !==) leva em consideração tanto a ordem dos elementos como os tipos das variáveis.
*/

$arr1 = ['nome' => 'Maria', 'idade' => 20];
$arr2 = ['nome' => 'Maria', 'idade' => 20];
var_dump($arr1 == $arr2);
var_dump($arr1 === $arr2);

$arr3 = ['idade' => 20, 'nome' => 'Maria'];
echo '<br>';
var_dump($arr1 == $arr3);
var_dump($arr1 === $arr3);
var_dump($arr1 != $arr3);
var_dump($arr1 !== $arr3);

echo '<br>';
$arr4 = ['idade' => '20', 'nome' => 'Maria'];
var_dump($arr1 == $arr4);
var_dump($arr1 === $arr4);