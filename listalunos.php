
<?php
    include './lib/bancoDeDados.php';
 
    $alunos = listaAlunos();
    $nome = htmlspecialchars($_POST['nome']);
    $idade = htmlspecialchars($_POST['idade']);
    $sexo = htmlspecialchars($_POST['sexo']);
    
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
    <main class="list-students">
        <table>
            <h1>Alunos do Curso de Programado Web</h1>
            <tr>
                <th class="color">Nome</th>
                <th class="color">Idade</th>
                <th class="color">Sexo</th>
            </tr>
            <?php  
                for($i = 0; $i < count($alunos); $i++) {
                echo '<tr>';
                echo '<td>' .  $alunos[$i]['nome'] . '</td>';
                echo '<td>' .  $alunos[$i]['idade'] . '</td>';
                
                $sSexo = $alunos[$i]['sexo'];
                $sexo = '';

                if($sSexo == 'feminino') {
                    $sexo = 'Feminino';
                }else if ($sexo = 'masculino') {
                    $sexo = 'Masculino';
                }

                echo '<td>' . $sexo  . '</td>';
                echo '</tr>';
                }


            ?>
        </table>
    </main>
</body>
</html>