<!doctype html>
<html class="no-js" lang="pt-PT">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Untitled</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

</head>

<body>
    <div class=container>

        <h1>Olá, mundo!</h1>
        <form method="POST">
            <div class="form-group">
                <label for="Mensagem">Mensagem</label>
                <input type="text" class="form-control" name="mensagem" placeholder="Escreva algo">
            </div>
            <button type="submit" name="btnsubmit" class="btn btn-primary">Enviar</button>
        </form>
        <div>

            <?php
            $host = "127.0.0.1";
            $port = 12335;
            if (isset($_POST['btnsubmit'])) {
                $msg = $_REQUEST['mensagem'];
                $sock = socket_create(AF_INET, SOCK_STREAM, 0);
                socket_connect($sock, $host, $port);
                socket_write($sock, $msg, strlen($msg));

                global $replay;
                $replay = socket_read($sock, 1924);
                $replay = trim($replay);
                $replay = "Resposta: " . $replay;
            }
            ?>
        </div>
        <h2>Resposta:</h2>
        <textarea rows="10" cols="40">
<?php
global $replay;
echo $replay;
?>
</textarea>

    </div>
</body>

</html>