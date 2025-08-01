<?php

//Estabelece conexão 
require_once "conexao.php";
$conexao = conectadb();

//Definição dos valores para inserção
$nome = "Pedro Gabriel Leal Pires";
$endereco = "Rua Chamego, 32";
$telefone = "(41) 6666-5555";
$email = "pedro.leal@teste2.com";
$id = "4";

$stmt = $conexao->prepare ("UPDATE cliente SET nome=?, endereco=?, telefone=?, email=? WHERE id_cliente =?");

$stmt-> bind_param("ssssi", $nome, $endereco, $telefone, $email, $id);

if($stmt-> execute()){

    echo "Cliente atualizado com sucesso";
}else{
    echo "Cliente não pode ser atualizado";
}

$stmt->close();
$conexao->close();
?>