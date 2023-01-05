<div class="titulo">Operações com Array</div>

<?php
// pode-se declarar um array de duas formas:
//      $array = array(elemento1, elemento2, elemento3...)
//      $array = [elemento1, elemento2, elemento3...]
// Além disso, cada elemento do array pode ter um índice numérico, como é normal em outras linguagens,
// ou pode ser um par chave=>valor, conforme pode ser visto no exemplo abaixo.
$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

// Assim adiciona-se um novo elemento a um array
$dados2["endereço"] = "Rua A";

// Um exemplo de união de arrays. Neste caso, caso haja um conflito de índices, prevalece o índice do array da esquerda
$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

// Verificar se a variável é um array
echo '<br>' . is_array($dadosCompletos);
// Retorna o comprimento do array
echo '<br>' . count($dadosCompletos);

echo '<br>';
// Retorna um índice aleatório do array
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
echo " ${dadosCompletos['idade']}";

// Elimina um elemento do array
unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos);

// "Esvazia a variável, que passa a ser NULL"
unset($dadosCompletos);
echo '<br>';
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

// Exemplo de conflito de índices
$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);

// Forma recomendada de união de arrays
$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);

// Ordenar o array
sort($decimais);
echo '<br>';
print_r($decimais);