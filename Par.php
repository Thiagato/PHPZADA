<?php
function ehPar($numero) {
    if ($numero % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

// Chamando a função e imprimindo o resultado
if (ehPar(6)) {
    echo "O número é par.";
} else {
    echo "O número é ímpar.";
}
?>