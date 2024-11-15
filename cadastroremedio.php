<?php
$remedio = $_POST['remedio'] ?? null;
$quantidade = $_POST['quantidade'] ?? null;
$preco = $_POST['preco'] ?? null;

if(isset($_POST['ENVIAR'])){
    $remedio = $_POST['remedio'] ?? null;
    $quantidade = $_POST['quantidade'] ?? null;
    $preco = $_POST['preco'] ?? null;
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Farmacia</title>
    <script>
    function remedioCad() {
            alert('REMEDIO CADASTRADO COM SUCESSO!');
        }
        </script>
</head>

<body>
<li> MENU
<ul type='square'>
<li><a href="verRemedios.php">Lista de Remedios</a></li>
</ul>
    <main>
        <h1>Cadastro de Remedio</h1><br>

        <form action="cadastroRemedioBanco.php" method="post" onsubmit="remedioCad()">
            <label for="remedio">Nome do Remedio</label>
            <input type="text" name="Remedio"><br><br>
            <label for="quantidade">Quantidade</label>
            <input type="number" name="quantidade"><br><br>
            <label for="preco">Preço Unitário</label>
            <input type="number" name="preco" step="0.01"><br><br>
            <button type="submit" name="ENVIAR">CADASTRAR</button>
        </form><br>

    </main>
</body>

</html>