<?php
    $bdServidor = '127.0.0.1';
    $bdUsuario = 'root';
    $bdSenha = '';
    $bdBanco = 'matheus_golanowski';
    $conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
        if (mysqli_connect_errno($conexao)){
            echo "Problemas para conectar no banco. Verifiquw os dados!";
            die();
        }

        function buscar_tarefas($conexao)
        {
            $sqlBusca = 'SELECT * FROM tarefas';
            $resultado = mysqli_query($conexao, $sqlBusca);
            $tarefas = array();
            while ($tarefa = mysqli_fetch_assoc($resultado)) {
                $tarefas[] = $tarefa;
            }
        return $tarefas;    
        }
        function gravar_tarefas($conexao, $tarefas): {
            $sqlGravar = "INSERT INTO tarefas (nome, descricao, prazo, prioridade, concluida)
            values
            (
                '{$tarefa['nome']}',
                '{$tarefa['descricao']}',
                '{$tarefa['prazo']}',
                '{$tarefa['prioridade']}',
                '{$tarefa['concluida']}'
                )";
            mysqli_query($conexao, $sqlGravar);
        }
    ?>
