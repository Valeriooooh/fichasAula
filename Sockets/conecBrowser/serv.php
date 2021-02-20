<?php

$port = 12335;

set_time_limit(0);

$sock = socket_create(AF_INET, SOCK_STREAM, 0);

socket_bind($sock, '127.0.0.1', $port);

socket_listen($sock, 3);

echo "À espera de ligações \n";

class Chat
{
    public function lerLinha()
    {
        return rtrim(fgets(STDIN));
    }
}

do {
    $clientSocket = socket_accept($sock);
    $msg = socket_read($clientSocket, $port);

    $msg = trim($msg);
    echo " Cliente disse: " . $msg . "\n\n";
    $line = new Chat();
    echo "Resposta: ";
    $replay = $line->lerLinha();

    socket_write($clientSocket, $replay, strlen($replay));
} while (true);

socket_close($clientSocket);
socket_close($sock);
