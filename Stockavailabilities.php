<?php
/*
 *
 * Blaha Petr   Stockavailabilities.php
 * version 0.1
 * programing petrbla@gmail.com
 * vytvoreno  09 2022
 *
 */
$tokenn = token();
$url = "https://api.malfini.com/api/v4/product/availabilities";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$headers = array("Accept: application/json","Authorization: Bearer $tokenn",);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$resp = curl_exec($curl);
curl_close($curl);

var_dump($resp);
