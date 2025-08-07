<?php
//FUNCAO PARA REDIMENSIONAR A IMAGEM
function redimensionarImagem($imagem, $largura, $altura)
{
    //OBTEM AS DIMENSOES ORIGINAIS DA IMAGEM
    //getimagesize() retorna a largura e a altura de uma imagem
    list($larguraOriginal, $alturaOriginal) = getimagesize($imagem);

    //CRIA UMA NOVA IMAGEM EM BRANCO COM AS NOVAS DIMENSOES
    //imagecreatetruecolor() CRIA UMA NOVA IMAGEM EM BRANCO EM ALTA QUALIDADE
    $novaImagem = imagecreatetruecolor( $largura, $altura);

    //CARREGA A IMAGEM ORIGINAL (JPEG) A PARTIR DO ARQUIVO 
    //imagecreatefromjpeg() CRIA UMA IMAGEM PHP A APARTIR DE UM JPEG
    $imagemOriginal = imagecreatefromjpeg($imagem);

    //COPIA E REDIMENSIONA A IMAGEM ORIGINAL PARA A NOVA
    //imagecopyresampled() COPIA COM REDIMENSIONAMENTO E SUAVIZAÇÃO
    imagecopyresampled($novaImagem, $imagemOriginal, 0, 0, 0, 0, $largura, $altura, $larguraOriginal, $alturaOriginal);

    //INICIA UM BUFFER PARA GUARDAR UMA IMAGEM COM O TEXTO BINARIO
    //ob_start() INICIA O "output buffering" GUARDANDO A SAÍDA
    ob_start();

    //imagejpeg() envia a imagem para o output
    imagejpeg($novaImagem);

    // ob_get_clean PEGA O CONTEUDO DO BUFFER E LIMPA
    $dadosImagem = ob_get_clean();

    //LIBERA A MEMORIA USADA PELAS IMAGENS
    //imagedestroy() LIMPA A MEMÓRIA DA IMAGEM CRIADA
    imagedestroy($novaImagem);
    imagedestroy($imagemOriginal);

    //RETORNA A IMAGEM REDIMENSIONADA EM FORMATO BINARIO
    return $dadosImagem;
}

//CONFIGURANDO O BANCO DE DADOS

$host = 'localhost';
$dbname = 'bd_imagens';
$username = 'root';
$password = '';

try {
    //CONEXAO COM BANCO DE DADOS USANDO PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //DEFINE QUE ERROS VAO LANCAR EXCECOES

    //VERIFICA SE FOI UM POST E SE TEM ARQUIVO 'foto'
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['foto'])) {

        if ($_FILES['foto']['error'] == 0) {
            $nome = $_POST['nome']; //PEGA O NOME DO FUNCIONARIO
            $telefone = $_POST['telefone']; //PEGA O TELEFONE DO FUNCIONARIO
            $nomeFoto = $_FILES['foto']['name']; //PEGA O NOME ORIGINAL DO ARQUIVO
            $tipoFoto = $_FILES['foto']['type']; //PEGA O TIPO MIME DO ARQUIVO

            // REDIMENSIONA A IMAGEM
            $foto = redimensionarImagem($_FILES['foto']['tmp_name'], 300, 400); //tmp_name É O CAMINHO TEMPORARIO

            //INSERE NO BANCO DE DADOS USANDO SQL PREPARADA
            $sql = "INSERT INTO funcionarios (nome, telefone, nome_foto, tipo_foto, foto)VALUES(:nome, :telefone, :nome_foto, :tipo_foto, :foto)";

            $stmt = $pdo->prepare($sql); //PREPARA A QUERY PARA EVITAR ATAQUE SQL INJECTION
            $stmt->bindParam(':nome', $nome); //LIGA OS PARAMETROS AS VARIAVEIS
            $stmt->bindParam(':telefone', $telefone); //LIGA OS PARAMETROS AS VARIAVEIS
            $stmt->bindParam(':nome_foto', $nomeFoto); //LIGA OS PARAMETROS AS VARIAVEIS
            $stmt->bindParam(':tipo_foto', $tipoFoto); //LIGA OS PARAMETROS AS VARIAVEIS
            $stmt->bindParam(':foto', $foto, PDO::PARAM_LOB); //LOB = Large Object USADO PARA DADOS BINARIOS COM IMAGENS

            if ($stmt->execute()) {
                echo "Funcionario cadastrado com sucesso!";
            } else {
                echo "Erro ao cadastrar o funcionario, ele foi aniquilado";
            }

        } else {
            echo "Erro ao fazer o UPLOAD da foto! codigo: " . $_FILES['foto']['error'];
        }
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage(); //mostra o erro se houver;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Imagens</title>
</head>
<body>
    <h1>Lista de Imagens</h1>
    <a href="consulta_funcionario.php">Listar Funcionarios!</a>
</body>
</html>