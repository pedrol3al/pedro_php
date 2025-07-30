<?php
require 'conexao.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $conexao = conectarBanco();

    $id=filter_var($_POST["id_cliente"], FILTER_SANITIZE_NUMBER_INT);
    $nome=htmlspecialchars(trim($_POST["nome"]));
    $endereco=htmlspecialchars(trim($_POST["endereco"]));
    $telefone=htmlspecialchars(trim($_POST["telefone"]));
    $email=filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);

    if(!$id || !$email){
        die("Erro: ID inválido ou e-mail incorreto.");
    }

    $sql="UPDATE cliente SET nome=:nome, endereco=:endereco, telefone=:telefone, email=:email WHERE id_cliente=:id";

    $stmt=$conexao->prepare($sql);
    $stmt->bindParam(":id",$id,PDO::PARAM_INT);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":endereco", $endereco);
    $stmt->bindParam(":telefone", $telefone);
    $stmt->bindParam(":email", $email);

    try{
        $stmt->execute();
        echo "Cliente atualizado com sucesso!";
    } catch(PDOException $e){
        error_log("Erro ao atualizar cliente.".$e->getMessage());
        echo "Erro ao atualizar registro.";
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
     <a href="main.html"> <div class="square" > Retornar ao Menu </div></a>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



