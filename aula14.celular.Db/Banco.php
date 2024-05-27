<pre>
<?php



    $banco = new mysqli("localhost:3307", "root", "", "dadosbancothiago");
    
    
    function BuscarUsuario($usu){
        global $banco;

        $q = "SELECT usu, nome, senha FROM usuario WHERE usu='$usu'";

        $busca = $banco->query($q);
        // $obj = $busca->fetch_object();

        return $busca;
    }
    // $senhanova = password_hash("smt", PASSWORD_DEFAULT);
    // $q = "UPDATE usuario SET senha = $senhanova WHERE usu = 'pedroca'";
    // $resp = $banco->query($q);
    // echo "query: $q";
    // echo var_dump($resp);

    // $q = "DELETE FROM usuario WHERE usu = 'pedroca'";
    // $resp = $banco->query($q);
    // echo "Query: $q";
    // echo var_dump($resp);




function criarUsuario($usu,$nome,$senha){
    global $banco;
    $senha = password_hash($senha, PASSWORD_DEFAULT);

   //criarNoDB("usuario(cod, nome, usu, senha)", "(NULL, '$usu','$nome','$senha')");
    //mesma coisa que 
    //  |
    //  |
    //  V
    $q ="INSERT INTO usuario (cod, usu, nome, senha) 
    VALUES (NULL, '$usu','$nome','$senha'";
    $resp = $banco->query($q);
    echo "query: $q";
    echo var_dump($resp);
}


function CriarNoDb($into, $values){
    global $banco;
    $q = "INSERT INTO $into VALUES $values"; 
  
    $resp = $banco->query($q);
    echo "query: $q";
    echo var_dump($resp);

}
function UpdateOnDB($database, $set, $where){
    global $banco;
    $q = "UPDATE $database SET $set WHERE $where";

    $resp = $banco->query($q);
    echo "Query: $q";
    echo var_dump($resp);
}

function deleteFromDB(string $database, string $where, bool $debug) : void{
    global $banco;
    
    $q = "DELETE FROM $database WHERE $where";
    $resp = $banco->query($q);
    
    if($debug){
        echo "Query: $q";
        echo var_dump($resp);
    }
}


function AtualizarUsuario($usu, $nome = "", $senha = "", $debug = false){
    global $banco;

    $set = "";
    if ($nome !== "" && $senha !== ""){
        $set = "nome = '$nome', senha = '$senha'";
    } elseif ($nome !== ""){
        $set = "nome = '$nome'";
    } elseif ($senha !== ""){
        $senha = password_hash($senha, PASSWORD_DEFAULT);
        $set = "senha = '$senha'";
    } else {
        if ($debug) {
            echo "Nada para atualizar.";
        }
        return;
    }

    $q = "UPDATE usuario SET $set WHERE usu = '$usu'";

    $resp = $banco->query($q);
    if ($debug) {
        echo "Query: $q";
        echo var_dump($resp);
    }
}

function deletarUsuario($usu){
    global $banco;

    $q = "DELETE FROM usuarios WHERE usuario = '$usu'";
    $resp = $banco->query($q);
    echo "query: $q";
    echo var_dump($resp);
}



?>

</pre>