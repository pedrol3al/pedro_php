<?php 


if (!isset($_SESSION['tabela_funcionario'])) {
    $_SESSION['tabela_funcionario'] = array();
}

if (isset($_GET['nome'])) {
    $_SESSION['tabela_funcionario'][] = $_GET['nome'];
}
if (isset($_GET['data'])) {
    $_SESSION['tabela_funcionario'][] = $_GET['data'];
}
if (isset($_GET['user_name'])) {
    $_SESSION['tabela_funcionario'][] = $_GET['user_name'];
}
if (isset($_GET['endereco'])) {
    $_SESSION['tabela_funcionario'][] = $_GET['endereco'];
}
if (isset($_GET['cpf'])) {
    $_SESSION['tabela_funcionario'][] = $_GET['cpf'];
}
if (isset($_GET['telefone'])) {
    $_SESSION['tabela_funcionario'][] = $_GET['telefone'];
}
if (isset($_GET['email'])) {
    $_SESSION['tabela_funcionario'][] = $_GET['email'];
}
if (isset($_GET['rg'])) {
    $_SESSION['tabela_funcionario'][] = $_GET['rg'];
}

$tabela_funcionario = $_SESSION['tabela_funcionario'];
?>

<table>
<tr>
    <th>Tarefas:</th>  
</tr>
<?php foreach ($tabela_funcionario as $tabela) : ?>
<tr>
    <td><?php echo htmlspecialchars($tabela); ?></td>
</tr>
<?php endforeach; ?>
</table>
