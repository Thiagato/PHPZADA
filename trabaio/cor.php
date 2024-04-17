<!DOCTYPE html>
<html>
<head>
    <title>Selecionar Cor</title>
    <style>
        body {
            color: black; 
            font-family: Arial, sans-serif; 
        }
        .container {
            width: 50%; 
            margin: 0 auto;
            padding: 20px; 
            background-color: #f2f2f2; 
            border-radius: 10px;
            margin-top: 50px; 
        }
    </style>
</head>
<!-- escolher a corm e caso escolha uma q n tenha vai ser branco e vai começar em branco-->
<body style="background-color:<?php echo isset($_GET['cor']) ? $_GET['cor'] : 'white'; ?>">
<!-- colocar o nome da class para usar dps -->
    <div class="container">
        <h2>Selecionar Cor de Fundo</h2>
        <form method="get">
            <label for="cor">Selecione uma cor:</label>
            <!-- tipo da label color-->
            <input type="color" id="cor" name="cor">
            <br>
          
            <input type="submit" value="Selecionar">
        </form>
    </div>
</body>
</html>
