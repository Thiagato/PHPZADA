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
    $usuario = $_POST["usuario"];
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    foreach ($usuarios as $sla) {
        if ($sla["usu"] === $usuario && $sla["nome"] === $nome && $sla["senha"] === $senha) {
            $encontrado = true;
            break;
        }
    }

    
    
?>
<?php
     if(!$encontrado){
     echo '<form action method="post">';
     echo '<label for="usuario">Usuário:</label><br>';
     echo '<input type="text" id="usu" name="usuario"><br><br>';

     echo '<label for="nome">Nome:</label><br>';
     echo '<input type="text" id="nome" name="nome"><br><br>';
     
     echo '<label for="senha">Senha:</label><br>';
     echo '<input type="password" id="senha" name="senha"><br><br>';
     
     echo '<input type="submit" value="Login">';
echo  '</form>';
echo '</body>';
echo '</html>';
} else 
    {echo "deu certo";}
    ?>
