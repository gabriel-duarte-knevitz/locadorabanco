<?php

$titulo = $_POST['Titulo'];
$descricao = $_POST['Descricao'];
$genero = $_POST['Genero'];
$ano = $_POST['Ano'];

$strcon = mysqli_connect('localhost', 'root', '07122007Alec?', 'locadora');

if (!$strcon) {
    die('Não foi possível conectar ao MySQL: ' . mysqli_connect_error());
}

$sql = "INSERT INTO filmes (Titulo, Descricao, Genero, Ano) VALUES ('$titulo', '$descricao', '$genero', '$ano')";

if (mysqli_query($strcon, $sql)) {
    echo "Cadastro de filme efetuado com sucesso";
} else {
    echo "Erro ao tentar cadastrar filme: " . mysqli_error($strcon);
}

mysqli_close($strcon);
?>