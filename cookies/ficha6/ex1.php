<?php

setcookie("Mycookie", "Diogo Valério", time()+60 * 60 * 10);
echo    $_COOKIE["Mycookie"];
?>
