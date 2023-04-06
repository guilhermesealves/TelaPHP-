<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="salvar3.php">
        Nome <input name="nome" require> <br>
        Telefone <input type="tel" maxlength="15" name="tel" required> <br>
        Cidade <input name="cidade"> <br>

        Estado <select id="estado" name="estado">
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
            <option value="EX">Estrangeiro</option>
        </select> <br>


        Email <input type="e" name="email"> <br>
        Sexo: <input type="radio" name="sexo" require value="M">M
        <input type="radio" name="sexo" require value="F">F
        <BR></BR>


        <button type="submit">Salvar Clientes</button>
    </form>


    <?php

    

    $arquivo = fopen("clientes.csv", "r");

    while(!feof($arquivo)){
        $linha = fgets($arquivo);

        $registro = explode(",", $linha);

        echo " Nome: " . $registro[0];
        echo " Telefone:" . $registro[1];
        echo " Cidade: " .$registro[2];
        echo" Estado: " . $registro[3];
        echo "Email" . $registro[4];
        echo $registro . "<br>";    


        
    }

  

    fclose($arquivo);



    ?>

</body>

</html>