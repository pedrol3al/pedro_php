//Função para conferir se os campos estão preenchidos
function conferirCampos() {
  var nome = document.getElementById('nome'); //Cria a varivael nome puxa seu Id
  var data = document.getElementById('data') //Cria a varivael data e puxa seu Id
  var user_name = document.getElementById('user_name') //Cria a varivael data e puxa seu Id
  var endereco = document.getElementById('endereco') //Cria a varivael data e puxa seu Id
  var cpf = document.getElementById('cpf') //Cria a varivael data e puxa seu Id
  var telefone = document.getElementById('telefone') //Cria a varivael data e puxa seu Id
  var email = document.getElementById('email') //Cria a varivael data e puxa seu Id
  var rg = document.getElementById('rg') //Cria a varivael data e puxa seu Id
  var senha = document.getElementById('senha') //Cria a varivael data e puxa seu Id

  if (!nome || nome.value.trim() === "")  { //Se a variavel nome não existir (! garante isso), OU, seo valor digitado, sem contar os espaços for vazio
     alert('Campo de nome deve ser preenchido!');   //Exibe a mensagem de erro pois o campo está vazio
      return false; //Impede que os dados do formulario sejam enviados, caso não estivesse aqui, apareceria a mensagem, mas os dados seriam enviados
  }
  if(!data || data  .value.trim() === ""){
     alert('Campo senha deve ser preenchido')
      return false;
  }
  if (!user_name || user_name.value.trim() === "")  { //Se a variavel nome não existir (! garante isso), OU, seo valor digitado, sem contar os espaços for vazio
    alert('Campo de nome deve ser preenchido!');   //Exibe a mensagem de erro pois o campo está vazio
     return false; //Impede que os dados do formulario sejam enviados, caso não estivesse aqui, apareceria a mensagem, mas os dados seriam enviados

 } if (!endereco || endereco.value.trim() === "")  { //Se a variavel nome não existir (! garante isso), OU, seo valor digitado, sem contar os espaços for vazio
  alert('Campo de nome deve ser preenchido!');   //Exibe a mensagem de erro pois o campo está vazio
   return false; //Impede que os dados do formulario sejam enviados, caso não estivesse aqui, apareceria a mensagem, mas os dados seriam enviados

} if (!cpf || cpf.value.trim() === "")  { //Se a variavel nome não existir (! garante isso), OU, seo valor digitado, sem contar os espaços for vazio
  alert('Campo de nome deve ser preenchido!');   //Exibe a mensagem de erro pois o campo está vazio
   return false; //Impede que os dados do formulario sejam enviados, caso não estivesse aqui, apareceria a mensagem, mas os dados seriam enviados
} 
if (!telefone || telefone.value.trim() === "")  { //Se a variavel nome não existir (! garante isso), OU, seo valor digitado, sem contar os espaços for vazio
  alert('Campo de nome deve ser preenchido!');   //Exibe a mensagem de erro pois o campo está vazio
   return false; //Impede que os dados do formulario sejam enviados, caso não estivesse aqui, apareceria a mensagem, mas os dados seriam enviados
}
if (!email || email.value.trim() === "")  { //Se a variavel nome não existir (! garante isso), OU, seo valor digitado, sem contar os espaços for vazio
  alert('Campo de nome deve ser preenchido!');   //Exibe a mensagem de erro pois o campo está vazio
   return false; //Impede que os dados do formulario sejam enviados, caso não estivesse aqui, apareceria a mensagem, mas os dados seriam enviados
}
if (!rg || rg.value.trim() === "")  { //Se a variavel nome não existir (! garante isso), OU, seo valor digitado, sem contar os espaços for vazio
  alert('Campo de nome deve ser preenchido!');   //Exibe a mensagem de erro pois o campo está vazio
   return false; //Impede que os dados do formulario sejam enviados, caso não estivesse aqui, apareceria a mensagem, mas os dados seriam enviados
}
if (!senha || senha.value.trim() === "")  { //Se a variavel nome não existir (! garante isso), OU, seo valor digitado, sem contar os espaços for vazio
  alert('Campo de nome deve ser preenchido!'); //Exibe a mensagem de erro pois o campo está vazio
   return false; //Impede que os dados do formulario sejam enviados, caso não estivesse aqui, apareceria a mensagem, mas os dados seriam enviados
}else{
      document.getElementById("enviar_formulario")?.addEventListener("click", () => {
          window.location.href = "enviar_forms.php";
        });

        return true; //Caso os campos sejam preenchidos, continua
  }
}


