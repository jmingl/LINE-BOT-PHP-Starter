<?php
$access_token = '56lIMjyVC6K8m0mePhsAbLLvkJnlev+24q4XkEGf6mRUvJQdY69/psAbR4HupuhBhnXbmncRYdEBEIrFZgmML//WCwcPtzs4tsO2LY5ZFcp0X+Ahq0m84hMP5WvvcnEfupGrlLKYQ6g/ntBUgThPbQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
