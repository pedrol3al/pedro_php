function conferir_campos(event) {
    const form = document.forms[0];

    const nome = form.nome;
    const dataNascimento = form.data;
    const idUsuario = form.user_name;
    const endereco = form.endereco;
    const cpf = form.cpf;
    const telefone = form.telefone;
    const email = form.email;
    const rg = form.rg;
    const senha = form.senha;
    const dataCadastro = form.querySelector('input[type="date"]');

    if (nome.value.trim() === "") {
      alert("Por favor, preencha o campo: Nome");
      nome.focus();
      event.preventDefault();
    } else if (dataNascimento.value.trim() === "") {
      alert("Por favor, preencha o campo: Data de nascimento");
      dataNascimento.focus();
      event.preventDefault();
    } else if (idUsuario.value.trim() === "") {
      alert("Por favor, preencha o campo: ID Usuário");
      idUsuario.focus();
      event.preventDefault();
    } else if (endereco.value.trim() === "") {
      alert("Por favor, preencha o campo: Endereço completo");
      endereco.focus();
      event.preventDefault();
    } else if (cpf.value.trim() === "") {
      alert("Por favor, preencha o campo: CPF");
      cpf.focus();
      event.preventDefault();
    } else if (telefone.value.trim() === "") {
      alert("Por favor, preencha o campo: Telefone");
      telefone.focus();
      event.preventDefault();
    } else if (email.value.trim() === "") {
      alert("Por favor, preencha o campo: Email");
      email.focus();
      event.preventDefault();
    } else if (rg.value.trim() === "") {
      alert("Por favor, preencha o campo: RG");
      rg.focus();
      event.preventDefault();
    } else if (senha.value.trim() === "") {
      alert("Por favor, preencha o campo: Senha");
      senha.focus();
      event.preventDefault();
    } else if (dataCadastro.value.trim() === "") {
      alert("Por favor, preencha o campo: Data de cadastro");
      dataCadastro.focus();
      event.preventDefault();
    } else {
      alert("Formulário enviado com sucesso!");
    }
  }

  // Previne o envio se os campos estiverem errados
  document.getElementById("enviar_formulario").addEventListener("click", function (e) {
    conferir_campos(e);
  });

