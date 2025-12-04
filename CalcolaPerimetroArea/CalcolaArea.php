<?php
    $area = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["l1"]) && isset($_POST["l2"]) && !empty($_POST["l1"]) && !empty($_POST["l2"]) && is_numeric($_POST["l1"]) && is_numeric($_POST["l2"])) {
            $l1 = $_POST["l1"];
            $l2 = $_POST["l2"];
            $area = $l1 * $l2;
        }else {
            $area = "Valori non validi";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Document</title>
</head>
<body>
    <h1>Calcolatore Area</h1>
    <hr>
    <h3>Inserisci i valori del rettangolo:</h3>
    <form action="" method="post">
        <input type="number" name="l1" placeholder="Lato 1" required>
        <input type="number" name="l2" placeholder="Lato 2" required>
        <input type="submit" value="Calcola area">
        <label for="result">L'area è:</label>
        <input type="number" value="<?php echo $area ?? ''; ?>" placeholder="risultato" readonly>
    </form>
</body>
</html>