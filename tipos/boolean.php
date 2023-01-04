<div class="titulo">Booleano</div>

<?php
echo true; //imprime 1
echo false; // imprime nada

// Conversões
echo '<br>', var_dump((bool) 1); // qualquer número positivo ou negativo resolve pra true
echo "<br>", var_dump((bool) 0.0); // zero sempre resolve pra false
echo "<br>", var_dump((bool) ""); // string vazia resolve pra false
echo "<br>", var_dump((bool) "0"); // string com somente 1 zero resolve pra false
echo "<br>", var_dump((bool) " "); // string resolve pra true
echo "<br>", !!"0"; // pode-se negar duplamente um valor para converter para true ou false