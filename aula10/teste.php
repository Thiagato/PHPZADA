<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login</title>
</head>
<body>
    <h2>Login</h2>

<?php
$encontrado = false;
$usuarios = [
    ["usu" => "pedroca", "nome" => "pedro", "senha" =>"122"],
    ["usu" => "zezinho", "nome" => "arthur", "senha" =>"senha47"],
    ["usu" => "joaozinho", "nome" => "joao", "senha" =>"abC1"],
];

// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    // Verifica se as credenciais correspondem a algum usuário na lista
    foreach ($usuarios as $sla) {
        if ($sla["usu"] === $usuario && $sla["nome"] === $nome && $sla["senha"] === $senha) {
            $encontrado = true;
            break;
        }
    }

    if($encontrado){
        echo "deu certo";
    } else {
        echo "deu n ";
    }
}

// Exibe a mensagem "deu certo" se as credenciais estiverem corretas
if ($encontrado) {
    echo '<h1>deu certo</h1>';
} else {
    // Exibe o formulário se o formulário ainda não foi enviado ou se as credenciais não foram encontradas
    ?>
    <form action="" method="post">
        <label for="usuario">Usuário:</label><br>
        <input type="text" id="usu" name="usuario"><br><br>

        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br><br>
        
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha"><br><br>
        
        <input type="submit" value="Login">
    </form>
<?php
}
?>
</body>
</html>