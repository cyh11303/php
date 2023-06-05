<?php
  // 네이버 데이터랩 통합검색어 트렌드 Open API 예제
include('main/foodex.php');
  $client_id = "rPPRSaNnnqsTK1FFeTUU";
  $client_secret = "55yx1vqeZ2";
  $_GET["trip"].="맛집";
  $encText = urlencode($_GET["trip"]);
  $url = "https://openapi.naver.com/v1/search/local.json?query=".$encText."&display=100&start=1&sort=comment"; // json 결과
  
  // $url = "https://openapi.naver.com/v1/search/local=".$encText;
  //echo $url;
  echo "<br>";
    $is_post = false;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, $is_post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $headers = array();
    $headers[] = "X-Naver-Client-Id: ".$client_id;
    $headers[] = "X-Naver-Client-Secret: ".$client_secret;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec ($ch);
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    //echo "status_code:".$status_code."";
    curl_close ($ch);
    //echo "<br>";
    if($status_code == 200) {
      //echo $response;
      $arr = json_decode($response,true);
      for( $i=0; $i<5; $i++){
        $arr2= $arr["items"][$i];
        print_r($arr2["title"]);
        echo "<br>";
        if($arr2["link"]==True){
          echo "<a href=".$arr2["link"].">";
          print_r($arr2["link"]);
          echo "</a>";
          echo "<br>";
        }
        print_r($arr2["category"]);
        echo "<br>";
        print_r($arr2["address"]);
        echo "<hr>";
        }
    } else {
      echo "Error 내용:".$response;
    }
  ?>