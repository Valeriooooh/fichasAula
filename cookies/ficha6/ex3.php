<?php
if (!isset($_COOKIE["Numero_visitas"])) {
    $n = 1;
    setcookie("Numero_visitas", $n, time() + 60 * 60 * 24 * 365);
}
$n = $_COOKIE["Numero_visitas"];
echo $n;
$n++;
setcookie("Numero_visitas", $n, time() + 60 * 60 * 24 * 365);
