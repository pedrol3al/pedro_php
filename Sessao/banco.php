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

    
    function buscar_tarefas($conexao){
        $sqlBusca = 'SELECT * FROM tarefas';
        $resultado = mysqli_query($conexao, $sqlBusca);
        $tarefas = array();
        while ($tarefa = mysqli_fetch_assoc($resultado)){
            $tarefas[] = $tarefa;
        }
        return $tarefas;
    }

    function gravar_tarefa($conexao, $tarefa){
        $sqlGravar = "
        INSERT INTO tarefas(nome, descricao, prioridade, prazo, concluida
        values
        (
        '{$tarefa['nome']}'),
        '{$tarefa['descricao']}'),
        '{$tarefa['prioridade']}'),
        '{$tarefa['prazo']}'),
        '{$tarefa['concluida']}'),
        )";
        mysqli_query($conexao, $sqlGravar);
    }
    
?>