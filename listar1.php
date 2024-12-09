<?php
$strcon = mysqli_connect('localhost', 'root', '07122007Alec?', 'locadora');

if (!$strcon) {
    die('Não foi possível conectar ao MySQL: ' . mysqli_connect_error());

$sql = "SELECT Titulo, Descricao, Genero, Ano FROM filmes";
$result = mysqli_query($strcon, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Titulo</th><th>Descricao</th><th>Genero</th><th>Ano</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['Titulo']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Descricao']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Genero']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Ano']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

mysqli_close($strcon);

}