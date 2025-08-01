<?php
//Inclui o arquivo de conexão com o banco ded daos
require_once "conexao.php";

//Estabelece conexão 
$conexao = conectadb();

//Define a conslta SQL para buscar clientes
$sql = "SELECT id_cliente, nome, email FROM cliente";

//Executa a consulta com o banco
$result = $conexao->query($sql);

//Verifica se há resultados na consulta
if ($result->num_rows > 0){
    //Itera sobre os resultados e exibe os dados
        while ($linha = $result->fetch_assoc()){
            echo "ID:" .$linha["id_cliente"]."- Nome: ".$linha["nome"]."- Email: ".$linha["email"]."<br/>";
        }    
    }else{
        echo "Nenhum resultado encontrado.";
    }
    
    //Fecha a conhexão com o banco de dados
    $conexao->close();
    

?>