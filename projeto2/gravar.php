<?php
date_default_timezone_set("America/Sao_Paulo");
//regaste de dados da tela
$nome= $_POST["nome"];
$email= $_POST["email"];
$telefone= $_POST["telefone"];
$dtcadastro= date("Y-m-d"); // padrão de banco

//abrir conexão com o banco de dados.

include_once './coxecao.php';

// Montar o sql de gravação
// (null,'ana','ana@gmail','1111-2222','2022-11-03');
$sql = "insert into cliente values(null,'".$nome."','".$email."','".$telefone."','".$dtcadastro."')";

if (mysqli_query($con,$sql)){
    $msg = "Gravando com sucesso";

}else {
    $msg = "erro ao Gravar!";
}
// fechar a conexão com o banco
mysqli_close($con);
echo"<script> alert('".$msg."'); location.herf='index.php';</script>";




?>