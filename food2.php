<?php
include('main/foodtop2.php');
?>
<?php

$a = $_GET["search"];
$Area=urlencode($a);
echo "<br>";

include('main/case.php');

$areaUri= "https://apis.data.go.kr/B551011/KorService1/areaBasedList1?serviceKey=E%2BtYKbl8Zfj065tKHO%2BCkITDTCtAUsO%2FeBtnqQWouaJr8%2FJmVMzZ%2BTtcylbMsR%2B%2Fct28ekxvIHcWVJBbp3CEtg%3D%3D&numOfRows=10&pageNo=1&MobileOS=ETC&MobileApp=AppTest&_type=json&listYN=Y&arrange=A&contentTypeId=39&areaCode=" . $a;

include('API/area.php');
?>

</body>
</html>
 