<div class="titulo">Desafio Operadores Lógicos</div>

<!--
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->

<?php
include 'desafio_operadores_logicos form.php';

$trabalho1 = $_POST['t1'];
$trabalho2 = $_POST['t2'];
$tv = '';
$irAoShopping = "não vai";

if($trabalho1 && $trabalho2) {
    $tv = 'de 50 polegadas';
    $irAoShopping = "vai";
} else if($trabalho1 XOR $trabalho2) {
    $tv = 'de 32 polegadas';
    $irAoShopping = "vai";
}

if($_POST)
    echo "A família {$irAoShopping} ao shopping comprar uma tv {$tv} e tomar sorvete.";