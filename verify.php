<?php
$access_token = 'tr/TwgTeCozujRLgi4aJVSFIl7bVurKwuBTt9VBPyhzTQTNe97e+N9LBi9w1WE27lO3gSKw/d3x8MWAyiW0ru8nlIeDkgcRMmV2Pu0JBz67+ZAfMcy4ddvruGbyni2IgANd13hRWFjLuGO+uH15fUQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;