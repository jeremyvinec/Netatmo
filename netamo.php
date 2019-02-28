<?php

require_once ('./src/Netatmo/autoload.php');
require_once ('config.php');


$client = new Netatmo\Clients\NAApiClient($config);


$username = 'jeremy29410@gmail.com';
$pwd = 'Miw2019objco';
$client->setVariable('username', $username);
$client->setVariable('password', $pwd);
try
{
    $tokens = $client->getAccessToken();
    $refresh_token = $tokens['refresh_token'];
    $access_token = $tokens['access_token'];
    echo $access_token;
}
catch(Netatmo\Exceptions\NAClientException $ex)
{
    echo "An error occcured while trying to retrive your tokens \n";
}

