<?php
set_time_limit(0);
$address = '127.0.0.1';
$port = 54332;

if (($sock = socket_create(AF_INET, SOCK_STREAM, 0)) === false) {
    echo "ERRO - falha na criação do socket " . socket_strerror(socket_last_error()) . "\n";
}

if (socket_bind($sock, $address, $port) === false) {
    echo " Erro na passagem de enderecos e porto para o socket " . socket_strerror(socket_last_error($sock)) . "\n";
}

if (socket_listen($sock) === false) {
    echo "ERRO estabelecer ligação " . socket_strerror(socket_last_error($sock)) . " \n";
} else {
    echo " Ligação estabelecida \n";
}

do {
    if (($msgsock = socket_accept($sock)) === false) {
        echo "ERRO falha na ligação " . socket_strerror(socket_last_error($sock)) . "\n";
        break;
    } else echo " \nConexão com o cliente estabelecida via telnet do aluno Valério 🦆🥕💞🦀\n";
    $msg = "\n Bem vindo à comunicação através de PuTTY - Valério\n";
    $msg2 = "\n Primeira comunicação com PuTTY – Valério!📨📞  ADEUS!👋\n";
    socket_write($msgsock, $msg, strlen($msg));
    socket_write($msgsock, $msg2, strlen($msg2));
    sleep(2);
    socket_close($msgsock);
} while (true);
socket_close($sock);
