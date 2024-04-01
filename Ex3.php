<?php

function isPerfectSquare($number) {
    $sqrt = sqrt($number);
    return ($sqrt - floor($sqrt)) == 0;
}

$number = 16; // O número que você deseja verificar

if (isPerfectSquare($number)) {
    echo "$number tem uma raiz quadrada perfeita.";
} else {
    echo "$number não tem uma raiz quadrada perfeita.";
}

?>
