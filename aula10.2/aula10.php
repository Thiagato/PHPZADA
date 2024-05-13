<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        require_once "usuarios.php";

        $usuario = $_POST['usuario'] ?? null;
        $senha = $_POST['senha'] ?? null;

        if(!is_null($usuario) && !is_null($senha)){
            // echo $usuario . " -- " . $senha;

            if(verUsuarios($usuario, $senha)){
                echo "<br> - Fazendo Login";
                echo "<h2>Bem Vindo....</h2>";
            }else{
                echo "<br> - Tente Novamente";
                require_once "form-login.php";    
            }

        }else{
            require_once "form-login.php";
        }

    
    ?>


</body>
</html>