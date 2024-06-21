<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inserir Novo Aluno</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <h1>Inserir Novo Aluno</h1>
            <?php
            if (isset($_GET['erro'])) {
            echo '<div class="alert alert-danger">' .htmlspecialchars($_GET['erro']) . '</div>';
            }
            ?> 
            <form action="../model/processar_inserir_aluno.php" method="POST">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                    <div class="form-group">
                    <label for="dataNascimento">Data de Nascimento:</label>
                    <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
                </div>
                <div class="form-group">
                    <label for="curso">Curso:</label>
                    <select class="form-control" id="curso" name="curso" required>
                        <option value="ADS">ADS</option>
                        <option value="CD">CD</option>
                        <option value="GTI">GTI</option>
                        <option value="MKT">MKT</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="matricula">Matrícula:</label>
                    <input type="text" class="form-control" id="matricula" name="matricula" required>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" required>
                </div>
                <button type="submit" class="btn btn-primary">Inserir Aluno</button>
            </form>
        </div>
    </body>
</html>