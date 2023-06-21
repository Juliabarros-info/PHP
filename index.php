<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>
<body>
    <form action="salvar.php" method="post"> <br>
        Nome <input type="text" name="nome" id=""> <br>
        Data de Nascimento <input type="date" name="data" id=""> <br>

        <input type="submit" name="" value="salvar">

    </form>
    <?php
        include 'listar.php';
    ?>
</body>
</html>