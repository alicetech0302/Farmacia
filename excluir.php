<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar</title>
    <script>
    function remedioDel() {
            alert('REMEDIO DELETADO COM SUCESSO!');
        }
        </script>
</head>
<body>
    <h1>Deletar Remedio</h1>
    <?php 
        require 'conexao.php';
        $id_Remedio = $_REQUEST["id_Remedio"];
        $dados = [];
       $sql = $pdo->prepare("SELECT * FROM prod WHERE id_Remedio = :id_Remedio");
       $sql->bindValue(":id_Remedio", $id_Remedio);
       $sql->execute();

       if($sql->rowCount() > 0){
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
       }else{
            header("Location:cadastroRemedio.php");
            exit;
       }
       

    ?>
    <h2>Deseja excluir o remedio abaixo?</h2>
    
    <form action="excluirBanco.php" method="post" onsubmit="remedioDel()">
        <input  type="hidden" name="id_Reemedio" id="id_Remedio" value="<?=$dados['id_Remedio']; ?>">
        <label for="remedio">
            Nome do Remedio <input type="text" name="remedio" value="<?=$dados['remedio']; ?>">
        </label>

        <button type="submit">EXCLUIR</button>


    </form><br><br><br>

    <a href="cadastroRemedio.php">CANCELAR</a>

</body>
</html>