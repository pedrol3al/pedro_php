<?php

$bdServidor ='127.0.0.1';
$bdUsuario ='root';
$bdSenha ='';
$bd_banco ='pedro_l3al';
$conexao = mysqli_connect($bdServidor,$bdUsuario,$bdSenha,$bd_banco);
    if(mysqli_connect_errno()){
        echo "Problemas para conecatar no banco. Verifique os dados";
        die();  
    }

?>