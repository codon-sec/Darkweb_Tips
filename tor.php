<?php
$url = 'https://ipinfo.ip/json';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_PROXY, '127.0.0.1:9050');
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5_HOSTNAME);
curl_setopt($ch, CURLOPT_RETURNTRANSTER, true);
$result = curl_exec($ch);
curl_close($ch);

echo $result;