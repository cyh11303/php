<?php
include('main/weathertab.php');
?>
<?php

$host = 'localhost';
$user = 'root';
$pw = '';
$db_name = 'test';

$connect= new mysqli($host, $user, $pw, $db_name);
$connect->set_charset("utf8");
if(mysqli_connect_errno()){
    echo '데이터베이스 접속 실패';
    echo mysqli_connect_error();
  } else {
    // echo "접속 성공<br>";
    // echo $_POST["weather"] ;
    // echo "<br>";
  }

//echo $_GET["weather"] ;
//echo "<br>";
include('main/case_weather.php');
echo "<style>
.b1{
margin: 20px
}
</style>";
echo "<div class=b1>";
echo "<h4><center>";
echo "   ";
echo "<font color='blue'>";
if($_GET['location']==TRUE){
echo $_GET['location'];
echo "</font>";

}
echo " > ";
echo "<font color='blue'>";
echo $_GET['weather'];
echo "</font>";
echo "</center></h4>";
echo "</div>";
//echo $_GET["weather"] ;
//echo "<br>";
//echo "<br>";
$sql = "select * from area where si='".$_GET["weather"]."'";"";
//$sql = "select * from area where si like '%".$_GET["weather"]."%'";"";
$result = mysqli_query($connect, $sql);
while($row = mysqli_fetch_array($result)){
    //echo $row['nx']." ".$row['ny']." ".$row['lng']." ".$row['lat'];
    $nx=$row['nx'];
    $ny=$row['ny'];
}

date_default_timezone_set('Asia/Seoul'); //date함수의 기준 값을 서울을 기준으로 설정
$date=date("Ymd");
$time=date("H");

//echo $time;
//echo "<br>";
// 매시간 30분에 예보 생성, 생성된 예보의 API는 45분부터 사용가능
if(date("i")<45){ //45분 이전에 사용자가 날씨를 검색 할 시 1시간 전의 예보를 사용
    if (($time/10)<1){ 
        $time-=1;
        $time="0$time";
        $time.="30";
    }else{
        $time-=1; 
        $time.="30";
    }
}else{            //45분~60분일 경우 새롭게 생성된 예보를 그대로 사용
    $time.="30";
}


$apiUrl = "https://apis.data.go.kr/1360000/VilageFcstInfoService_2.0/getUltraSrtFcst?serviceKey=k2FhBBQxor2i%2B9pBvFADgh%2B6ld8CDQul1g46DdYsfyg40rzqKGlBNpHWPcgV88Nj0FFBbu2iFfC24Q3cNzUCXg%3D%3D&pageNo=1&numOfRows=100&dataType=json&base_date=".$date."&base_time=".$time."&nx=".$nx."&ny=".$ny."";
//초단기 예보 "https://apis.data.go.kr/1360000/VilageFcstInfoService_2.0/getUltraSrtFcst?serviceKey=k2FhBBQxor2i%2B9pBvFADgh%2B6ld8CDQul1g46DdYsfyg40rzqKGlBNpHWPcgV88Nj0FFBbu2iFfC24Q3cNzUCXg%3D%3D&pageNo=1&numOfRows=100&dataType=json&base_date=20230512&base_time=1800&nx=".$nx."&ny=".$ny."";
//단기"https://apis.data.go.kr/1360000/VilageFcstInfoService_2.0/getVilageFcst?serviceKey=k2FhBBQxor2i%2B9pBvFADgh%2B6ld8CDQul1g46DdYsfyg40rzqKGlBNpHWPcgV88Nj0FFBbu2iFfC24Q3cNzUCXg%3D%3D&pageNo=1&numOfRows=20&dataType=JSON&base_date=20230511&base_time=0500&nx=".$nx."&ny=".$ny."";
//echo $apiUrl;

$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
$arr = json_decode($response,true);
$k=0;
$time1=date("H");
$time1.="00"; //현재시간이 오후 10시20분일때 time1의 값은 2200이 되도록 설정

// echo "<style>
// .box52 {
// margin: 2em 1em;
// padding: 1em 2em;
// background-color:#ffd8b4;
// box-shadow: 0 0 6px 1px #faccbc, 0 0 6px 1px #faccbc inset;
// border-radius: 30px;
// }
// </style>";
echo "<style>
.box52 {
    margin:50px 250px;
    padding: 1em 2em;
    background-color:#FFFFFF;
    box-shadow: 0 0 6px 1px #e7dbdb, 0 0 6px 1px #e7dbdb inset;
    border-radius: 30px;
    </style>";
echo "<div class='box52'>";
for($i=12; $i<18; $i++){ //총 6번 반복하며 각 값을 출력
    $arr2= $arr["response"]["body"]["items"]["item"][$i];

    if($time1+($i%6)*100>=2400){ //현재시간에 1시간씩 더했을 때 24시간이상이면 날짜+1
        $date=$arr2["baseDate"]+1;
        echo $date;
        echo "일 ";
    }else{
        $date=$arr2["baseDate"];
        echo $date;
        echo "일 ";
    }
    echo $arr2["fcstTime"];
    echo "시 ".$_GET["weather"]."의 1시간 강수량은 ";
    echo $arr2["fcstValue"];
    echo "입니다.";
    echo "<br>";
    //var_dump($date);
    
}

echo "</div>";
echo "<div class='box52'>";
for($i=18; $i<24; $i++){
    $arr2= $arr["response"]["body"]["items"]["item"][$i];

    if($time1+($i%6)*100>=2400){ //현재시간에 1시간씩 더했을 때 24시간이상이면 날짜+1
        $date=$arr2["baseDate"]+1;
        echo $date;
        echo "일 ";
    }else{
        $date=$arr2["baseDate"];
        echo $date;
        echo "일 ";
    }
    echo $arr2["fcstTime"];
    echo "시 ".$_GET["weather"]."의 날씨: ";
    switch($arr2["fcstValue"]){
        case $arr2["fcstValue"]==1:
            $arr2["fcstValue"]="맑음";
            echo "<img src='photo/sun1.png'>";
            echo "<br>";
            break;
        case $arr2["fcstValue"]==2:
            $arr2["fcstValue"]="구름조금";
            echo "<img src='photo/weather.png'>";
            echo "<br>";
            break;
        case $arr2["fcstValue"]==3:
            $arr2["fcstValue"]="구름많음";
            echo "<img src='photo/sky.png'>";
            echo "<br>";
            break;
        case $arr2["fcstValue"]==4:
            $arr2["fcstValue"]="흐림";
            echo "<img src='photo/cloudy1.png'>";
            echo "<br>";
            break;
    }
    // echo $arr2["fcstValue"];
    // echo "입니다.";
    // echo "<br>";
}
echo "</div>";
echo "<div class='box52'>";
for($i=24; $i<30; $i++){
    $arr2= $arr["response"]["body"]["items"]["item"][$i];
    //1시간 온도 T1H
    if($time1+($i%6)*100>=2400){ //현재시간에 1시간씩 더했을 때 24시간이상이면 날짜+1
        $date=$arr2["baseDate"]+1;
        echo $date;
        echo "일 ";
    }else{
        $date=$arr2["baseDate"];
        echo $date;
        echo "일 ";
    }
    echo $arr2["fcstTime"];
    echo "시 ".$_GET["weather"]."의 온도는 ";
    echo $arr2["fcstValue"];
    echo "도입니다.";
    echo "<br>";
}
echo "</div>";
    // for($i=12; $i<30; $i++){
        //if($i>=12 || $i<18){
        //1시간 강수량 RN1
    //     $arr2= $arr["response"]["body"]["items"]["item"][$i];
    //     //if($i>=12 || $i<18){
    //         //1시간 강수량 RN1
    //     echo $arr2["baseDate"];
    //     echo "일 ";
    //     echo $arr2["fcstTime"];
    //     echo "시의 1시간 강수량은 ";
    //     echo $arr2["fcstValue"];
    //     echo "입니다";
    //     echo "<br>";
    // }elseif($i>=18||$i<24){
    //     $arr2= $arr["response"]["body"]["items"]["item"][$i];
    //     //날씨 상태 SKY
    //     echo $arr2["baseDate"];
    //     echo "일 ";
    //     echo $arr2["fcstTime"];
    //     echo "시의 날씨는 ";
    //     echo $arr2["fcstValue"];
    //     echo "입니다";
    //     echo "<br>";
    // }else{
    //     $arr2= $arr["response"]["body"]["items"]["item"][$i];
    //     //1시간 온도 T1H
    //     echo $arr2["baseDate"];
    //     echo "일 ";
    //     echo $arr2["fcstTime"];
    //     echo "시의 온도는 ";
    //     echo $arr2["fcstValue"];
    //     echo "입니다";
    //     echo "<br>";
    // }
//단기예보일
// $arr = json_decode($response,true);
 
// $arr2= $arr["response"]["body"]["items"]["item"][0];

// echo $arr2["baseDate"];
// echo "일 ";
// echo $arr2["fcstTime"];
// echo "의 온도는 ";
// echo $arr2["fcstValue"];
// echo "도 입니다";
// echo "<br>";

mysqli_close($connect)

?>


</body>
</html>