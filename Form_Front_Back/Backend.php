<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_GET['nomeEmpresa']) && isset($_GET['nomeFantasia']) && isset($_GET['cnpj']) && isset($_GET['telefone']) && isset($_GET['endereco']) && isset($_GET['bairro']) && isset($_GET['cidade'])  && isset($_GET['cep']));
        echo "Fornecedor Cadastrado com Susseso!<br>" . "<br>" ;
        echo "Nome: " . $_GET['nomeEmpresa'] . "<br>";
        echo "Nome Fantasia: " . $_GET['nomeFantasia'] . "<br>";
        echo "CNPJ da Empresa: " . $_GET['cnpj'] . "<br>"; 
        echo "Telefone Empresarial: " . $_GET['telefone'] . "<br>";
        echo "Endereço: " . $_GET['endereco'] . "<br>";
        echo "Bairro: " . $_GET['bairro'] . "<br>";
        echo "Cidade: " . $_GET['cidade'] . "<br>";
        echo "Cep: " . $_GET['cep'] . "<br>"
?>
        
</body>
</html>