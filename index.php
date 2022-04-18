
<?php
    include './lib/bancoDeDados.php';

    $alunos = listaAlunos();
    $aluno = $alunos[3]['nome'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Alunos</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <header>
        <a href="/">Home</a>
        <a href="./listalunos.php">Alunos</a>
        <a href="./cadastrarAluno.php">Cadastrar</a>
    </header>
    <main class="name">
        
        <p>Olá, </p>
        <p>
            <?php
                    echo  '<p>'. $aluno .'</p>';
            ?>
        </p>
    </main>
</body>
</html>