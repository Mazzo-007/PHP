<?php
    $utente = $_COOKIE["NomeUtente"] ?? false;

    $nome = $_POST["nome"] ?? "";

    if (isset($nome) && !empty($nome)) {
        include 'set-cookie.php';
        setCoockie($nome);
        header("Refresh:0");
    } else {
        include 'delete-cookie.php';
        deleteCookie();
    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Cookie Esercizio</title>
</head>
<body>
    <?php if ($utente) { ?>
        <h2>Benvenuto, <?= $utente ?>!</h2>
        <form action="" method="post">
            <button type="submit">Cancella Cookie</button>
        </form>
    <?php } else { ?>
        <h2>Inserisci il tuo nome</h2>
        <form action="" method="post">
            <input type="text" name="nome" placeholder="nome utente" required>
            <button type="submit">Imposta Cookie</button>
        </form>
    <?php } ?>
</body>
</html>