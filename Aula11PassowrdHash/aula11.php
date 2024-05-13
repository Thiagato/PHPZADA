<?php


// echo password_hash("senha123", PASSWORD_DEFAULT);



$hash = '$2y$10$mR.kGmCJ1k0DoYBjY40IquuMzqtERo1rX/XRG/OuNa09QME1wohx6';

if(password_verify('senha123' , $hash)){
    echo '<br>senha passou';
}  else {
    echo "<br>NÃOOOOOOOOOOOOOOOOOOOOOOO";
}

$_2=2+2; 
?>