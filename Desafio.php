<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário </title>
</head>
<body>

    <h1>Formulário </h1>

    <form action="" method="get">
        
        <?php
        function criarCampos(...$nomes) {
            foreach ($nomes as $nome) {
                echo "<label for='$nome'>$nome:</label>";
                echo "<input type='text' id='$nome' name='$nome'><br>";
            }
        }
        criarCampos("nome", "telefone", "email", "jean", "brito");
        ?>

        <button type="submit">Enviar</button>
    </form>




</body>
</html>
