<div class="titulo">Valor vs Referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

echo '<p>### Atruibuição por Valor ###</p>';
$variavelValor = $variavel;
$variavelValor = 'novo valor';
echo "Variável inicial: $variavel";
echo "<br>Variável copiada: $variavelValor";

echo '<p>### Atruibuição por Referência ###</p>';
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referência';
echo "Variável inicial: $variavel";
echo "<br>Variável copiada com referência: $variavelReferencia";