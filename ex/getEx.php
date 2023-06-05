
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>기상청 날씨 API 연습</title>

</head>
<body>
    <h1>기상청 날씨</h1>
    <h2>지역 날씨</h2>
<?php 
$apiKey = "k2FhBBQxor2i%2B9pBvFADgh%2B6ld8CDQul1g46DdYsfyg40rzqKGlBNpHWPcgV88Nj0FFBbu2iFfC24Q3cNzUCXg%3D%3D";

$apiUrl = "https://apis.data.go.kr/1360000/VilageFcstInfoService_2.0/getVilageFcst?serviceKey=k2FhBBQxor2i%2B9pBvFADgh%2B6ld8CDQul1g46DdYsfyg40rzqKGlBNpHWPcgV88Nj0FFBbu2iFfC24Q3cNzUCXg%3D%3D&pageNo=1&numOfRows=20&dataType=JSON&base_date=" . $_POST["date"]. "&base_time=".$_POST["time"]."&nx=".$_POST["nx"]."&ny=".$_POST["ny"]."";

// echo "$_POST[date]", "$_POST[time]", "$_POST[nx]", "$_POST[ny]";
// echo "<br>";
// echo $apiUrl;

$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);



$arr = json_decode($response,true);
 
$arr2= $arr["response"]["body"]["items"]["item"];

echo $arr2[0]["baseDate"];
echo "일 ";
echo $arr2[0]["fcstTime"];
echo "의 온도는 ";
echo $arr2[0]["fcstValue"];
echo "도 입니다";
echo "<br>";
// echo "하루 최저기온은 "$arr2[0]["baseDate"]"";
// echo "하루 최고기온은 "$arr2[0]["baseDate"]"";
    

?>

</body>
</html>