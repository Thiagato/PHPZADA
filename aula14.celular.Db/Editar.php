<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

session_start();

$usu = $_SESSION["usuario"] ?? null;

if(!is_null($usu)){
    //nao logado
}

//verificar o produto para editar se nao for nulo e existir

$cod = $_GET["p"] ?? null;

if(is_null($cod)){
    echo "nenhum produto para editar";
    return;
}

require_once "Banco.php";


if(is_null($nome) || is_null($empresa)){
$q = "SELECT nome, empresa FROM smartphone WHERE cod='$cod'";
$busca = $banco->query($q);

$obj_smart = $busca->fetch_object();

$nome = $obj_smart->nome;
$empresa = $obj_smart->empresa;
}else{
    UpdateOnDB("smartphone", "nome=''$nome, empresa='$empresa'", "cod='$cod'");
    echo ("salvo");
}



?>

<body>
    <form action="" method="post"></form>
    <label for="cod"> codigo</label>
    <input type="text" name="cod" value="<?= $cod ?>" disabled>
    <br>

    <label for="nome"> nome</label>
    <input type="text" name="nome"value="<?= $nome ?>">
    <br>
    <label for="empresa"> empresa</label>
    <input type="text" name="empresa" value= "<?= $empresa ?>">
    <br>
    <input type="submit" value="Salvar">
    
</body>
</html>