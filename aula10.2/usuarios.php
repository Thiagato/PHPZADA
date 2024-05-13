<?php 

    $usuarios = [
        ["usu" => "pedroca", "nome" => "pedro", "senha" => "122"],
        ["usu" => "zezinho", "nome" => "arthur", "senha" => "senha47"],
        ["usu" => "joaozinho", "nome" => "joao", "senha" => "AbC1"]
    ];


    function verUsuarios($user, $sen){
        global $usuarios;
        // echo $usu . $sen;

        // echo "<br> Vendo Usuarios --";

        for ($i=0; $i < count($usuarios); $i++) { 
            // echo "<br>" . print_r($usuarios[$i]);

            if($usuarios[$i]['usu'] == $user){
                // echo " -- usu igual";
                if($usuarios[$i]['senha'] == $sen){
                    // echo "-- senha igual";
                    return true;
                }else{
                    // echo "-- senha não";
                }

            }else {
                // echo " -- não";
                
            }

        }

        return false;
    }

    // verUsuarios("joaozinho", "AbC1");


?>