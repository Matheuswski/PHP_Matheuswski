<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print "teste <br>";
    print "Olá, Mundo\n <br>";
    print "Escape 'chars' são os MESMOS como em C\n";
    print "Você pode ter quebrar de linhas em uma string. ";
    print 'Uma string pode usar "aspas-duplas". Isso é muito legal!';
    print 'Ainda pode-se usar aspas simples dessa forma It\'s cool!';
    ?>

<br>

<?php
    echo "teste";
    echo "Olá, Mundo";
    echo "Isso abrange
    varias linhas. As novas linhas serão
    saida tambem.";
    echo "Isso abrange\nmultiplas linhas. A nova linha será \na saida tambem.";
    echo "Caracteres Escaping são feitos \"Como esse\".";
    ?>
</body>
</html>