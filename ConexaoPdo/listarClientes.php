<?php
    require 'conexao.php';

    $conexao = conectarBanco();
    $stmt = $conexao->prepare("SELECT * FROM cliente");
    $stmt->execute();
    $clientes = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lista de clientes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin: 0;
      scrollbar-width: none;
    }

    header {
      background-color: #22468a;
      width: 100%;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      color: antiquewhite;
      height: 70px;
    }

    .menu-container {
      min-height: 74%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      margin-bottom: 0;
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
      margin: 30px auto;
      border-collapse: collapse;
    }

    table, th, td {
      border: 1px solid #333;
    }

    th, td {
      padding: 10px;
      text-align: center;
    }

      a{
      text-decoration: none;
    }

    address {
      background-color: #22468a;
      color: white;
      text-align: center;
      padding: 10px;
      font-style: normal;
      margin-top: 10px; 
    }
  </style>
</head>
<body>

  <header>Lista de Clientes</header>

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
      <td><?= htmlspecialchars($cliente["id_cliente"]) ?></td>
      <td><?= htmlspecialchars($cliente["nome"]) ?></td>
      <td><?= htmlspecialchars($cliente["endereco"]) ?></td>
      <td><?= htmlspecialchars($cliente["telefone"]) ?></td>
      <td><?= htmlspecialchars($cliente["email"]) ?></td>
    </tr>
    <?php endforeach; ?>
  </table>

  <div class="container menu-container">
    <div class="row text-center">

      <div class="col-12 col-md-4 mb-1">
        <a href="http://localhost:8080/pedro_php/ConexaoPdo/pesquisarCliente.php"><div class="square">Pesquisar Cliente</div></a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="main.html"><div class="square">Retornar ao Menu</div></a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="http://localhost:8080/pedro_php/ConexaoPdo/inserirCliente.php"><div class="square">Cadastrar Cliente</div></a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="http://localhost:8080/pedro_php/ConexaoPdo/atualizarCliente.php"><div class="square">Atualizar Cliente</div></a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="http://localhost:8080/pedro_php/ConexaoPdo/deletarCliente.php"><div class="square">Excluir Cliente</div></a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="http://localhost:8080/pedro_php/ConexaoPdo/listarClientes.php"><div class="square">Listar Cliente</div></a>
      </div>

    </div>
  </div>


  <address>
    Trabalho desenvolvido pelo aluno Pedro Gabriel | Aluno Técnico | Desenvolvimento de Sistemas
  </address>

</body>
</html>
