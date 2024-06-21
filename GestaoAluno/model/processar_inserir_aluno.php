<?php
require_once "../config/conexao.php";
require_once "validar.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $dataNascimento = $_POST['dataNascimento'];
    $curso = $_POST['curso'];
    $matricula = $_POST['matricula'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    if (cpfExiste($cpf, $conn)) {
        $mensagemErro = "O CPF já está cadastrado.";
    } elseif (matriculaExiste($matricula, $conn)) {
        $mensagemErro = "A matrícula já está cadastrada.";
    } else {
        try {
        $stmt = $conn->prepare("INSERT INTO aluno (Nome, DataNascimento, Curso, Matricula, CPF, Email, Endereco) VALUES (:nome, :dataNascimento, :curso, :matricula, :cpf, :email, :endereco)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':dataNascimento', $dataNascimento);
        $stmt->bindParam(':curso', $curso);
        $stmt->bindParam(':matricula', $matricula);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->execute();
        header("Location: ../templates/index.php");
        exit(); 
        } catch(PDOException $e) {
            $mensagemErro = "Erro ao inserir aluno: " . $e->getMessage();
        }
    }
    if (isset($mensagemErro)) {
        header("Location: ../templates/inserir_aluno.php?erro=" . urlencode($mensagemErro));
        exit();
    }
}
?>
