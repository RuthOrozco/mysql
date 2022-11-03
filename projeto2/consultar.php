<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Consultar Cliente</h1>
    <hr>
    <?php
    //abrir a conexão com o banco
    include_once './coxecao.php';
    //montar a instrução para ir ao banco
    $sql = "select * from cliente";

    $result =mysqli_query($con,$sql); //Executa a consulta no mysql

    $totalregistro = mysqli_num_rows($result);
    if ($totalregistro > 0){
        echo "encontrou ..." .$totalregistro;
        ?>
        <table while='800px' border="1px">
            <tr>
                <td>Nome</td>
                <td>E-mail</td>
                <td>Data de Cadastro</td>
            </tr>   
            <?php 
    }else {
        echo"nenhum Registro Cadastrado!";
    }
    ?>
</body
>
</html>