<?php
require_once '../config/conexao.php';
$cpf = $_GET['cpf'];
if (isset($cpf)){
    try {
        $sql = "DELETE FROM aluno WHERE CPF = :cpf";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':cpf', $cpf);
        if ($stmt->execute()) {
        header("Location: ../templates/deletar_aluno.php");
        } else {
        echo "<script>alert('Erro ao deletar aluno.');</script>";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    } 
}
else {
    echo "<script>alert('CPF não fornecido.');</script>";
}
?>