<!--CODIGO HTML DO FORMULARIO-->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Saúde</title>
    <!--ESCREVA O CSS ou UTILIZE BOOTSTRAP NO CODIGO ABAIXO-->
    <link rel="stylesheet" type="text/css" href="SA.css" media="all">
    <script src="Formulario2.js"></script>

    


</head>
<body>
    <center><form action="Backend.php" id="formulario" onsubmit="return valida()" method="get">
        <!--DADOS PESSOAIS-->
        <fieldset>
            <div>
                <center><h3>Iserir dados do fornecedor</h3></center>
            </div>
            <div id="linha">
                <hr>
            </div>
            <br>
            <div id="autor">
                <center><h2>Formulario de Fornecedor</h2></center>
            </div>
            
            <center><table border="0" cellspacing="5">
                <!--Nome-->
                <tr>
                    <td align="right">
                        <label for="nomeEmpresa">Nome Empresarial:</label>
                    </td>
                    <td>
                        <input type="text" name="nomeEmpresa" required onkeypress="mascara(this, mesclarApenasLetras2)" maxlength="14">
                    </td>
                </tr>

                <!--POSTO DE SAUDE-->
                <tr>
                    <td align="right">
                        <label for="nomeFantasia">Nome Fantasia:</label>
                    </td>
                    <td>
                        <input type="text" name="nomeFantasia" required onkeypress="mascara(this, mesclarApenasLetras)" maxlength="14">
                    </td>
                </tr>

                <!--RG e SSP-->
                <tr>
                    <td align="right">
                        <label for="cnpj">Cnpj da Empresa:</label>
                    </td>
                    <td>
                        <input type="text" name="cnpj" required onkeypress="mascara(this, cnpjEmpre)" maxlength="14">
                    </td>

                
                <!--TELEFONE-->
                <tr>
                    <td align="right">
                        <label for="telefone">Telefone Empresarial:</label>
                    </td>
                    <td>
                        <input type="text" name="telefone" onkeypress="mascara(this, Telefone)" maxlength="12">
                    </td>
                </tr>

                <!--ENDEREÇO-->
                <tr>
                    <td align="right">
                        <label for="endereco">Endereço:</label>
                    </td>
                    <td>
                        <input class="tamanho" name="endereco" type="text" name="endereco" id="" required>
                    </td>
                </tr>

                <!--BAIRRO-->
                <tr>
                    <td align="right">
                        <label for="bairro">Bairro:</label>
                    </td>
                    <td>
                        <input class="tamanho" name="bairro" type="text" name="bairro" id="" required>
                    </td>
                </tr>

                <!--CIDADE-->
                <tr>
                    <td align="right">
                        <label for="cidade">Cidade:</label>
                    </td>
                    <td>
                        <input class="tamanho2" name="cidade" type="text" name="cidade" id="" required>
                    </td>
                </tr>

                <!--CEP-->
                <tr>
                    <td align="right">
                        <label for="cep">Cep:</label>
                    </td>
                    <td>
                        <input type="text" name="cep" onkeypress="mascara(this,cep)" maxlength="10">
                    

                    <td align="right">UF:
                        <select id="estado" name="estado" class="estados">
                            <option value="RS">RS</option>
                            <option value="SC">SC</option>
                            <option value="PR">PR</option>
                            <option value="SP">SP</option>              
                        </select>
                    </td>
                    </td>
                </tr>
                <br>
                <br>

                <tr class="botao">
                    <td>
                        <input class="btn1" type="submit" onclick="return validar" value="Enviar">
                        <input class="btn2" type="button" value="Cancelar">
                    </td>
                </tr>
            </table></center>
        </fieldset>
    </form></center>
    
</body>
</html>