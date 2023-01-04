<div class="titulo">Constantes</div>

<?php
/*
 * Convenções:
 * Utilizar nomes de constantes em MAIUSCULAS separadas por _
 * Exemplo: TAXA_DE_JUROS
*/

// Métodos de declarar uma constante: função define()
define('TAXA_DE_JUROS', 2.58); // (NOME_DA_CONSTANTE, valor)
define('TAXA_DE_JUROS_2', 2.8 + 1.2); // Aceita expressões e valores de outras variáveis
$variavel = 3.44;
define('TAXA_DE_JUROS_3', $variavel);

// Métodos de declarar uma constante: palavra reservada const
const NOVA_TAXA = 2.5;
// conts TAXA_MAIS_NOVA = $variavel // Não aceita valores de outras variáveis
// conts TAXA_MAIS_NOVA = 2.8 + 1.2 // Não aceita valores de expressões


// Para acessar uma constante, deve-se apenas informar o seu nome, sem o $
echo NOVA_TAXA;
echo '<br>';
echo TAXA_DE_JUROS;