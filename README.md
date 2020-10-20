# Twitch IRC Chatbot Skeleton

> Base do pokemaobrbot na Twitch do [pokemaobr](https://twitch.tv/pokemaobr)

## Instalação

O método de instalação indicado é pelo [composer](http://getcomposer.org). O ideal é usar o PHP 7.3 ou superior.

```
composer install
```
Você pode criar uma conta nova para seu bot na [twitch](https://twitch.tv).

Você deve gerar uma chave oAuth2 para a conta criada do seu bot da twitch. Com a conta do bot da twitch logado, clique [aqui](https://twitchapps.com/tmi/) 


Depois disso, você deverá renomear o arquivo config-sample.php para config.php. Ajustando a variável desse jeito:

```
$password = 'oauth:jsdahfasdhf98457934857-234'; 
```

Onde a parte depois de **oauth:** é a chave gerada.

Existem 2 arquivos de sample de bot, um para ser usado caso você utilize PHP 7.3 (bot-php7.php) ou superior e outro para PHP 8.0 (bot-php8.php).

Nesses arquivos você deve alterar os valores das variáveis:

```
$nick = 'nick do seu bot';
$canal = '#seucanal';
```

Após isso é só você chamar o bot no seu terminal.

```
php bot-php7.php
```

ou

```
php bot-php8.php
```

## Lives

Fazemos lives de código e entretenimento para devs em: [twitch.tv/pokemaobr](https://twitch.tv/pokemaobr)


## Agradecimentos

Agradecemos toda a galera da live que ajudou na implementação, divulgação e utilização desse bot. Só alegria.