<?php
//Duas maneiras de consumir apis em php
//cURL();
//file_get_contents()

$parametros = array(
    'url' => 'https://ajith-Verify-email-address-v1.p.mashape.com/varifyEmail?email=',
    'email' => 'ramonss.bque@gmail.com'
);


//$response = Unirest\Request::get("https://ajith-Verify-email-address-v1.p.mashape.com/varifyEmail?email=abcdef%40gmail.com",
//    array(
//        "X-Mashape-Key" => "OwWGcRb4DkmshW3oYdjn87S8hIDop1oX8AIjsn6RiJp9m4NW28",
//        "Accept" => "application/json"
//    )
//);

//$obj = json_decode($response);
//$result = file_get_contents('https://ajith-Verify-email-address-v1.p.mashape.com/varifyEmail?email=ramonss.bque@gmail.com');
$curl = curl_init('https://ajith-Verify-email-address-v1.p.mashape.com/varifyEmail?email=ramonss.bque@gmail.com');

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);


var_dump($result);