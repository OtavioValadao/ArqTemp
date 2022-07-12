<?php

include 'conexao.php';

//resgata o que foi mandado pelo usuario
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];

//funcao para gravar os dados no banco de dados
$recebendodados = "INSERT INTO clientes VALUES ('$cpf', '$telefone', '$endereco', '$email')";

$resultado = mysqli_query($conexao, $recebendodados);

header('Location: index.html');

?>