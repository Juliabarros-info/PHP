<?php
include 'conexao.php';
/* ESSE [ID] VEM DA URL, LOGO É DIFERENTE DO 
ID DO BANCO */
$id = $_GET['id'];
if (isset($_GET['id'])) {
    $sql = mysqli_query($conexao, "DELETE FROM usuario WHERE id = {$id}");
    header('location: index.php');
    /* Se o id da URL for igual o id do banco, ele irá apagar os dados */
}
?>