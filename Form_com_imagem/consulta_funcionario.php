<?php

//Coenxão com o banco de dados
$host = 'localhost';
$dbname = 'bd_imagens';
$username = 'root';
$password = '';

try {
    //CONEXAO COM BANCO DE DADOS USANDO PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //DEFINE QUE ERROS VAO LANCAR EXCECOES

    //Recupera todos os funcionarios do banco de dados
    $sql = "SELECT id,nome FROM funcionarios";
    $stmt = $pdo->prepare($sql); //Prepara a instrução sql para a execução
    $stmt->execute(); //Executa a instrução sql
    $funcionarios = $stmt->fetchAll(PDO::FETCH_ASSOC); //Busca todos os resultados como uma matriz associativa

    //Verifica se foi solicitado a exclusão de um funcionario
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['excluir_id'])) {
        $excluir_id = $_POST['excluir_id'];
        $sql_excluir = "DELETE FROM funcionarios where id = :id";
        $stmt_excluir = $pdo->prepare($sql_excluir);
        $stmt_excluir->bindParam(':id', $excluir_id, PDO::PARAM_INT);
        $stmt_excluir->execute();

        //Redireciona para evitar envio do formulario
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();

    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage(); //Exibe a mensagem de erro se a conexão ou a consulta falhar
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de funcioanrios</title>
</head>

<body>
    <h1>Consulta de Funcionario</h1>
    <ul>
        <?php foreach ($funcionarios as $funcionario): ?>
            <li>
                <!-- A linha abaixo exibe o link para visualizar os detalhes do funcionario com base no ID -->
                <a href="visualizar_funcionario.php?id=<?= $funcionario['id'] ?>">
                    <!-- A linha abaixo exibe o nome do funcionario -->
                    <?= htmlspecialchars($funcionario['nome']) ?>
                </a>
                <!-- Formulario para exibir funcionarios -->
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="excluir_id" value="<?= $funcionario['id'] ?>">
                    <button type="submit"> Excluir </button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

<address align="center" >

Trabalho desenvolvido pelo aluno Pedro Gabriel | Aluno Tecnico | Desinvolvimento de sistemas

</address>


</html>