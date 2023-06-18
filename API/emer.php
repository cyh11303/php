<?php
ini_set( "display_errors", 0 ); //오류문을 출력하지 않게하는 문장
// echo "재난문자확인 정보<p>";
echo "<style>
.box52 {
margin:50px 250px;
padding: 1em 2em;
background-color:#FFFFFF;
box-shadow: 0 0 6px 1px #e7dbdb, 0 0 6px 1px #e7dbdb inset;
border-radius: 30px;
}
</style>";
echo "<div class=b1>";
$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_HEADER, 0);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch1, CURLOPT_URL, $messageUri);
curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch1, CURLOPT_VERBOSE, 0);
curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
$response1 = curl_exec($ch1);
$arr2= json_decode($response1,true);
$n=date('n'); //앞에 0이 붙지않은 채 월을 표시
$j=date('j'); //앞에 0이 붙지않은 채 일을 표시

if($arr2["RESULT"]==True){  //전송된 재난문자확인 정보가 없는 경우
    echo "".$n."월 1일부터 ".$j."일까지 ".$_GET["weather"]."에 전송된 재난문자확인정보가 없습니다.";
}else{                      //전송된 재난문자확인 정보가 있는 경우
    foreach($arr2["DisasterMsg2"][1]["row"] as $arr3){
        echo "<div class='box52'>";
        echo $arr3["create_date"]."<br>"; //재난문자확인 수신 날짜
        echo $arr3["location_name"]."<br>"; //재난이 발생한 주소
        echo $arr3["msg"]; //재난문자확인 내용
        echo "</div>";
        }
        
}
echo "</div>";
    
// switch($i){
//     case $i="RESULT":
//         echo "현재".$d."월에 전송된 재난문자확인정보가 없습니다.";
//         break;
//     case $i="DisasterMsg2":
//         foreach($arr2["DisasterMsg2"][1]["row"] as $arr3){
//             echo $arr3["create_date"]."<br>"; //재난문자확인 수신 날짜
//             echo $arr3["location_name"]."<br>"; //재난이 발생한 주소
//             echo $arr3["msg"]."<hr><br>"; //재난문자확인 내용
//             }
//         break;
// }
$total=$arr2;
// 한 화면 출력 갯수
$limit = 10;

// 출력페이지수 맨처음 < 1 2 3 4 5 > 맨마지막
$page_limit = 5;

// 현재 페이지
$page = (isset($_GET["page"]) && $_GET["page"] != '' && is_numeric($_GET["page"])) ? $_GET["page"] : 1;

$start = ($page - 1) * $limit;
$end = (($start + $limit) > $total) ? $total : ($start + $limit);

// 1 2 3 4 5  =====  6 7 8 9 10
// 총 페이지 수
$total_page = ceil($total / $limit);

// 1 1
// 2 1
// 3 1
// 4 1
// 5 1
// 6 6
// 7 6
// 8 6
// 9 6
// 10 6
// 11 11

$start_page = ( ( floor( ($page - 1 ) / $page_limit ) ) * $page_limit ) + 1;
$end_page = $start_page + $page_limit -1;

if($end_page > $total_page) {
  $end_page = $total_page;
}

$prev_page = $start_page - 1;
if($prev_page < 1) {
  $prev_page = 1;
}


// 1page 0.0 --> 0*5 + 1 = 1
// 2page 0.2 --> 0*5 + 1 = 1
// 3page 0.4 --> 0*5 + 1 = 1
// 4page 0.6 --> 0*5 + 1 = 1
// 5page 0.8 --> 0*5 + 1 = 1
// 6page 1.0 --> 1*5 + 1 = 6
// 7page 1.2 --> 1*5 + 1 = 6
// 8page 1.4 --> 1*5 + 1 = 6
// 9page 1.6 --> 1*5 + 1 = 6
// 10page 1.8 --> 1*5 + 1 = 6
// 11page 2.0 --> 1*5 + 1 = 11


?>
