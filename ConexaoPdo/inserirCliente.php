<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Cliente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin: 0;
      scrollbar-width: none;
      background-color: #f8f9fa;
    }

    h2 {
      text-align: center;
      margin-top: 20px;
      color: #22468a;
    }

    .form-container {
      max-width: 600px;
      margin: 30px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .menu-container {
      height: 100%;
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

  <h2>Cadastro de Cliente</h2>

  <div class="form-container">
    <form action="processarInsercao.php" method="POST">
      <div class="mb-2">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
      </div>

      <div class="mb-2">
        <label for="endereco" class="form-label">Endereço:</label>
        <input type="text" class="form-control" id="endereco" name="endereco" required>
      </div>

      <div class="mb-2">
        <label for="telefone" class="form-label">Telefone:</label>
        <input type="text" class="form-control" id="telefone" name="telefone" required>
      </div>

      <div class="mb-2">
        <label for="email" class="form-label">E-mail:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <button type="submit" class="btn btn-primary w-100 mt-3">Cadastrar Cliente</button>
    </form>
  </div>

  <div class="container menu-container">
    <div class="row text-center">

      <div class="col-12 col-md-4 mb-3">
        <a href="http://localhost:8080/pedro_php/ConexaoPdo/pesquisarCliente.php">
          <div class="square">Pesquisar Cliente</div>
        </a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="main.html">
          <div class="square">Retornar ao Menu</div>
        </a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="http://localhost:8080/pedro_php/ConexaoPdo/inserirCliente.php">
          <div class="square">Cadastrar Cliente</div>
        </a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="http://localhost:8080/pedro_php/ConexaoPdo/atualizarCliente.php">
          <div class="square">Atualizar Cliente</div>
        </a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="http://localhost:8080/pedro_php/ConexaoPdo/deletarCliente.php">
          <div class="square">Excluir Cliente</div>
        </a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="http://localhost:8080/pedro_php/ConexaoPdo/listarClientes.php">
          <div class="square">Listar Cliente</div>
        </a>
      </div>

    </div>
  </div>

</body>
</html>
