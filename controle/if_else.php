<div class="titulo">If Else</div>

<?php
// Forma mais simples

if(true)
    echo "É verdade", "<br>";

/*
 * Observação importante:
 * O if statement não precisa ser acompanhado de um bloco de instruções.
 * Ele sempre vai executar a instrução logo a seguir, seja ela um bloco ou uma linha.
 * Caso não esteja associado a um bloco, ele vai executar somente a próxima linha de
 * código.
*/

// Versão com else
if(true) {
    echo "É mesmo verdade", "<br>";
} else {
    echo "Não é verdade", "<br>";
}

// Versão com else if
if(false) {
    echo "Passo A", "<br>";
} else if (true) {
    echo "Passo B", "<br>";
} elseif (true) {
    echo "Passo C", "<br>";
} else { // o else não é obrigatório após uma sequência de if elses.
    echo "último passo.";
}

/*
 * Observação importante:
 * Apesar de poder haver múltiplos if else, o sistema só vai executar o primeiro
 * que der true. Os demais serão ignorados.
*/