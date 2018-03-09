<?php 
// $json = json_decode(file_get_contents('http://192.168.0.103:61208/api/2/mem'),true);

// echo $json['free'];
// echo $json['total'];
// $sd01_cpu = json_decode(file_get_contents('http://192.168.0.101:61208/api/2/cpu'),true);
// echo "Memoria Disponible ".$input['available'];
// $sd01_load = json_decode(file_get_contents('http://192.168.0.101:61208/api/2/load'),true);
// echo "Memoria Disponible ".$input['available'];




/* 1 -> OBTENIENDO EL CONTENIDO */
// $json_file = json_decode(file_get_contents('http://192.168.0.102:61208/api/2/mem'));

// $json = json_decode("http://192.168.0.102:61208/api/2/mem", true);


// $json same as example object above
// pass true to convert objects to associative arrays
// $book = json_decode($json, true);
// access title of $book array
// echo $book['title']; // JavaScript: The Definitive Guide



$valor = $_GET['mem'];
$url = 'http://192.168.0.102:61208/api/2/'.$valor;

$cURL = curl_init();

curl_setopt($cURL, CURLOPT_URL, $url);
curl_setopt($cURL, CURLOPT_HTTPGET, true);

curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Accept: application/json'
));

$result = curl_exec($cURL);

// $mem = $_GET['mem'];
// echo 'Hola ' . htmlspecialchars($_GET["nombre"]) . '!';
// echo $q;

// if ($q == "asd") {
// 	$result = curl_exec($cURL);
// }





// curl_close($cURL);



// print_r($result);


// $json = json_decode($result, true);
// print_r($json);

// echo $json['free'];


// $url1 = 'http://192.168.0.103:61208/api/2/cpu';

// $cURL1 = curl_init();

// curl_setopt($cURL1, CURLOPT_URL, $url1);
// curl_setopt($cURL1, CURLOPT_HTTPGET, true);

// curl_setopt($cURL1, CURLOPT_HTTPHEADER, array(
//     'Content-Type: application/json',
//     'Accept: application/json'
// ));

// $result1 = curl_exec($cURL1);



// $url2 = 'http://192.168.0.103:61208/api/2/load';

// $cURL2 = curl_init();

// curl_setopt($cURL2, CURLOPT_URL, $url2);
// curl_setopt($cURL2, CURLOPT_HTTPGET, true);

// curl_setopt($cURL2, CURLOPT_HTTPHEADER, array(
//     'Content-Type: application/json',
//     'Accept: application/json'
// ));

// $result2 = curl_exec($cURL2);



?>


