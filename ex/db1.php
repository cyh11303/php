

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
      }
    $sql = "select * from area";
    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_array($result)){
        echo $row['si']." ".$row['nx']." ".$row['ny']." ".$row['lng']." ".$row['lat'];
        $nx=$row['nx']; $ny=$row['ny'];
    }
    
    echo $nx;
    echo $ny;
    mysqli_close($connect)
      
  ?>

