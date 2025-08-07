<?php
//CONFIGURANDO O BANCO DE DADOS

$host = 'localhost';
$dbname = 'bd_imagens';
$username = 'root';
$password = '';

try {
    //CONEXAO COM BANCO DE DADOS USANDO PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //DEFINE QUE ERROS VAO LANCAR EXCECOES

    //Verifica se o Id foi  passado na URL
    if (isset($_GET['id'])) {
        $id = $_GET['id']; //Obtem o id do funcionario através da URL

        //Recupera os dados do funcionario no banco de dados
        $sql = "SELECT nome,telefone,tipo_foto,foto FROM funcionarios WHERE id = :id ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT); //Vincula o valor do id ao parametro
        $stmt->execute(); //Executa a instrução SQL

        //Verifica se encontrou o funcionario
        if ($stmt->rowCount() > 0) {
            //A linha abaixo busca os dados dos funcionarios com 1 array associativo
            $funcionario = $stmt->fetch(PDO::FETCH_ASSOC);

            //Verifica se foi solicitado a exclusao do funcionario
            //Linha abaixo verifica se os dados foram enviados via formulario com o method POST
            //isset verifica se há um valor defuinido na variavel
            //Verifica se o formulario foi enviado via post e se existe o campo "excluir_id"

            if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['excluir_id'])) {
                //A linha abaixo pega o valor id que foi enviado pelo formulario (id do funcionario) com o id correspondente

                $excluir_id = $_POST['excluir_id'];

                //Monta a query sql para deletar o funcionario com o id correspondente
                $sql_excluir = "DELETE FROM funcionarios WHERE id= :id";


                //Prepara a query para a execução segura, evitando SQL inejction 
                $stmt = $pdo->prepare($sql_excluir);

                //Associa o valor ID ao parametro :id na query garantindo que sera tratado como um numero
                $stmt->bindParam(':id', $id, $excluir_id, PDO::PARAM_INT);

                //Executa a query excluindo o funcionario do banco de dados
                $stmt->execute();

                header("Location: consulta_funcionario.php");
                exit();
            }
           
            
        } else {
            echo 'Funcionario não encontrado!';
        }
    } else {
        echo ("ID do funcionario não fornecido.");
    }
} catch (PDOException $e) {
    echo "Erro:" . $e->getMessage();
}

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Funcionarios</title>
</head>

<body>
    <h1>Dados do Funcionarios</h1>
    <p>Nome: <?= htmlspecialchars($funcionario['nome']) ?></p>
    <p>Telefone: <?= htmlspecialchars($funcionario['telefone']) ?></p>
    <p>Foto: </p>
    <img src="data:<?= $funcionario['tipo_foto']; ?>;base64,<?= base64_encode($funcionario['foto']); ?>" alt="Foto do funcionario">

    <!-- Formulario para excluir funcionario -->

    <form method="POST">
        <input type="hidden" name="excluir_id" value="<?= $id ?>">
        <button type="submit"> Excluir Funcionario </button>


    </form>
</body>

</html>