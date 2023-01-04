<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <?php include './rotas/controle.php'?>
                <?php include './rotas/variaveis.php'?>
                <?php include './rotas/tipos.php'?>
                <?php include './rotas/basico.php'?>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?=date('Y');?>
    </footer>
</body>
</html>