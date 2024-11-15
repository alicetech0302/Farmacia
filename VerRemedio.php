<?php
    require 'conexao.php';

    $lista = [];
    $sql = $pdo->query('SELECT*FROM prod');
    $lista = [];
    if($sql->rowCount()>0){
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Remedio</title>
</head>
<body>
<li> MENU
<ul type='square'>
<li><a href="cadastroProduto.php">Cadastrar Remedio</a></li>
</ul>
    <h1>Lista de Remedio</h1>
    <table border="1px">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>QUANTIDADE</th>
        <th>PREÇO UNITÁRIO</th>
        <th>VALIDADE</th>
        <th>EDITAR</th>
        <th>EXCLUIR</th>
    </tr>
<?php foreach($lista as $a): ?>
        <tr>
            <td> <?php echo $a['id_Remedio']; ?> </td>
            <td> <?=$a['remedio']; ?> </td>
            <td> <?php echo $a['quantidade']; ?> </td>
            <td> <?php echo $a['preco']; ?> </td>
            <td> <a href="editar.php?id_Remedio= <?=$a['id_Remedio'];?>">[EDITAR]</a></td>
            <td> <a href="excluir.php?id_Remedio= <?=$a['id_Remedio'];?>">[EXCLUIR]</a></td>
        </tr>
        <?php endforeach; ?>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>