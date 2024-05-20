<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SMARTPHONE</h1>


    <?php
    
    require_once "aula12.php";
    
    $q = "SELECT * FROM smartphone";
    // $q = "SELECT * FROM empresa";
    
    $busca = $banco->query($q);
    var_dump($busca);

    // $obj_smartphone = $busca->fetch_object();
    // echo print_r($obj_smartphone);
    
    
    ?>

<table>
  <tr>
    <th>cod</th>
    <th>nome</th>
    <th>empresa</th>
  </tr>
  <tr>
   <?php
   while($obj_smartphone = $busca->fetch_object()){
     echo "<tr>";
     echo "<td>$obj_smartphone->cod</td>";
     echo "<td>$obj_smartphone->nome</td>";
     echo "<td>$obj_smartphone->empresa</td>";
     echo "<\tr>";
    }
    ?>
  </tr>
</table>
</body>
</html>