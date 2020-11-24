<?php
$con = mysqli_connect("localhost", $_POST["userf"], $_POST["passwdf"], "BD_Valerio");
if (!$con) {
    echo "erro";
}
