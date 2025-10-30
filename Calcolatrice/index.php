<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["num1"]) || empty($_POST["num2"])) {
        $result = "Per favore, inserisci entrambi i numeri.";
    } elseif (!is_numeric($_POST["num1"]) || !is_numeric($_POST["num2"])) {
        $result = "Per favore, inserisci valori numerici validi.";
    } else {
        include"Functions.php";
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $oper = $_POST['Oper'];

        switch ($oper) {
            case "Somma":
                $result = somma($num1, $num2);
                break;
            case "Sottrazione":
                $result = sottrazione($num1, $num2);
                break;
            case "Moltiplicazione":
                $result = moltiplicazione($num1, $num2);
                break;
            case "Divisione":
                $result = divisione($num1, $num2);
                break;
            default:
                $result = "Operazione non valida";
        }
    }
}    
?>
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
        <label for="Num1" class="general">Numero1:</label>
        <input type="number" name="num1" id="num1" value="<?php echo htmlspecialchars($_POST['num1'] ?? '', ENT_QUOTES); ?>" required>
        <label for="Num2" class="general">Numero2:</label>
        <input type="number" name="num2" id="num2" value="<?php echo htmlspecialchars($_POST['num2'] ?? '', ENT_QUOTES); ?>" required>
        <label for="Operatore" class="general">Operatore:</label>
        <select name="Oper" id="Operator">
            <option value="Somma">Somma</option>
            <option value="Sottrazione">Sottrazione</option>
            <option value="Moltiplicazione">Moltiplicazione</option>
            <option value="Divisione">Divisione</option>
        </select>
        <input type="submit" value="Calcola">
        <label for="Risultato" class="general">Risultato:</label>   
        <label for="Risultato" id="result"><?php echo $result ?? "";?></label>
    </form>
</body>
</html>