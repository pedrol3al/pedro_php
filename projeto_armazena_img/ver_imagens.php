<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ob_clean(); //LIMPAR QUALQUER SAÍDA INESPERADA

//iNCLUÍ A CONEXÃO COM O BANCO DE DADOS
require("conecta.php");
$conexao = conectadb();

//OBTEM O ID DA IMAGEM URL, GARANTINDO QUE SEJA UM NÚMERO INTEIRO
$id_imagem = isset($_GET['id'])? intval($_GET['id']):0;

//CRIA A CONSULTA PARA BUSCAR A IMAGEM NO BANCO DE DADOS
$querySelecionaPorCodigo = "SELECT imagem, tipo_imagem from tabela_imagens WHERE codigo = ?";

//USA prepared statement PARA MAIOR SEGURANÇA
$stmt = $conexao->prepare($querySelecionaPorCodigo);
$stmt->bind_param("i", $id_imagem);
$stmt->execute();
$resultado=$stmt->get_result();

//VERIFICA SE A IMAGEM EXISTE NO BANCO DE DADOS
if($resultado->num_rows > 0){
    $imagem = $resultado->fetch_object();

    //DEFINE O TIPO CORRETO DA IMAGEM(fallback PARA jpeg CASO ESTEJA VAZIO)
    $tipoImagem = !empty($imagem->tipo_imagem)? $imagem->tipo_imagem : "imagem/jpeg";
    header("Content-type: ".$tipoImagem);

    //EXIBE A IMAGEM ARMAZENADA NO BANCO DE DADOS
    echo $imagem->imagem;
}else{
    echo "Imagem não encontrada";
}

//Fecha a consulta
$stmt->close();
?>