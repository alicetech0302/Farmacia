<?php
require 'conexao.php';

$remedio = $_POST['remedio'] ?? null;
$quantidade = $_POST['quantidade'] ?? null;
$preco = $_POST['preco'] ?? null;

if ($remedio && $quantidade && $preco) {
    $sql = $pdo->prepare("INSERT INTO remed (remedio, quantidade, preco) VALUES (:remedio, :quantidade, :preco)");
    $sql->bindValue(':remedio', $remedio);
    $sql->bindValue(':quantidade', $quantidade);
    $sql->bindValue(':preco', $preco);

    if ($sql->execute()) {
        header("Location: cadastroRemedio.php");
    } else {
        echo "Error: " . $sql->errorInfo()[2];
    }
} else {
    echo "NULO";
}
?>