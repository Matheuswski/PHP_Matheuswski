<?php
session_start();

    if (isset($_GET['nome']) && $_GET['nome'] != '') {
       $tarefa = array();

       $tarefa['nome'] = $_GET['nome'];
}
    if(isset($_GET['descricao'])) {
    $tarefa['descricao'] = $_GET['descricao'];
    }else{
    $tarefa['descricao'] = '';
}

include"tamplate.php";
//iclude "tempalte.php";
//session_destroy();
?>