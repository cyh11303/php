<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>location API</title>
</head>
<body>
    <h1>지역의 정보</h1><br>

</body>
</html>
<?php


$apiKey = "k2FhBBQxor2i%2B9pBvFADgh%2B6ld8CDQul1g46DdYsfyg40rzqKGlBNpHWPcgV88Nj0FFBbu2iFfC24Q3cNzUCXg%3D%3D";

$locationApiUrl = "https://apis.data.go.kr/B551011/KorService1/areaCode1?serviceKey=CQ8PgphTMXY8mCu7Nt5r1670d%2F%2BCD5yw4%2F7Rnr%2FIQbvVLQD0Cv8eKuY2q4dwaa883ozv4dEennV5FHvxO9DmSA%3D%3D&numOfRows=10&pageNo=1&MobileOS=ETC&MobileApp=location%20API&areaCode=" . $_POST["cityid"] . "&_type=json";


$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $locationApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

$arr = json_decode($response,true);
 
    echo sizeof($arr["response"]["body"]["items"]["item"])."<br>";
    foreach($arr["response"]["body"]["items"]["item"] as $arr2){
        echo $arr2["name"]."<br>";
    }



?>