<?php
//Inclui o arquivo de conexão com o banco de dados
require_once "conexao.php";

//Estabelece conexão 
$conexao = conectadb();

//Definição dos valores para inserção
$nome = "Pedro Gabriel Leal Costa";
$endereco = "Rua Bangomalango, 32";
$telefone = "(41) 5555-5555";
$email = "pedro.leal@teste.com";

$stmt = $conexao->prepare ("INSERT INTO cliente(nome,telefone,endereco,email) VALUES(?,?,?,?)");       

//Associa os parâmetros aos valores da consulta
$stmt->bind_param("ssss", $nome, $endereco, $telefone, $email);

//Executa a inserção 
if($stmt->execute()){
    echo "Cliente adicionado com sucesso!";
}else{
    echo "Erro ao adicionar cliente:".$stmt->error;
}

//Fecha a consulta e a conexão com o banco de dados
$stmt->close();
$conexao->close();

?>