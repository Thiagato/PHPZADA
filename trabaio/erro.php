<!DOCTYPE html>
<html>
<head>
    <title>Erro</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
        }
        h1 {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Erro no registro</h1>
    <p>O campo <?php echo $_GET['campo']; ?> não passou na validação.</p>
</body>
</html>
