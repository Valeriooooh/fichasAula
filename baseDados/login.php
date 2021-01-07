<?php
session_start();
?>
<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <div class="container">

        <h1>Formulario</h1>

        <form method="post" action="lig.php">
            <div class="form-group">
                <label for="userf">Utilizador</label>
                <input class="form-control" type="text" name="userf" value="user" />
            </div>
            <div class="form-group">
                <label for="passwdf">Password</label>
                <input class="form-control" type="password" name="passwdf" />
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="LogIn" />
            </div>
        </form>
    </div>
</body>

</html>