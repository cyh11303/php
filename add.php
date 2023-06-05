<?php
$a="안녕";
echo $a;
echo "<br>";
$a.= "하세요";
echo $a;
echo "<br>";
$test=1;
$test.=23;
echo $test;
date_default_timezone_set('Asia/Seoul');
$date=date("Y/m/d");
echo "<br>";
$time=date("H");
echo $date;
echo "<br>";
echo $time;
echo "<br>";
if(date("i")>=45){
    $time.="30";
}else{
    $time.="00";
}
echo $time;
echo "<br>";
$time+=300;
$time1=date("H");
$time1.="00";
echo $time;
echo "<br>";
echo $time1;
echo "<br>";
// echo $a;
// echo "<br>";
// echo $id;
// echo "<br>";
// echo $for;
?>