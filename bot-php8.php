<?php

require_once 'config.php';
require_once 'vendor/autoload.php';

$connection = new \Phergie\Irc\Connection();

$connection
    ->setServerHostname('irc.chat.twitch.tv')
    ->setServerPort(6667)
    ->setPassword($password)
    ->setNickname('nomedoseubot') //substituir pelo nome do seu bot
    ->setUsername('nomedoseubot'); //substituir pelo nome do seu bot

$client = new \Phergie\Irc\Client\React\Client();

$client->on('connect.after.each', function ($connection, $write) {
    $write->ircJoin('#seucanal'); //substituir pelo nome da sua live exemplo #pokemaobr
    $write->ircPrivmsg('#seucanal', 'O bot novo chegou!'); //substituir pelo nome da sua live exemplo #pokemaobr
});

$client->on('irc.received', function ($message, $write, $connection, $logger) {

    if ($message['command'] == 'PRIVMSG') {

        if (str_starts_with($message['params']['text'],'!botnovo')) {

            $write->ircPrivmsg('#seucanal', 'O bot novo chegou!'); //substituir pelo nome da sua live exemplo #pokemaobr

        }

    }

});

$client->run($connection);