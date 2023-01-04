<div class="titulo">String</div>

<?php
echo '<br>' . strtoupper("maximizado");
echo '<br>' . strtolower("mInImIzAdO");
echo '<br>' . ucfirst("primeira letra maiúscula");
echo '<br>' . ucwords("primeira letra de cada palavra maiúscula");
echo '<br>' . strlen("Calcula o comprimento da string contando acentos");
echo '<br>' . mb_strlen("Calcula o comprimento da string de acordo com encoding mais novos", "utf-8");
echo '<br>' . substr("Texto a ser cortado aqui.", 20, 4); // (string, índice início, quantidade de caracteres)
echo '<br>' . mb_substr("Texto a ser cortado áqui.", 20, 4); // (string, índice início, quantidade de caracteres)
echo '<br>' . str_replace("Isso", "Aquilo", "Substituir Isso");
