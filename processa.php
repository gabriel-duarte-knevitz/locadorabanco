<?php

$nome = $_POST['Nome'];
$email = $_POST['Email'];
$usuario = $_POST['Usuario'];
$senha = $_POST['Senha'];
$confirmasenha = $_POST['ConfirmaSenha'];

$strcon = mysqli_connect('localhost', 'root', '07122007Alec?', 'locadora');

if (!$strcon) {
    die('Não foi possível conectar ao MySQL: ' . mysqli_connect_error());
}

$sql = "INSERT INTO cadastro (Nome, Email, Usuario, Senha, ConfirmaSenha) VALUES ('$nome', '$email', '$usuario', '$senha', '$confirmasenha')";

if (mysqli_query($strcon, $sql)) {
    echo "Cadastro efetuado com sucesso";
} else {
    echo "Erro ao tentar cadastrar registro: " . mysqli_error($strcon);
}

mysqli_close($strcon);
?>