<?php

$url = "https://sport.livedoomovies.com:4431/02_PremierHD2_720p/chunklist.m3u8&referer=&";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Referer: https://www.movie87hd.com",
   "User-Agent: Mozilla/5.0 (Windows NT 6.3; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
preg_match('/qualities":({.+?}),"/', $resp, $matches);
$arr = json_decode($matches[1], true);
    $m3u8_raw = $arr['auto'][0]['url'];
header("Location: ".$m3u8_raw);
?>
