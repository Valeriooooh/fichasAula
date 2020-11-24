<?php

setcookie("esad", "Escola Secundária António Damásio", time() + 60 * 60 * 24 * 30);
echo $_COOKIE["esad"];
