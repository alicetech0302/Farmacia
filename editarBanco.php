<?php
require 'conexao.php';

$id_Remedio = $_POST['id_Remedio'] ?? null;
$remedio = $_POST['remedio'] ?? null;
$quantidade = $_POST['quantidade'] ?? null;
$preco = $_POST['preco'] ?? null;

if ($remedio && $quantidade && $preco) {
    $sql = $pdo->prepare("UPDATE remed SET remedio = :remedio , quantidade = :quantidade, preco = :preco WHERE id_Remedio = $id_Remedio");
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