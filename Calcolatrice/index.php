<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: #f0f4f8;
            font-family: 'Segoe UI', Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        h1 {
            color: #2c3e50;
            margin-top: 40px;
        }
        hr {
            width: 60%;
            border: 1px solid #b2bec3;
            margin-bottom: 30px;
        }
        form {
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 16px rgba(44, 62, 80, 0.08);
            display: flex;
            flex-direction: column;
            gap: 15px;
            min-width: 300px;
        }
        input[type="number"], [id="result"] {
            padding: 10px;
            border: 1px solid #b2bec3;
            border-radius: 5px;
            font-size: 1em;
            transition: border 0.2s;
        }
        input[type="number"]:focus, [id="result"]:focus {
            border: 1.5px solid #0984e3;
            outline: none;
        }
        input[type="submit"], [type="button"] {
            background: #0984e3;
            color: #fff;
            border: none;
            padding: 10px 0;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background 0.2s;
        }
        input[type="submit"]:hover, [type="button"]:hover {
            background: #74b9ff;
        }
        label[class="general"] {
            margin-bottom: 5px;
            color: #636e72;
        }
        label[id="result"] {
            margin-bottom: 5px;
            color: #000000ff;
        }
    </style>
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
        <input type="submit" name="Oper" id="somma" value="Somma">
        <input type="submit" name="Oper" id="sott" value="Sottrazione">
        <input type="submit" name="Oper" id="molt" value="Moltiplicazione">
        <input type="submit" name="Oper" id="div" value="Divisione">
        <label for="Risultato" class="general">Risultato:</label>
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
        <label for="Risultato" id="result"><?php echo htmlspecialchars($result ?? '', ENT_QUOTES); ?></label>
    </form>
</body>
</html>