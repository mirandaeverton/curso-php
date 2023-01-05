<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elsa", "Rapunzel", "Branca de Neve", "Cinderela"];
$sorteado = $nomes[array_rand($nomes)];
echo "<h1>$sorteado</h1>";
