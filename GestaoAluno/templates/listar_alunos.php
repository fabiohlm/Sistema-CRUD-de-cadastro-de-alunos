<?php
require_once "../model/processar_listar_alunos.php";
$alunos = getAllAlunos($conn);
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Lista de Alunos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($alunos)) { ?>
                    <?php foreach ($alunos as $aluno) { ?>
                    <tr>
                    <td><?php echo htmlspecialchars($aluno['nome']); ?></td>
                    <td><?php echo htmlspecialchars($aluno['DataNascimento']);
                    ?></td>
                    <td><?php echo htmlspecialchars($aluno['Curso']); ?></td>
                    <td><?php echo htmlspecialchars($aluno['Matricula']); ?></td>
                    <td><?php echo htmlspecialchars($aluno['CPF']); ?></td>
                    <td><?php echo htmlspecialchars($aluno['Email']); ?></td>
                    <td><?php echo htmlspecialchars($aluno['Endereco']); ?></td>
                    </tr>
                    <?php } ?>
                    <?php }else { ?>
                    <tr>
                    <td colspan="7" class="text-center">Nenhum aluno encontrado</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>