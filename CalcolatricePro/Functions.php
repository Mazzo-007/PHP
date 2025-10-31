<?php
// Funzioni per la calcolatrice
function somma($a, $b) {
    return $a + $b;
}

function sottrazione($a, $b) {
    return $a - $b;
}

function moltiplicazione($a, $b) {
    return $a * $b;
}

function divisione($a, $b) {
    if ($b == 0) {
        return "Errore: Divisione per zero non permessa.";
    }
    return $a / $b;
}
?>