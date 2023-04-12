


<?php
echo  $_POST["area"]; //입력 받은 지역값 
echo "<br>";
echo  $_POST["id"] ; //입력 받은 지역정보값
$Area=urlencode($_POST["area"]);  //지역값을 인코딩하여 변환
echo $Area;
echo "<br>";
$apiUri= "https://apis.data.go.kr/B551011/KorService1/searchKeyword1?serviceKey=k2FhBBQxor2i%2B9pBvFADgh%2B6ld8CDQul1g46DdYsfyg40rzqKGlBNpHWPcgV88Nj0FFBbu2iFfC24Q3cNzUCXg%3D%3D&numOfRows=10&pageNo=1&MobileOS=ETC&MobileApp=AppTest&_type=json&listYN=Y&arrange=A&keyword=". $Area ."&contentTypeId=". $_POST["id"]."";

echo "<br>";
echo $apiUri;
echo "<br>";


$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $apiUri);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

$arr = json_decode($response,true);
 
    foreach($arr["response"]["body"]["items"]["item"] as $arr2){
        echo $arr2["title"]."<br>";
        echo $arr2["addr1"]."<br>";
    
    }
?>