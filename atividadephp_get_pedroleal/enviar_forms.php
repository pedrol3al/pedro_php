
<center>
    <h2>
<?php
if (
    isset($_GET['nome']) &&
    isset($_GET['data']) &&
    isset($_GET['user_name']) &&
    isset($_GET['endereco']) &&
    isset($_GET['cpf']) &&
    isset($_GET['telefone']) &&
    isset($_GET['email']) &&
    isset($_GET['rg']) &&
    isset($_GET['senha'])
) {
    
    echo "Cliente " . $_GET['nome'] . " cadastrado! <br/>";
    echo "Sua data de nascimento é " . $_GET['data'] . "<br/>";
    echo "Seu usuário é " . $_GET['user_name'] . "<br/>";
    echo "Ele mora em " . $_GET['endereco'] . "<br/>";
    echo "Seu CPF é " . $_GET['cpf'] . "<br/>";
    echo "Seu número de telefone é " . $_GET['telefone'] . "<br/>";
    echo "Seu email é " . $_GET['email'] . "<br/>";
    echo "Seu RG é " . $_GET['rg'] . "<br/>";
    echo "A sua senha é " . $_GET['senha'] . "<br/>";
}
?>
</h2>
<center>