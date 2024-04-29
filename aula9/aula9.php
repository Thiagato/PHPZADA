<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="n1" id="">
        <input type="submit" value="Enviar">
    </form>


    <?php
    
    // $n1= $_GET["n1"];
    // if(isset($_GET["n1"])){

    //     $n1 = $_GET["n1"];
    //     echo "o seu numero é? [$n1]";
    // } else{
    //     $n1 = 0;
    // }
    
    // $n1= isset($_GET["n1"]) ? $_GET["n1"] : 0;

    $n1 = $_GET["n1"] ?? -1;

    session_start();

    echo "o seu numero é: {$n1}";
    echo print_r($_SESSION);

    ?>
</body>
</html>