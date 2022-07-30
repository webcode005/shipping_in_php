<?php 

$timestamp    = time();
$appID        = 9859;
$key          = 'jauXND3eJII=';
$secret       = 'Go4cgT0Ns1AOLEKmUDz67/93KgtEbk8x2x540yE6/85z734dC8w8Nolyr5P6Hd3B1ZMo3zaAfccOWPuQNDazFA==';

$sign = "key:".$key."id:".$appID.":timestamp:".$timestamp;
$authtoken = rawurlencode(base64_encode(hash_hmac('sha256', $sign, $secret, true)));  
echo $authtoken;
echo "<br><br>";
echo $timestamp;

//token

//gVTHRJ40dMDenYXs%2FbNGtOrb7NKmdgzwDG9U7tmlCSU%3D1651862697
?>

