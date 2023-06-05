<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>국토 정보</title>

</head>
<body>
    <h1>ㅇㅇ</h1>
    <h2>지역 정보</h2>
<?php 

$apiKey = "k2FhBBQxor2i%2B9pBvFADgh%2B6ld8CDQul1g46DdYsfyg40rzqKGlBNpHWPcgV88Nj0FFBbu2iFfC24Q3cNzUCXg%3D%3D";
$apiUrl = "https://apis.data.go.kr/B551011/KorService1/searchKeyword1?serviceKey=k2FhBBQxor2i%2B9pBvFADgh%2B6ld8CDQul1g46DdYsfyg40rzqKGlBNpHWPcgV88Nj0FFBbu2iFfC24Q3cNzUCXg%3D%3D&numOfRows=20&pageNo=1&MobileOS=ETC&MobileApp=AppTest&_type=json&listYN=Y&arrange=A&keyword=%EC%84%9C%EC%9A%B8&contentTypeId=".$_POST["info"];


$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

echo $_POST["info"];
echo "<br>";

$arr = json_decode($response,true);
 
    echo sizeof($arr["response"]["body"]["items"]["item"])."<br>";
    foreach($arr["response"]["body"]["items"]["item"] as $arr2){
        echo $arr2["addr1"]."<br>";
    }

?>

</body>
</html>