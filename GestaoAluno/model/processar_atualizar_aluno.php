<?php
function getAlunoById($conn, $id) {
    try {
        $stmt = $conn->prepare("SELECT nome, dataNascimento, curso, matricula, cpf, email, endereco FROM aluno WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    } catch (PDOException $e) {
        echo "Erro ao recuperar aluno: " . $e->getMessage();
        return null;
    }
}
function updateAlunoByCpf($conn, $cpf, $nome, $dataNascimento, $curso, $matricula, $email, $endereco) {
    try {
        $sql = "UPDATE aluno SET Nome = :nome, DataNascimento = :dataNascimento, Curso = :curso, Matricula = :matricula, Email = :email, Endereco = :endereco WHERE CPF = :cpf";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':dataNascimento', $dataNascimento);
        $stmt->bindParam(':curso', $curso);
        $stmt->bindParam(':matricula', $matricula);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
    echo "Erro ao atualizar aluno: " . $e->getMessage();
    return false;
    }
}
function getAlunoByCpf($conn, $cpf) {
    try {
        $stmt = $conn->prepare("SELECT nome, dataNascimento, curso, matricula, cpf, email, endereco FROM aluno WHERE cpf = :cpf");
        $stmt->bindParam(':cpf', $cpf);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    } catch (PDOException $e) {
        echo "Erro ao recuperar aluno: " . $e->getMessage();
        return null;
    }
}
?>
