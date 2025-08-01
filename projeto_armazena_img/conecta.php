<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

/*

*função para conectar ao banco de dados
*Retorna um objeto de conexão MySQLi ou interrompe o script em caso de erro

*/

function conectadb(){
    //configuração do banco de dados
    $endereco = "localhost"; //endereço do servidor mysql
    $usuario = "root";  //nome do usuario do banco de dados
    $senha = "";    //senha do banco de dados
    $banco = "armazena_imagem"; //nome do banco de dados
    
    try{
    //Criação da conexão
    $con = new mysqli($endereco, $usuario, $senha, $banco);

    //Definição do conjunto de caracteres para evitar problemas de acentuação
    $con->set_charset("utf8mb4");
    return $con;
    }catch(Exception $e){
        //exibe uma mensagem de erro e encerra o script
        die("Erro na conexão: ".$e->getMessage());
    }
}
?>