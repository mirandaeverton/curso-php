<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
/*
 * O $_POST também é um array, mas com os elementos de uma reequisição HTTP POST
 * As chaves dos elementos serão o conteúdo da propriedade name de cada input do formulário,
 * enquanto que os valores serão o conteúdo da propriedade value.
*/

print_r($_GET);
echo '<br>';
print_r($_POST);