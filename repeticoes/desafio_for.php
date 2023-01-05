<div class="titulo">Desafio For</div>
<!-- 
Usar o for...
#
##
###
####
#####
1) Pode usar incremento $i++
2) Não pode usar incremento $i++
-->

<?php
$hashtag = '#';
echo 'Versão 1','<hr>';
for($i = 0; $i < 5; $i++){
    echo "$hashtag", '<br>';
    $hashtag .= '#';
}

$hashtag = '#';
echo 'Versão 2','<hr>';
for($i = 0; $i < 5; $i++){
    for($j = 0; $j <= $i; $j++){
        echo "$hashtag";
    }
    echo '<br>';
}