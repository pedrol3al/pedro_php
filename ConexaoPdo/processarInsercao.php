<?php
    require_once 'conexao.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $conexao = conectarBanco();

        $sql = "INSERT INTO cliente(nome, endereco, telefone, email) VALUES (:nome, :endereco, :telefone, :email)";

        $stmt=$conexao->prepare($sql);
        $stmt->bindParam(":nome",$_POST["nome"]);
        $stmt->bindParam(":endereco",$_POST["endereco"]);
        $stmt->bindParam(":telefone",$_POST["telefone"]);
        $stmt->bindParam(":email",$_POST["email"]);

        try{
            $stmt->execute();
            echo "Cliente cadastrado com sucesso!";
        } catch(PDOException $e) {
            error_log("Erro ao inserir cliente: ".$e->getMessage());
            echo "Erro ao cadastrar cliente.";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Menu com Quadrados</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin: 0;
    }

    .menu-container {   
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .square {
      width: 150px;
      height: 150px;
      background-color: #22468a;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      border-radius: 10px;
      transition: transform 0.2s;
      text-decoration: none;
    }

    .square:hover {
      background-color: #12738b;
      transform: scale(1.05);
      cursor: pointer;
    }
  </style>
</head>
<body>

<div class="container menu-container">
  <div class="row text-center">

  <div class="col-12 col-md-4 mb-3">
      <a href="http://localhost:8080/pedro_php/ConexaoPdo/pesquisarCliente.php"><div class="square" > Pesquisar Cliente </div></a>
    </div>

    <div class="col-12 col-md-4 mb-3">
     <a href="main.html"> <div class="square" > Retornar ao Menu </div></a>
    </div>

    <div class="col-12 col-md-4 mb-3">
        <a href="http://localhost:8080/pedro_php/ConexaoPdo/inserirCliente.php">   <div class="square" > Cadastrar Cliente </div></a>
    </div>

    <div class="col-12 col-md-4 mb-3">
        <a href="http://localhost:8080/pedro_php/ConexaoPdo/atualizarCliente.php">   <div class="square"> Atualizar Cliente </div></a>
    </div>

    <div class="col-12 col-md-4 mb-3">
        <a href="http://localhost:8080/pedro_php/ConexaoPdo/deletarCliente.php">  <div class="square"> Excluir Cliente </div></a>
    </div>

    <div class="col-12 col-md-4 mb-3">
        <a href="http://localhost:8080/pedro_php/ConexaoPdo/listarClientes.php">  <div class="square" > Listar Cliente </div></a>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



