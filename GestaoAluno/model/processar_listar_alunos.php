<?php
require_once "../config/conexao.php";
function getAllAlunos($conn) {
    try {
        $stmt = $conn->prepare("SELECT nome, DataNascimento, Curso, Matricula, CPF, Email, Endereco FROM aluno");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        echo "Erro ao recuperar alunos: " . $e->getMessage();
        return [];
    }
}
?>
