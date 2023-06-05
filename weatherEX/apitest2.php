<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>api test</title>
</head>
<body>
    <h1>부산날씨</h1>
</body>
</html>
<?php

$apiKey = "547ffa5e07000f2e854300f7318e0303";
$cityId = "1838519";
$googleApiUrl = "https://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);

$arr = json_decode($response,true);
 
    echo $arr["timezone"] ."<br>";
    echo $arr["id"] ."<br>";
    echo $arr["name"] ."<br>";
    echo $arr["cod"] ."<br>";
    echo sizeof($arr["main"]). "<br>";
    echo $arr["main"]["temp"];

?>