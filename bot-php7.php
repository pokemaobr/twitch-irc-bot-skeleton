<?php

require_once 'config.php';
require_once 'vendor/autoload.php';

$connection = new \Phergie\Irc\Connection();

$seuBot = 'nickDoBot'; //substituir pelo nick do seu bot
$seuCanal = '#seuCanal'; //substituir pelo nome da sua live exemplo #pokemaobr

$connection
    ->setServerHostname('irc.chat.twitch.tv')
    ->setServerPort(6667)
    ->setPassword($password)
    ->setNickname($seuBot)
    ->setUsername($seuBot);

$client = new \Phergie\Irc\Client\React\Client();

$client->on('connect.after.each', function ($connection, $write) {
    global $seuCanal;
    $write->ircJoin($seuCanal);
    $write->ircPrivmsg($seuCanal, 'O bot novo chegou!');
});

$client->on('irc.received', function ($message, $write, $connection, $logger) {

    global $seuCanal;

    if ($message['command'] == 'PRIVMSG') {

        if ((strpos(strtolower($message['params']['text']), '!novobot') === 0)) {

            $write->ircPrivmsg($seuCanal, 'O bot novo chegou!'); //substituir pelo nome da sua live exemplo #pokemaobr

        }

    }

});

$client->run($connection);