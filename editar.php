<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <script>
    function remedioEditado() {
            alert('REMEDIO EDITADO COM SUCESSO!');
        }
        </script>
</head>

<body>
    <h1>Editar Remedio</h1>
    <?php
    require 'conexao.php';
    $id_Remedio = $_REQUEST["id_Remedio"];
    $dados = [];
    $sql = $pdo->prepare("SELECT * FROM remed WHERE id_Remedio = :id_Remedio");
    $sql->bindValue(":id_Remedio", $id_Remedio);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $dados = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location:cadastroRemedio.php");
        exit;
    }
    ?>
    <form action="editarBanco.php" method="post" onsubmit="remedioEditado()">
        <input type="hidden" name="id_Remedio" id="id_Remedio" value="<?= $dados['id_Remedio']; ?>">
        <label for="Remedio">
            Nome do Remedio <input type="text" name="Remedio" value="<?= $dados['remedio']; ?>">
        </label><br><br>
        <label for="quantidade">
            Quantidade <input type="number" name="quantidade" value="<?= $dados['quantidade']; ?>">
        </label><br><br>
        <label for="preco">
            Preço <input type="number" name="preco" step="0.01" value="<?= $dados['preco']; ?>">
        </label><br><br>
        <button type="submit">SALVAR</button>
    </form>
</body>

</html>