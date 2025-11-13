<?php
function deleteCookie () {
    setcookie("NomeUtente", "", time()-3600);
}
?>