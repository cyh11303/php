<?php
include('main/foodtab.php');
?>
<?php

 //이전 페이지에서 자동으로 변수가 넘어오는 지 확인
$a = $_GET["a"]; //자동으로 넘어오지않을 경우 직접 재선언
 //선언된 변수 출력 확인
include('main/case.php');

$areaUri= "https://apis.data.go.kr/B551011/KorService1/areaBasedList1?serviceKey=E%2BtYKbl8Zfj065tKHO%2BCkITDTCtAUsO%2FeBtnqQWouaJr8%2FJmVMzZ%2BTtcylbMsR%2B%2Fct28ekxvIHcWVJBbp3CEtg%3D%3D&numOfRows=10&pageNo=1&MobileOS=ETC&MobileApp=AppTest&_type=json&listYN=Y&arrange=A&contentTypeId=39&areaCode=" . $a;

include('API/area.php');

?>

</body>
</html>
 