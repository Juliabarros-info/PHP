<?php

$servidor = "localhost" ;
$usuario = "root" ;
$senha = "";
$banco_de_dados = "salvar";

$conexao =  mysqli_connect($servidor, $usuario, $senha, $banco_de_dados);
/* MYSQLI CONNECT - ele conecta ao banco */

/* if(!$conexao){
    echo "Não conectou ao banco";
}else{
    echo "Conectou ao banco!";
}
 */
?>