<?php
//coockers durando 10 segundos
session_set_cookie_params(['lifetime'=> 10]);
session_start();

$_SESSION["nome"] = "Jeangay";
$_SESSION["pessoa"] = 
[ "nome" => "jean", "idade" => 87,];
echo session_id();
echo print_r($_SESSION);


// session_unset();
// //limpar variavel
// session_destroy();
// //destruir sessão



?>