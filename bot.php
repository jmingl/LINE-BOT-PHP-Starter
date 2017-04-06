<?php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '6d45a8b013b7f2909217fa5a87f00d3c';
$access_token  = '56lIMjyVC6K8m0mePhsAbLLvkJnlev+24q4XkEGf6mRUvJQdY69/psAbR4HupuhBhnXbmncRYdEBEIrFZgmML//WCwcPtzs4tsO2LY5ZFcp0X+Ahq0m84hMP5WvvcnEfupGrlLKYQ6g/ntBUgThPbQdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
$bot->sendMessageNew('Uca78849ef02f197ed6625d8726fd0fa1', 'Hello World !!');

if ($bot->isSuccess()) {
	echo 'Succeeded!';
	exit();
}

// Failed
echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
exit();
