

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
        echo "접속 성공<br>";
        echo $_POST["search"] ;
        echo "<br>";

      }
    $sql = "select * from area where si='".$_POST["search"]."'";"";
    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_array($result)){
        echo $row['nx']." ".$row['ny']." ".$row['lng']." ".$row['lat'];
        $nx=$row['nx'];
        $ny=$row['ny'];
    }

    echo "<br>";
    $apiUrl = "https://apis.data.go.kr/1360000/VilageFcstInfoService_2.0/getVilageFcst?serviceKey=k2FhBBQxor2i%2B9pBvFADgh%2B6ld8CDQul1g46DdYsfyg40rzqKGlBNpHWPcgV88Nj0FFBbu2iFfC24Q3cNzUCXg%3D%3D&pageNo=1&numOfRows=20&dataType=JSON&base_date=20230508&base_time=0500&nx=".$nx."&ny=".$ny."";
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
     
    $arr2= $arr["response"]["body"]["items"]["item"][0];
    
    echo $arr2["baseDate"];
    echo "일 ";
    echo $arr2["fcstTime"];
    echo "의 온도는 ";
    echo $arr2["fcstValue"];
    echo "도 입니다";
    echo "<br>";

    mysqli_close($connect)
      
  ?>

