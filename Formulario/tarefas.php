<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Gerenciador de Tarefas
    <!--Aqui irá o restante do código -->
    <form>
        <fieldset>
            <legend>Nova tarefa</legend>
            <label>
                Tarefa:
                <input type="text" name="nome" />
            </label>
                <input type="Submit" value="Cadastrar"/>
        </fieldset>
    </form>
<?php
$lista_tarefas= array();
if (isset($_GET['nome'])){
    $lista_tarefa[] = $_GET['nome'];
}    
?>
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