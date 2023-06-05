// SSL 사용에 문제가 있으면 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 를 추가해 보시기 바랍니다.
// 네이버 검색 API 예제 - 블로그 검색
<?php
  $client_id = "rPPRSaNnnqsTK1FFeTUU";
  $client_secret = "55yx1vqeZ2";
  $encText = urlencode("서울맛집");
  $url = "https://openapi.naver.com/v1/search/blog?query=".$encText; // json 결과
//  $url = "https://openapi.naver.com/v1/search/blog.xml?query=".$encText; // xml 결과
echo "<br>";
echo $url;
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
  echo "status_code:".$status_code."
";
  curl_close ($ch);
  if($status_code == 200) {
    echo $response;
  } else {
    echo "Error 내용:".$response;
  }
?>