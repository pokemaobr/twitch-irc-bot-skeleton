<?php

require_once 'config.php';
require_once 'vendor/autoload.php';

$nickBot = 'nickDoBot'; //substituir pelo nick do seu bot
$canal = '#seuCanal'; //substituir pelo nome da sua live exemplo #pokemaobr

$connection = new \Phergie\Irc\Connection();

$connection
    ->setServerHostname('irc.chat.twitch.tv')
    ->setServerPort(6667)
    ->setPassword($password)
    ->setNickname($nickBot)
    ->setUsername($nickBot);

$client = new \Phergie\Irc\Client\React\Client();

$client->on('connect.after.each', function ($connection, $write) {
    global $canal;
    $write->ircJoin($canal);
    $write->ircPrivmsg($canal, 'O bot novo chegou!');
});

$client->on('irc.received', function ($message, $write, $connection, $logger) {

    global $canal;

    if ($message['command'] == 'PRIVMSG') {

        if (str_starts_with($message['params']['text'],'!botnovo')) {

            $write->ircPrivmsg($canal, 'O bot novo chegou!');

        }

    }

});

$client->run($connection);