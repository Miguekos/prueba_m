<?php


$valor = $_GET['valor'];
$url = 'http://192.168.56.102:61208/api/2/'.$valor;


// $url = 'http://192.168.56.102:61208/api/2/mem';


$cURL = curl_init();

curl_setopt($cURL, CURLOPT_URL, $url);
curl_setopt($cURL, CURLOPT_HTTPGET, true);

curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Accept: application/json'
));

$result = curl_exec($cURL);


?>