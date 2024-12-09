<?php
$strcon = mysqli_connect('localhost', 'root', '07122007Alec?', 'locadora');

if (!$strcon) {
    die('Não foi possível conectar ao MySQL: ' . mysqli_connect_error());

$sql = "SELECT Nome, Email, Usuario, Senha, ConfirmaSenha FROM cadastro";
$result = mysqli_query($strcon, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Nome</th><th>Email</th><th>Usuario</th><th>Senha</th><th>ConfirmaSenha</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['Nome']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Usuario']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Senha']) . "</td>";
        echo "<td>" . htmlspecialchars($row['ConfirmaSenha']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

mysqli_close($strcon);

}