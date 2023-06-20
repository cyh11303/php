<?php
include('main/messageex.php');
date_default_timezone_set('Asia/Seoul');
$date=date("Y/m/");
echo "<h2><center>전국의 재난 문자 정보입니다.</center></h2>";
echo "<h4><center>보고싶은 지역을 누르시면 그 지역의 정보만 출력됩니다.</center></h4>";
$messageUri="https://apis.data.go.kr/1741000/DisasterMsg4/getDisasterMsg2List?serviceKey=k2FhBBQxor2i%2B9pBvFADgh%2B6ld8CDQul1g46DdYsfyg40rzqKGlBNpHWPcgV88Nj0FFBbu2iFfC24Q3cNzUCXg%3D%3D&pageNo=1&numOfRows=10&type=JSON&create_date=".$date."01%2000:00:00&location_name=";

include('API/emer.php');//재난API
?>
