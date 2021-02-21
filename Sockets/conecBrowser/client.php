<!doctype html>
<html class="no-js" lang="pt-PT">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cliente de Sockets</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

</head>

<body>
    <div class=container>

        <h1>Chat</h1>
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
            $port = 243465;
            $chat = 0;
            if (isset($_POST['btnsubmit'])) {
                $msg = $_REQUEST['mensagem'];
                $chat = array($msg);

                $sock = socket_create(AF_INET, SOCK_STREAM, 0);
                socket_connect($sock, $host, $port);
                socket_write($sock, $msg, strlen($msg));

                $replay = socket_read($sock, 1924);
                $replay = trim($replay);
                array_push($chat, $replay);
            }
            echo "</div>\n<h2>Mensagens:</h2>";
            echo "<hr>";
            foreach ($chat as $message) {
                echo date('h:i');
                echo " " . $message;
                echo "<hr>";
            }
            ?>
        </div>
</body>

</html>