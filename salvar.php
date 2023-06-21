<?php
include 'conexao.php';

$nome = $_POST['nome']; 
$datanascimento = $_POST['data'];

$sql = mysqli_query($conexao, "INSERT INTO usuario(nome, data_nascimento) VALUES ('$nome', '$datanascimento')");
/* MYSQLI QUERY- ele insere dados na tabela */

header('location: index.php');
?>
