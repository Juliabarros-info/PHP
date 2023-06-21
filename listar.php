<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
    <?php
    include 'conexao.php';
    $listarSQL = mysqli_query($conexao, "SELECT * FROM usuario");
    ?>

    <table>
        <?php while($dados = mysqli_fetch_assoc($listarSQL)){ ?>
    
    <tr>
        <td><?php echo $dados['id']?></td>
        <td><?php echo $dados['nome']?></td>
        <td><?php echo $dados['data_nascimento']?></td>
        <td>
            <a href="deletar.php?id=<?php echo $dados['id'];?>"> Deletar</a>
        </td>
        </tr>
        <?php } ?>
        </table>
    </body>
</html>