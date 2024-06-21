<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atualizar Aluno</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <?php
            require_once "../config/conexao.php";
            require_once "../model/processar_atualizar_aluno.php";
            if (isset($_GET['cpf'])) {
                $cpf = $_GET['cpf'];
                $aluno = getAlunoByCpf($conn, $cpf);
                if ($aluno) {
            ?>
            <h2 class="mb-4">Atualizar Aluno</h2>
            <form method="post" action="../model/salvar_atualizacao.php">
                <input type="hidden" name="cpf" value="<?php echo htmlspecialchars($cpf); ?>">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo htmlspecialchars($aluno['nome']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="dataNascimento">Data de Nascimento</label>
                    <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" value="<?php echo htmlspecialchars($aluno['dataNascimento']);?>" required>
                </div>
                <div class="form-group">
                    <label for="curso">Curso</label>
                    <input type="text" class="form-control" id="curso" name="curso" value="<?php echo htmlspecialchars($aluno['curso']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="matricula">Matrícula</label>
                    <input type="text" class="form-control" id="matricula" name="matricula" value="<?php echo htmlspecialchars($aluno['matricula']); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo htmlspecialchars($aluno['cpf']); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($aluno['email']); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo htmlspecialchars($aluno['endereco']); ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Atualizar</button> <a href="index.php" class="btn btn-primary">Voltar para Home</a>
            </form>
            <?php
            } else {
            echo "<div class='alert alert-danger'>Aluno não encontrado.</div>";
            }
            } else {
            echo "<div class='alert alert-warning'>CPF do aluno não especificado.</div>";
            }
            ?>
        </div>
    </body>
</html>
