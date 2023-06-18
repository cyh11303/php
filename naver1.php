<?php
  // 네이버 데이터랩 통합검색어 트렌드 Open API 예제
  
include('main/foodex.php');
  $client_id = "rPPRSaNnnqsTK1FFeTUU";
  $client_secret = "55yx1vqeZ2";
  $_GET["weather"].="맛집";
  echo "<style>
  .b1{
  margin: 20px
  }
  </style>";
  echo "<div class=b1>";
  echo "<h4><center>";
  echo "   ";
  echo "<font color='blue'>";
  if($_GET['location']==TRUE){
  echo $_GET['location'];
  echo "</font>";

  }
  echo " > ";
  echo "<font color='blue'>";
  echo $_GET['weather'];
  echo "</font>";
  echo "</center></h4>";
  echo "</div>";

  
  $encText = urlencode($_GET["weather"]);
  $url = "https://openapi.naver.com/v1/search/local.json?query=".$encText."&display=100&start=1&sort=comment"; // json 결과
  
  // $url = "https://openapi.naver.com/v1/search/local=".$encText;
  //echo $url;

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
      echo "<style>
      .box52 {
          margin:50px 250px;
          padding: 1em 2em;
          background-color:#FFFFFF;
          box-shadow: 0 0 6px 1px #e7dbdb, 0 0 6px 1px #e7dbdb inset;
          border-radius: 30px;
          </style>";

      
      $arr = json_decode($response,true);
      for( $i=0; $i<5; $i++){
        echo "<div class='box52'>";
        $arr2= $arr["items"][$i];
        print_r($arr2["title"]);
        echo "<br>";
        if($arr2["link"]==True){
          echo "<font color='blue'>";
          
          echo "<a target='_blank' href=".$arr2["link"].">";
          print_r($arr2["link"]);
          echo "</font>";
          echo "</a>";
          echo "<br>";
        }
        if($arr2["category"]==True){
          print_r($arr2["category"]);
          echo "<br>";
        }
        
        print_r($arr2["address"]);
      echo "</div>";
        }
    } else {
      echo "Error 내용:".$response;
    }
 
  ?>