<?php
// Inclui o arquivo de conexão e o arquivo de funções
require_once "../model/processar_listar_alunos.php";
//incluir o arquivo de conexao
require_once "../config/conexao.php";
// Recupera todos os alunos usando a função
$alunos = getAllAlunos($conn);
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Atualizar Alunos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1 class="mt-4 mb-4">Lista de Alunos</h1>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>Curso</th>
                        <th>Matrícula</th>
                        <th>CPF</th>
                        <th>Email</th>
                        <th>Endereço</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($alunos)) { ?>
                    <?php foreach ($alunos as $aluno) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($aluno['nome']); ?></td>
                        <td><?php echo htmlspecialchars($aluno['DataNascimento']);?></td>
                        <td><?php echo htmlspecialchars($aluno['Curso']); ?></td>
                        <td><?php echo htmlspecialchars($aluno['Matricula']);?></td>
                        <td><?php echo htmlspecialchars($aluno['CPF']); ?></td>
                        <td><?php echo htmlspecialchars($aluno['Email']); ?></td>
                        <td><?php echo htmlspecialchars($aluno['Endereco']); ?></td>
                        <td><a href="atualizarPorId_aluno.php?cpf=<?php echo htmlspecialchars($aluno['CPF']); ?>">Editar</a></td>
                    </tr>
                    <?php } ?>
                    <?php }
                    else { ?>
                    <tr>
                    <td colspan="8" class="text-center">Nenhum aluno encontrado</td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-success">Voltar para a Home</a>
        </div>
    </body>
</html>