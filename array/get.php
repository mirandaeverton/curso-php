<div class="titulo">$_GET</div>

<?php
/*
 * $_GET é um array com todos os parâmetros da requisição GET.
 * Os parâmetros de uma requisição GET vem informados na URL, separados
 * do caminho por um ? e são formados por chave=valor e unidos por &.
 * Ex.: http://127.0.0.1/exercicio.php?dir=array&file=get
*/
echo $_GET, '<br>';
print_r($_GET);