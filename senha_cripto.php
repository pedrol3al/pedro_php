<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exemplo post </title>
    <style type="text/css">
        label{
            display: inline-block;
            width: 100px;
        }
    </style>
</head>
<body>

<form method="POST" action="senha_back.php">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" required />
        <br/>
        <label for="senha">Senha</label>
        <input type="text" name="senha" required />
        <br/>
        <input type="submit" value="Enviar" name="enviar">
        <input type="reset" value="Limpar" required />
        <br/>
</form>

    
</body>
</html>