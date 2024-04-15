<?php
// Definindo uma função com um parâmetro de comprimento variável
function minhaFuncao(...$x){
    // Iterando sobre os argumentos passados para a função
    foreach ($x as $valor) {
        echo $valor . "<br>";
    }
}

// Chamando a função com diferentes números de argumentos
minhaFuncao(1, 2, 3, 4);
minhaFuncao("a", "b", "c");
minhaFuncao(10, 20);
?>
