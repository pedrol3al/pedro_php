<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atividade Formulários</title>
  <link rel="stylesheet" type="text/css" href="css_atividade_formulario.css">
</head>
<body>

  <br><br>

  <!-- Início do formulário -->
  <form action= "enviar_forms.php" method="GET">

    <table  class="tabela" border="1" align="center" cellpadding="10" cellspacing="0">
      <tr>
        <td><img class="icone_pessoa" src="imagens/icone pessoa.png" ></td>
        <td class="cadastro_funcionario" colspan="10">
          <h1><strong>Cadastro de funcionarios</strong></font></h1>
        </td>
      </tr>

      <tr>
        <td colspan="2"><strong>Nome:</strong></td>
        <td><strong>Data de nascimento</strong></td>
        <td width="70"><strong>ID Usuário</strong></td>
        <td><strong>Endereço completo </strong></td>
        <td><strong>CPF</strong></td>
        <td><strong>Telefone</strong></td>
        <td><strong>Email</strong></td>
        <td><strong>RG</strong></td>
        <td><strong>Senha</strong></td>
        <td><strong>Data de cadastro</strong></td>
      </tr>

      <tr>
        <td colspan="2"><input type="text" placeholder="Nome" size="15" name="nome"></td>
        <td><input type="text" placeholder="Data de nascimento" size="16" name="data"></td>
        <td><input type="text" placeholder="Nome do Usuário" size="10" maxlength="10" name="user_name"></td>
        <td><input type="text" placeholder="Endereço" size="25" name="endereco"></td>
        <td><input type="text" placeholder="CPF" size="18" name="cpf"></td>
        <td><input type="tel" placeholder="Telefone" size="12" name="telefone"></td>
        <td><input type="email" placeholder="Email" size="15" name="email"></td>
        <td><input type="text" placeholder="RG" size="10" name = "rg"></td>
        <td><input type="password" placeholder="Senha" maxlength="12" size="10" name="senha"></td>
        <td><input type="date" size="15"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="text" placeholder="Nome" size="15"></td>
        <td><input type="text" placeholder="Data de nascimento" size="16"></td>
        <td><input type="text" placeholder="Nome do Usuário" size="10" maxlength="10"></td>
        <td><input type="text" placeholder="Endereço" size="25"></td>
        <td><input type="text" placeholder="CPF" size="18"></td>
        <td><input type="tel" placeholder="Telefone" size="12"></td>
        <td><input type="email" placeholder="Email" size="15"></td>
        <td><input type="text" placeholder="RG" size="10"></td>
        <td><input type="password" placeholder="Senha" maxlength="12" size="10"></td>
        <td><input type="date" size="15"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="text" placeholder="Nome" size="15"></td>
        <td><input type="text" placeholder="Data de nascimento" size="16"></td>
        <td><input type="text" placeholder="Nome do Usuário" size="10" maxlength="10"></td>
        <td><input type="text" placeholder="Endereço" size="25"></td>
        <td><input type="text" placeholder="CPF" size="18"></td>
        <td><input type="tel" placeholder="Telefone" size="12"></td>
        <td><input type="email" placeholder="Email" size="15"></td>
        <td><input type="text" placeholder="RG" size="10"></td>
        <td><input type="password" placeholder="Senha" maxlength="12" size="10"></td>
        <td><input type="date" size="15"></td>
      </tr>

      <!-- Botões de ação -->
      <tr>
        <td colspan="11" align="center">
          <br>
          <input class="button_submit" type="submit"value="Enviar">  <input class="button_reset" type="reset" value="Limpar">
          <br><br>
        
        </td>
      </tr>

    </table>

  </form>

  <br>
  <br>
  <br>


  <address align="center" >

     Trabalho desenvolvido pelo aluno Pedro Gabriel | Aluno Tecnico | Desinvolvimento de sistemas

  </address>
  

</body>
</html>
