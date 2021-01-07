<?php

session_start();
$_SESSION["Clube"] = "Leixoes";
$_SESSION["Jogador"] = "Toze";
/*
echo "id da sessão -> " . session_id() . "<br>";

foreach ($_SESSION as $i => $value) {
    echo $i . "->" . $value . "<br>";
}
*/
unset($_SESSION);
session_destroy();
