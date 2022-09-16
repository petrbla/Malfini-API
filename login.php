<?php
/*
 *
 * Blaha Petr   malfini-login.php
 * version 0.1
 * programing petrbla@gmail.com
 * vytvoreno  07 2022
 *
 */


$url="https://api.malfini.com/api/v4/api-auth/login/";
$userdata=array("username"=>"XXXXX","password"=>"XXXX");
#JSON encode the params
$topup_str=json_encode($userdata);
#Curl init
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: '.strlen($topup_str)
    )
);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $topup_str);
$loginapi = curl_exec($ch);

#Ensure to close curl
curl_close($ch);

#For verbosity
$loginapid = json_decode($loginapi);
$access_token="$loginapid->access_token";
$refresh_token="$loginapid->refresh_token";
$token_type="$loginapid->token_type";
$expires_in="$loginapid->expires_in";
