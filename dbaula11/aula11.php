<pre>
<?php


$banco = new mysqli("localhost" , "root","positivo","banco");
// echo var_dump($banco);

$busca= $banco->query("SELECT * FROM db");
var_dump($busca);

$obj = $busca->fetch_object();
echo print_r($obj);

echo "<br>" . $obj->Usuario;
echo "<br>" . $obj->nome;
echo "<br>" . $obj->senha;

?>
</pre>