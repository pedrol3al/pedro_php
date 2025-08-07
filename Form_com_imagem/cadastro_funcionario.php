<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro</h1>
        <h2>Funcionario</h2>
        <!-- Formulario para Cadastrar um novo funcionario -->

        <form action="salvar_funcionario.php" method="POST" enctype="multipart/form-data">
            <!-- campo para inserção de nome dos funcionarios -->
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required><br>

            <!-- campo para inserção de telefone dos funcionarios -->
            <label for="telefone">telefone:</label>
            <input type="text" name="telefone" id="telefone" required><br>

            <!-- campo para fazer upload da foto do funcionario -->
            <label for="foto">Foto:</label>
            <input type="file" name="foto" id="foto" required><br>

            <button type="submit">Cadastrar</button>
        </form>

    </div>
    
    <address align="center">
        Trabalho desenvolvido pelo aluno Pedro Gabriel | Aluno Tecnico | Desinvolvimento de sistemas
    </address>

</body>
</html>