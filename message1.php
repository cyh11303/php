<?php
include('main/main_message.php');
?>
<?php

// $trip = $_POST["search"];
// $Area=urlencode($_POST["search"]);
// echo $Area;
// echo "<br>";
// echo $trip;
// echo "<br>";
date_default_timezone_set('Asia/Seoul');
$date=date("Y/m/");
//$date1=date("His");
echo $date;
//echo "<br>";
//echo $date1;

$messageUri="https://apis.data.go.kr/1741000/DisasterMsg4/getDisasterMsg2List?serviceKey=k2FhBBQxor2i%2B9pBvFADgh%2B6ld8CDQul1g46DdYsfyg40rzqKGlBNpHWPcgV88Nj0FFBbu2iFfC24Q3cNzUCXg%3D%3D&pageNo=1&numOfRows=10&type=JSON&create_date=".$date."01%2000:00:00&location_name=";


include('API/emer.php');//재난API
?>
</body>
</html>