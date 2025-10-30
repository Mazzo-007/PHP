<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <h1>Calcolatrice</h1>
    <hr>
    <h3>Inserisci i due numeri e seleziona l'operazione da svolgere</h3>
    
    <form action="index.php" method="post">
        <input type="number" name="num1" id="num1" value="<?php echo $_POST['num1'] ?? '0'; ?>" required>
        <button type="button" id="btn" name="oper" Value="somma">+</button>
        <button type="button" id="btn" name="oper" value="sottra">-</button>
        <button type="button" id="btn" name="oper" value="molti">*</button>
        <button type="button" id="btn" name="oper" value="divi">/</button>
        <input type="submit" value="=">
    </form>
</body>
</html>