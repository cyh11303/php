<?php
    echo date("Y/m/");
    echo "<br>";
    $date=date("Y/m/");
    echo date("H/i/d");
    echo "<br>";
    $time=date("H");
    echo $time;
    echo "<br>";
    $time-=1;
    echo $time;
    echo "<br>";
    $time.="30";
    echo $time;
    echo "<br>";
    $messageUri="https://apis.data.go.kr/1741000/DisasterMsg4/getDisasterMsg2List?serviceKey=k2FhBBQxor2i%2B9pBvFADgh%2B6ld8CDQul1g46DdYsfyg40rzqKGlBNpHWPcgV88Nj0FFBbu2iFfC24Q3cNzUCXg%3D%3D&pageNo=1&numOfRows=100&type=JSON&create_date=".$date."01%2000:00:00&location_name=%EC%84%9C%EC%9A%B8";
    echo "재난문자 정보<p>";
    $ch1 = curl_init();
    curl_setopt($ch1, CURLOPT_HEADER, 0);
    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch1, CURLOPT_URL, $messageUri);
    curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch1, CURLOPT_VERBOSE, 0);
    curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
    $response1 = curl_exec($ch1);
    $arr2= json_decode($response1,true);
    
        foreach($arr2["DisasterMsg2"][1]["row"] as $arr3){
            echo $arr3["create_date"]."<br>"; //재난문자 수신 날짜
            echo $arr3["location_name"]."<br>"; //재난이 발생한 주소
            echo $arr3["msg"]."<hr><br>"; //재난문자 내용
        
        }
?>