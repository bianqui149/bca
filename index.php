<?php
// Token API
$authorization = "";

$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', $authorization));
curl_setopt($ch, CURLOPT_URL, "https://api.estadisticasbcra.com/usd");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($ch);
curl_close($ch);

print_r(json_decode($res, true));