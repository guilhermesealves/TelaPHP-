<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cadastro de Clientes</h1>
    <form method="post" action="salvar.php">
        Nome: <input name="nome" type="text" require>
        <br>
        Cidade: <input name="cidade" type="text" require>
        <br>
        Estado: <input name="estado" require>
        <br>
        Telefone: <input type="tel" name="phone" require>
        <br>
        CPF: <input type="number" name="cpf" require>
        <br>
        RG: <input type="number" name="rg" require>
        <br>
        Sexo: <input type="radio" name="sexo" require value="M">M
        <input type="radio" name="sexo" require value="F">F
        <BR></BR>






        <button type="submit">Salvar</button>

    </form>

</body>

</html>