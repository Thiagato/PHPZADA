<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
    
    require_once "aula12.php";

    $usu = $_POST['usu'] ?? null;
    $sen = $_POST['sen'] ?? null;

    if(is_null($usu) || is_null($sen)){
        require_once "form-login.php";
        echo "deu sim";
    }else{
        require_once "form-login.php";
        echo "~ [Usuario: $usu - Senha: $sen] ~";

        $busca = BuscarUsuario($usu);

        If($busca->num_rows == 0){
            echo"<br>Usuario nao existe";
        } else{
            echo "<br>nice<br>";
            $obj = $busca->fetch_object();
            echo "<br>" . $obj->usu;
            echo "<br>" . $obj->nome;
            echo "<br>" . $obj->senha;

            if(password_verify($sen, $obj->senha)){
                echo "<br> <h1>entro<h1>";
            }
            else {
                echo "<br> sem suceddo caroasidjaod";
            }

        }

    }
    
    
    ?>
    </pre>




</body>
</html>