
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de tarefas </title>
</head>
<body>
<h1>Gerenciador de tarefas</h1>


<form >
    <fieldset> 
    <legend>Nova tarefa</legend>
    <label>
        Tarefa
        <input type="text" name="nome"/>
    </label>
    <label>
        Descrição
        <textarea name="descricao"></textarea>
    </label>
    <label>
        Prazo (Opcional):
        <input type="text" name="prazo"/>
    </label>
        <input type="submit" value="Cadastrar"/>
    </fieldset>
    <fieldset>
        <legend>Prioridade:</legend>
        <label>
            <input type="radio" name="prioridade" value="baixa" cheked/> Baixa
        </label>
        <label>
            <input type="radio" name="prioridade" value="media" cheked/> Média
        </label>
        <label>
            <input type="radio" name="prioridade" value="alta" cheked/> Alta
        </label>
    </fieldset>
    <label >
        Tarefa concluída:
        <input type="checkbox" name="concluida" value="sim"/>
    </label>
        <input type="submit" value="Cadastrar"/>
</form>
<table>
    <tr>
        <th>Tarefas: </th>
        <th>Descricao: </th>
        <th>Prazo: </th>
        <th>Prioridade: </th>
        <th>Concluida: </th>
    </tr>
    <?php foreach ($lista_tarefas as $tarefa) : ?>
    <tr>
        <td><?php echo $tarefa;?> </td>
    </tr>
    <?php endforeach;?>
</table>

<address align="center" >

     Trabalho desenvolvido pelo aluno Pedro Gabriel | Aluno Tecnico | Desenvolvimento de sistemas

  </address>

</body>
</html>