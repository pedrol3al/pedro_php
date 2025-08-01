<?php
require_once "conexao.php";

$conexao = conectadb();

$id = "4";

$stmt = $conexao->prepare ("DELETE FROM cliente  WHERE id_cliente =?");

$stmt-> bind_param("i", $id);

if($stmt-> execute()){

    echo "Cliente excluido com sucesso";
}else{
    echo "Cliente não pode ser excluido";
}

$stmt->close();
$conexao->close();

?>