<?php
require_once 'conexao.php';
$conexao = conectarBanco();

// Obtendo o ID via GET
$idCliente = $_GET['id'] ?? null;
$cliente = null;
$msgErro = "";

// Função local para buscar cliente por ID
function buscarClientePorId($idCliente, $conexao) {
    $stmt = $conexao->prepare("SELECT id_cliente,nome,endereco,telefone,email FROM cliente WHERE id_cliente=:id");
    $stmt->bindParam(":id", $idCliente, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
}

// Se um ID foi enviado, busca o cliente no banco
if ($idCliente && is_numeric($idCliente)) {
    $cliente = buscarClientePorId($idCliente, $conexao);
    if (!$cliente) {
        $msgErro = "Erro: Cliente não encontrado.";
    }
} else {
    $msgErro = "Digite o ID do cliente para buscar os dados.";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Atualizar Cliente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body, html {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
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

    main {
      flex: 1;
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
      border-radius: 10px;
      transition: transform 0.2s;
      text-decoration: none;
    }

    .square:hover {
      background-color: #12738b;
      transform: scale(1.05);
      cursor: pointer;
    }

    .menu-container {
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      margin-top: 50px;
      margin-bottom: 50px;
    }

    form input {
      display: block;
      margin-bottom: 10px;
      width: 100%;
      max-width: 400px;
      padding: 8px;
    }

    form label {
      font-weight: bold;
    }

    address {
      background-color:  #22468a;
      color: white;
      text-align: center;
      padding: 10px;
    }
  </style>
  <script>
    function habilitarEdicao(campo) {
      document.getElementById(campo).removeAttribute("readonly");
    }
  </script>
</head>
<body>

<header>
  <h1>Atualizar Cliente</h1>
</header>

<main class="container">

  <?php if ($msgErro): ?>
    <p style="color:red;"><?= htmlspecialchars($msgErro) ?></p>
    <form action="atualizarCliente.php" method="GET">
      <label for="id">ID do cliente:</label>
      <input type="number" id="id" name="id" required>
      <button class="btn btn-primary" type="submit">Buscar</button>
    </form>
  <?php else: ?>
    <form action="processarAtualizacao.php" method="POST">
      <input type="hidden" name="id_cliente" value="<?= htmlspecialchars($cliente['id_cliente']) ?>">

      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($cliente['nome']) ?>" readonly onclick="habilitarEdicao('nome')">

      <label for="endereco">Endereço:</label>
      <input type="text" id="endereco" name="endereco" value="<?= htmlspecialchars($cliente['endereco']) ?>" readonly onclick="habilitarEdicao('endereco')">

      <label for="telefone">Telefone:</label>
      <input type="text" id="telefone" name="telefone" value="<?= htmlspecialchars($cliente['telefone']) ?>" readonly onclick="habilitarEdicao('telefone')">

      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" value="<?= htmlspecialchars($cliente['email']) ?>" readonly onclick="habilitarEdicao('email')">

      <button class="btn btn-success mt-3" type="submit">Atualizar Cliente</button>
    </form>
  <?php endif; ?>

  <div class="menu-container row text-center justify-content-center">
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

</main>

<address>
  Trabalho desenvolvido pelo aluno Pedro Gabriel | Aluno Técnico | Desenvolvimento de Sistemas
</address>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
