<?php
$key = "59eaecd38de24c1c8fe91be41d79518d";
$url = "https://gateway.apiportal.ns.nl/reisinformatie-api/api/v2/stations";

//curl
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_POSTREDIR, 3);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // follow http 3xx redirects
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Ocp-Apim-Subscription-Key: ' . $key . ''
));

$api_execute = curl_exec($ch);

$json = json_decode($api_execute);

//echo "$api_execute";

