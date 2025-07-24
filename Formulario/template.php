<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
        <fieldset>
            <legend>Nova tarefa</legend>
            <label>
                Tarefa:
                <input type="text" name="nome" />
            </label>
            <label>
                Descrição :
                <textarea name="descricao"></textarea>
            </label>
            <label>
                Prazo:
                <input type="text" name="parazo"/>
            </label>
        </fieldset>
        <fieldset>
            <legend>Prioridade</legend>
            <label>
                <input type="radio" name="prioridade" value="baixa" checked/>
                Baixa
                <input type="radio" name="prioridade" value="media"/>
                Média
                <input type="radio" name="prioridade" value="alta"/>
                Alta
            </label>
        </fieldset>
        <label>
            Tarefa concluida:
            <input type="checkbox" name="concluida" value="sim"/>
        </label>
            <input type="submit" value="Cadastrar"/>
    
    </form>
    <table>
        <tr>
            <th>Tarefas</th>
        </tr>
        <?php foreach ($lista_tarefas as $Tarefa) : ?>
            <tr>
                <td><?php echo $Tarefa; ?> </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>