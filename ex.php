<?php
date_default_timezone_set('Asia/Seoul');
$time=date("H");
echo $time;
echo "<br>";
if (($time/10)<1){
    $time-=1;
    echo $time;
    echo "<br>";
    $time="0$time";
    echo $time;
    echo "<br>";
    $time.="30";
    echo $time;
    echo "<br>";
}
?>