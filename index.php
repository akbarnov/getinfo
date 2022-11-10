<!DOCTYPE html>
<html>
<body>

<?php

$country="";
$region="";
$city="";
$provider="";
$loc="";

$PublicIP = $_SERVER['REMOTE_ADDR'];
$json     = file_get_contents("http://ipinfo.io/$PublicIP/geo");
$json     = json_decode($json, true);
$country  = $json['country'];
$region   = $json['region'];
$city     = $json['city'];
$provider = $json['org'];
$loc      = $json['loc'];

$arr = explode('(', $_SERVER['HTTP_USER_AGENT']);
$arr1 = explode(')', $arr[1]);
$arr2 = explode(';', $arr1[0]);

echo "Country : " . $country . "</br>";
echo "Region : " . $region . "</br>";
echo "City : " . $city . "</br>";
echo "IP : " . $PublicIP . "</br>";
echo "ISP : " . substr($provider, 7) . "</br>";
echo "Loc : " . $loc . "</br>";

echo "Device : " . $arr2[1] . ", " . $arr2[2] . "</br>";

?>

</body>
</html>