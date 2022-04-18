<?php
    include './lib/bancoDeDados.php';

    $alunos = listaAlunos();        
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
        <a href="./index.php">Home</a>
        <a href="./listalunos.php">Alunos</a>
        <a href="./cadastrarAluno.php">Cadastrar</a>
    </header>
    <main class="register">
    
        <form action="listalunos.php" method="post">
            <fieldset>
                <legend>Cadastro de Alunos</legend>
                <label for="name-registration">
                    <input type="text" id="name-registration" name="name" minlength="10" maxlength="35" title="Campo Obrigarorio" placeholder="Digite seu nome completo" required >
                </label>

                <label for="age-registration">
                    <input type="number" name="age" id="age-registration" min="0" max="80" title="Campo obrigatorio" placeholder="Digite sua idade" required>
                </label>

                <select name="sex" id="sex-registration" title="Campo Obrigatorio">
                    <option value="escolha">Escolha seu Gênero</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="x">Outros</option>
                </select>
                
                <button type="submit">Enviar</button>
            </fieldset>
        </form>

        
    </main>
</body>
</html>