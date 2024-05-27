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
    
    require_once "Banco.php";

    // s = smartphone
    // e = empresa
    // selecione o cod da tabela de outra tabela de smartphone 
    // selecione o nome da tabela de outra tabela de smarthpone
    // o s.nome q é o nome do celular é renomeado como smartNome  
    // e o e.nome que é o nome das empresas é renomeado como empresa 
    // transformar smartphone em s
    // entra na tabela empresa e renomea para e 
    // e transforma o s.empresa em s.cod

    $q = "SELECT s.cod as cod_smart, s.nome AS smartNome, e.nome AS empresa 
    FROM smartphone s JOIN empresas e ON e.cod = s.empresa";
    // $q = "SELECT * FROM empresa";
    
    $busca = $banco->query($q);
    echo print_r($busca);

    
    //$obj_smartphone = $busca->fetch_object(); 
    // echo print_r($obj_smartphone);

    // $sql = "SELECT tabela1.coluna1, tabela1.coluna2, tabela2.coluna3
    //     FROM tabela1
    //     INNER JOIN tabela2 ON tabela1.chave = tabela2.chave";
    
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
     echo "<td>$obj_smartphone->cod_smart</td>";
     echo "<td>$obj_smartphone->smartNome</td>";
     echo "<td>". $obj_smartphone->empresa ."</td>";
     echo "<td> <a href=\"Editar.php?p=" .$obj_smartphone->cod_smart . "\">editar</a  ></td>";
     echo "<\tr>";

    }

  


    ?>
  </tr>
</table>
</body>
</html>