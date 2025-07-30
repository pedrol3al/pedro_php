<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Excluir Cliente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Reset e base */
    * {
      box-sizing: border-box;
    }

    body, html {
      height: 100%;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
    }

    /* Header fixo no topo */
    header {
      background-color: #22468a;
      color: white;
      padding: 15px 0;
      text-align: center;
      font-size: 24px;
      font-weight: bold;
    }

    address {
      background-color: #22468a;
      color: white;
      text-align: center;
      padding: 10px;
    }

    /* Formulário */
    h2 {
      text-align: center;
      margin-top: 30px;
      color: #22468a;
    }

    form {
      max-width: 400px;
      margin: 20px auto;
      display: flex;
      flex-direction: column;
      gap: 10px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
    }

    label {
      font-weight: bold;
    }

    input[type="number"] {
      padding: 8px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button[type="submit"] {
      padding: 10px;
      background-color: #22468a;
      color: white;
      border: none;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    button[type="submit"]:hover {
      background-color: #12738b;
      cursor: pointer;
    }

    /* Menu de botões */
    .menu-container {
      flex-grow: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
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
      margin: auto;
    }

    .square:hover {
      background-color: #12738b;
      transform: scale(1.05);
      cursor: pointer;
    }

    @media (max-width: 576px) {
      .square {
        width: 120px;
        height: 120px;
        font-size: 14px;
      }
    }
  </style>
</head>
<body>

  <header>Excluir Cliente</header>

  <h2>Excluir Cliente</h2>
  <form action="processarDelecao.php" method="POST">
    <label for="id">ID do Cliente:</label>
    <input type="number" id="id" name="id" required>
    <button type="submit">Excluir Cliente</button>
  </form>

  <div class="container menu-container">
    <div class="row text-center w-100">

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

  <address>
  Trabalho desenvolvido pelo aluno Pedro Gabriel | Aluno Técnico | Desenvolvimento de Sistemas
</address>

</body>
</html>
