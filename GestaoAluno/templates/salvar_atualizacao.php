<?php
require_once "../config/conexao.php";
require_once "processar_atualizar_aluno.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $dataNascimento = $_POST['dataNascimento'];
    $curso = $_POST['curso'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    if ($conn) {
        $result = updateAlunoByCpf($conn, $cpf, $nome, $dataNascimento, $curso, $matricula, $email, $endereco);
    if ($result) {
        header("Location: ../templates/index.php");
    } else {
        echo "Erro ao atualizar aluno.";
    }
    } else {
        echo "Erro na conexão com o banco de dados.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>