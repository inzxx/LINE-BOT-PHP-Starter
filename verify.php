<?php
$access_token = 'MkWZ5RMQZ7rCnrCgwjrMHmQciiEvtLMHFRCIB648Hi4oQO4iUAJf4KDbFNS8APOAC2oJ+aqjspsP3vNCmKyjvJ25sYjZ/9iXfriGeNyn3mlDRLClmHXSPNKuKS0M4AHo+1OvxQLGUvmIkaG+6AmkzQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;