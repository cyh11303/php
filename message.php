<?php
include('main/messagetab.php');

date_default_timezone_set('Asia/Seoul');
$date=date("Y/m/");
// echo $_GET['a'];
$_GET['weather']=$_GET['a']; //case_weather의 수식이 $_GET['weather']이기에 $_GET['a']의 값을 그대로 대입하여 case문 이용가능토록 함.
include('main/case_weather.php');
// echo $_GET['weather'];
// echo "<br>";
$Area=urlencode($_GET['weather']); //case문을 통해 반환받은 $_GET['weather']를 url에 사용하기위하여 문자열을 인코딩을 함
// echo $Area;
// echo "<br>";
if($Area==True){
    $messageUri="https://apis.data.go.kr/1741000/DisasterMsg4/getDisasterMsg2List?serviceKey=k2FhBBQxor2i%2B9pBvFADgh%2B6ld8CDQul1g46DdYsfyg40rzqKGlBNpHWPcgV88Nj0FFBbu2iFfC24Q3cNzUCXg%3D%3D&pageNo=1&numOfRows=10&type=JSON&create_date=".$date."01%2000:00:00&location_name=".$Area;
}else{
    $messageUri="https://apis.data.go.kr/1741000/DisasterMsg4/getDisasterMsg2List?serviceKey=k2FhBBQxor2i%2B9pBvFADgh%2B6ld8CDQul1g46DdYsfyg40rzqKGlBNpHWPcgV88Nj0FFBbu2iFfC24Q3cNzUCXg%3D%3D&pageNo=1&numOfRows=10&type=JSON&create_date=".$date."01%2000:00:00&location_name=";
}
echo "<h3>".$_GET['a']."의 재난문자정보입니다.</h3>";
include('API/emer.php');//재난API
// echo $messageUri;
?>
