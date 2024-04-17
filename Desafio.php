<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-label-text {
            background-color: #f0f0f0; /* Define a cor de fundo do texto dos labels */
            padding: 5px; /* Adiciona um espaçamento interno ao redor do texto */
            border-radius: 5px; /* Adiciona cantos arredondados */
        }
    </style>
</head>
<body>
    <center><h1>Formulário </h1></center>
    <center>
    <?php
    function criarFormulario($metodo, ...$nomes) {
        echo "<form action='' method='$metodo'>";
        foreach ($nomes as $nome) {
            $nome = ucfirst($nome);
            echo "<label for='$nome' class='form-label-text'>$nome:</label>";
            echo "<input type='text' id='$nome' name='$nome'><br>";
        }
        // Botão "Enviar" com Bootstrap
        echo "<button type='submit' class='btn btn-primary'>Enviar</button>";
        echo "</form>";
    }

    criarFormulario("GET", "nome", "telefone", "email", "elo", "brito", "dinarte" , "rafael" , "jean");
    ?>
</center>
</body>
</html>
