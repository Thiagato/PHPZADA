<?php

function validar_nome_usuario($nome) {
    // Valida o nome se tem só letras e numeros de A a Z e 0 a 9
    return preg_match('/^[a-zA-Z0-9]+$/', $nome);
}

function validar_email($email) {
    // Valida o email 
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validar_senha($senha) {
    // ver se tem pelo menos 6
    if(strlen($senha) >= 6){
    return true;

    }
    
}

?>
