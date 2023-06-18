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
    echo "<h3><center>";
    echo "".$n."월 1일부터 ".$j."일까지 ".$_GET["weather"]."에 전송된 재난문자확인정보가 없습니다.";
    echo "</center></h3>";
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
?>