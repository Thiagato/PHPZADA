<style>
    body {
        background-color: black;
        color: white;
        font-family: Arial, sans-serif;
    }
    #formulario {
        width: 50%;
        margin: 0 auto;
        padding: 20px;
        background-color: #333;
        border-radius: 10px;
    }
    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }
    input[type="text"], input[type="password"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        background-color: #555;
        color: white;
    }
    input[type="submit"] {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    } 
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<?php
include 'funcoes.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if (validar_nome_usuario($nome) && validar_email($email) && validar_senha($senha)) {
        //direcionar para sucesso
        header("Location: sucesso.php");
        exit();
    } else {
        //direcionar para erro
        header("Location: erro.php?campo=nome_usuario");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro (POST)</title>
</head>
<body>
    <div id="formulario">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="nome">Nome de usuário:</label>
            <input type="text" name="nome" id="nome"><br>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email"><br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha"><br>
            <input type="submit" value="Registrar">
        </form>
    </div>
</body>
</html>
