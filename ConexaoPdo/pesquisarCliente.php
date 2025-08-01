  <?php
  require_once 'conexao.php';

  $conexao = conectarBanco();

  $busca = $_GET['busca'] ?? '';

  if (!$busca) {
      // Exibe formulário estilizado se nenhum termo de busca foi enviado
      ?>
      <!DOCTYPE html>
      <html lang="pt-br">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Pesquisar Cliente</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
          <style>
              .form-container {
                  height: 100vh;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  background-color: #f2f2f2;
              }

              .form-box {
                  background: white;
                  padding: 30px;
                  border-radius: 12px;
                  box-shadow: 0 0 15px rgba(0,0,0,0.1);
                  max-width: 400px;
                  width: 100%;
              }
          </style>
      </head>
      <body>
          <div class="form-container">
              <form action="pesquisarCliente.php" method="GET" class="form-box">
                  <div class="mb-3 text-center">
                      <h4>Pesquisar Cliente</h4>
                  </div>
                  <div class="mb-3">
                      <label for="busca" class="form-label">Digite o ID ou Nome:</label>
                      <input type="text" class="form-control" id="busca" name="busca" required>
                  </div>
                  <div class="d-grid">
                      <button type="submit" class="btn btn-primary">Pesquisar</button>
                  </div>
              </form>
          </div>
      </body>
      </html>
      <?php
      exit;
  }

  if (is_numeric($busca)) {
      $stmt = $conexao->prepare("SELECT id_cliente, nome, endereco, telefone, email FROM cliente WHERE id_cliente = :id");
      $stmt->bindParam(":id", $busca, PDO::PARAM_INT);
  } else {
      $stmt = $conexao->prepare("SELECT id_cliente, nome, endereco, telefone, email FROM cliente WHERE nome LIKE :nome");
      $buscaNome = "%$busca%";
      $stmt->bindParam(":nome", $buscaNome, PDO::PARAM_STR);
  }

  $stmt->execute();
  $clientes = $stmt->fetchAll();

  if (!$clientes) {
      die("Erro: Nenhum cliente encontrado.");
  }
  ?>

  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado da Pesquisa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body, html {
        height: 100%;
        margin: 0;
      }

    a{
      text-decoration: none;
    }

      header {
      background-color: #22468a;
      width: 100%;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      color: antiquewhite;
      height: 100px;
    }

      .menu-container {   
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px 0;
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
        margin: 20px auto;
        border-collapse: collapse;
      }

      table, th, td {
        border: 1px solid #333;
      }

      th, td {
        padding: 10px;
        text-align: center;
      }

      address {
      background-color:  #22468a;
      color: white;
      text-align: center;
      padding: 10px;
    }
    </style>
  </head>
  <body>

  
<header>
  <h1> Resultado:  </h1>
</header>

  <!-- Tabela de resultados -->
  <table>
      <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Endereço</th>
          <th>Telefone</th>
          <th>E-mail</th>
          <th>Ação</th>
      </tr>
      <?php foreach ($clientes as $cliente): ?>
      <tr>
          <td><?= htmlspecialchars($cliente['id_cliente']) ?></td>
          <td><?= htmlspecialchars($cliente['nome']) ?></td>
          <td><?= htmlspecialchars($cliente['endereco']) ?></td>
          <td><?= htmlspecialchars($cliente['telefone']) ?></td>
          <td><?= htmlspecialchars($cliente['email']) ?></td>
          <td><a href="atualizarCliente.php?id=<?= $cliente['id_cliente'] ?>">Editar</a></td>
      </tr>
      <?php endforeach; ?>
  </table>

  <!-- Menu com quadrados -->
  <div class="container menu-container">
    <div class="row text-center">
      <div class="col-12 col-md-4 mb-3">
        <a href="pesquisarCliente.php"><div class="square">Pesquisar Cliente</div></a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="main.html"><div class="square">Retornar ao Menu</div></a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="inserirCliente.php"><div class="square">Cadastrar Cliente</div></a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="atualizarCliente.php"><div class="square">Atualizar Cliente</div></a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="deletarCliente.php"><div class="square">Excluir Cliente</div></a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <a href="listarClientes.php"><div class="square">Listar Cliente</div></a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


  <address>
  Trabalho desenvolvido pelo aluno Pedro Gabriel | Aluno Técnico | Desenvolvimento de Sistemas
</address>


  </body>
  </html>
