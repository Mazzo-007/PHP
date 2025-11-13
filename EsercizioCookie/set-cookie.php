<?php
function setCoockie ($nome) {
    if (isset($nome) && !empty($nome)) {
        setcookie("NomeUtente", $nome, time()+3600);
        return "Cookie creato con successo";
    } else {
        return "Valori per cookie errati";
    }
}
?>