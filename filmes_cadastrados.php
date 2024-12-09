<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes Cadastrados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            color: purple;
            padding: 20px;
        }

        .button {
            background-color: #9b59b6;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .button:hover {
            background-color: #8e44ad;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #9b59b6;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h3 style="text-align: center;">Filmes Cadastrados</h3>

    <button class="button" onclick="mostrarFilmes()">Mostrar Filmes Cadastrados</button>

    <div id="tabelaFilmes" style="display:none;">
        <?php
            $strcon = mysqli_connect('localhost', 'root', '07122007Alec?', 'locadora');
            
            if (!$strcon) {
                die('Não foi possível conectar ao MySQL: ' . mysqli_connect_error());
            }

            $sql = "SELECT Titulo, Descricao, Genero, Ano FROM filmes";
            $result = mysqli_query($strcon, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo "<table border='1'>";
                echo "<tr><th>Título</th><th>Descrição</th><th>Gênero</th><th>Ano</th></tr>";

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
                echo "Nenhum filme cadastrado.";
            }

            mysqli_close($strcon);
        ?>
    </div>

    <script>
        function mostrarFilmes() {
            var tabela = document.getElementById('tabelaFilmes');

            if (tabela.style.display === "none") {
                tabela.style.display = "block";
            } else {
                tabela.style.display = "none";
            }
        }
    </script>
</body>
</html>
