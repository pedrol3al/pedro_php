<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .container{
            display:flex;
            text-align: center;
            flex-direction:column;
            justify-content: space-around;
            background-color: lightgray;
            width: 70vh;
            height: 60vh;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 16px;
            }
        footer{
            position: absolute;
            bottom: 20px;
            left: 470px;
            }
    </style>
</head>
<body>
    <div class="container">
        <div class="form1">
            <h1>Ataque Sql</h1>
            <form action="login_inseguro.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" name="nome">
                <button type="submit">Login</button>
            </form>
        </div>
        
        <div class="form2">
            <h1>ataque SQL negado</h1>
            <form action="login_seguro.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <footer>
        <address>
            Yan Carlos de Oliveira - Estudante - Desenvolvimento de sistemas
        </address>
    </footer>

</body>
</html>