<div class="titulo">Arrays Constantes</div>

<?php
/*
 * No caso de arrays constantes, não é possível:
 *  1. Alterar o valor de qualquer elemento
 *  2. Alterar o valor do array
 *  3. Acrescentar ou remover quaisquer elementos
 * Em resumo, tanto o array quanto seus elementos são constantes.
*/
const FRUTAS = array('Laranja', 'Abacaxi');
// FRUTAS = 'teste';
// FRUTAS[0] = 'banana';
// FRUTAS[] = 'banana';
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
// CARROS["BMW"] = '325i';
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
// CIDADES[0] = 'Rio de Janeiro';
echo '<br>' . CIDADES[1];
