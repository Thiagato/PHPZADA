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
criarUsuario("ola","mundo","caralho");
criarUsuario("2","3","4");

function CriarNoDb($into, $values){
    global $banco;
    $q = "INSERT INTO $into VALUES $values"; 
  
    $resp = $banco->query($q);
    echo "query: $q";
    echo var_dump($resp);

}
?>
</pre>