<?php


$item = $_GET['item'];
$param = $_GET['param'];
// $url = 'http://192.168.4.70:9200/sd01/mem/total'.$valor;
$url = 'http://192.168.4.70:9200/sd01/'.$item.'/'.$param.'/_source';

$cURL = curl_init();

curl_setopt($cURL, CURLOPT_URL, $url);
curl_setopt($cURL, CURLOPT_HTTPGET, true);

curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Accept: application/json'
));

$result = curl_exec($cURL);



?>