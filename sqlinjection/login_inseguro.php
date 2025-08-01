<?php
    //configuração do banco de dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "empresa_teste";
    
    // Conexão usando MySQLi sem proteção contra SQL injection
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);
    
    //Verifica se há erro na conexão
    if($conexao->connect_error){
        die("Erro na conexão:". $conexao->connect_error);
    }
    //Captura os dados do formulario(nome de usuario)
    $nome = $_POST["nome"];

    //Execura a consulta SEM proteção contra SQL Injection
    $sql = "SELECT * FROM cliente_teste WHERE nome = '$nome'";

    $result = $conexao->query($sql);

    //Se Houver resultados, o login é considerado bem-sucedido
    if($result->num_rows > 0){
        header("Location:area_restrita.php");
        //Garante que o codigo pare aqui para evitar execução indevida
        exit();
    }else{
        echo "nome não encontrado";
    }
//Fecha conexão
$conexao->close();
?>
