<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
<?php
session_start(); 
$fornecedor = array();
if (isset($_GET['...nomeEmpresa'])){
    $_SESSION['fornecedores'][] = $_GET['...nomeEmpresa'];
}

if (isset($_GET['nomeEmpresa']) && isset($_GET['nomeFantasia']) && isset($_GET['cnpj']) && isset($_GET['telefone']) && isset($_GET['endereco']) && isset($_GET['bairro']) && isset($_GET['cidade']) && isset($_GET['cep'])) {
    echo "Fornecedor Cadastrado com Sucesso!<br><br>";
    echo "Nome: " . $_GET['nomeEmpresa'] . "<br>";
    echo "Nome Fantasia: " . $_GET['nomeFantasia'] . "<br>";
    echo "CNPJ da Empresa: " . $_GET['cnpj'] . "<br>"; 
    echo "Telefone Empresarial: " . $_GET['telefone'] . "<br>";
    echo "Endereço: " . $_GET['endereco'] . "<br>";
    echo "Bairro: " . $_GET['bairro'] . "<br>";
    echo "Cidade: " . $_GET['cidade'] . "<br>";
    echo "Cep: " . $_GET['cep'] . "<br>";

    $_SESSION['fornecedores'][] = $_GET['nomeEmpresa'] . " " . $_GET['nomeFantasia'] . " " . $_GET['cnpj'] . " " . $_GET['telefone'] . " " . $_GET['endereco'] . " " . $_GET['bairro'] . " " . $_GET['cidade'] . " " . $_GET['cep'];
}

if (!empty($_SESSION['fornecedores'])) {
    echo "<h2>Fornecedores cadastrados</h2>";
    foreach ($_SESSION['fornecedores'] as $fornecedor) {
        echo "<p>$fornecedor</p>"; 
    }
}
?>
<center>
</body>
</html>
