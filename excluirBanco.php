<?php
require 'conexao.php';

$id_Remedio = $_POST['id_Remedio'] ?? null;

if ($id_Remedio) {
    $sql = $pdo->prepare("DELETE from prod WHERE id_Remedio = :id_Remedio");
    $sql->bindValue(':id_Remedio', $id_Remedio);

    if ($sql->execute()) {
        header("Location: cadastroRemedio.php");
    } else {
        echo "Error: " . $sql->errorInfo()[2];
    }
} else {
    echo "NULO";
}