
<?php
    require 'conexao.php';

    $conexao=conectarBanco();
    $stmt=$conexao->prepare("SELECT * FROM cliente");
    $stmt->execute();
    $clientes=$stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
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
      scrollbar-width: none;
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

    table {
  width: 90%;
  margin: 0 auto;
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid #333;
}

th, td {
  padding: 10px;
  text-align: center;
}

  </style>
</head>
<body>
    <h2>Lista de Clientes</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>E-mail</th>
        </tr>
        <?php foreach($clientes as $cliente): ?>
        <tr>
            <td><?=htmlspecialchars($cliente["id_cliente"]) ?></td>
            <td><?=htmlspecialchars($cliente["nome"]) ?></td>
            <td><?=htmlspecialchars($cliente["endereco"]) ?></td>
            <td><?=htmlspecialchars($cliente["telefone"]) ?></td>
            <td><?=htmlspecialchars($cliente["email"]) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <div class="container menu-container">
  <div class="row text-center">

  <div class="col-12 col-md-4 mb-1">
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
</body>
</html>