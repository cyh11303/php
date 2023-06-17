<?php
include('main/page.php');
include('main/maintop2.php');

echo "<h6>";
echo "<font color='blue'>";
if($_GET['location']==TRUE){
echo $_GET['location'];
echo "</font>";
}
echo " > ";
echo "<font color='blue'>";
echo $_GET['search'];
echo "</font>";

echo " > ";
if($_GET['page']==TRUE){
    echo "<font color='blue'>";
    echo $_GET['page'];
    echo "페이지";
    echo "</font>";
    }

echo "</h6>";
?>
<?php

$page = $_GET["page"];
$a = $_GET["a"];
$contents = $_GET["content"];
include('main/case.php');

$areaUri= "https://apis.data.go.kr/B551011/KorService1/areaBasedSyncList1?serviceKey=E%2BtYKbl8Zfj065tKHO%2BCkITDTCtAUsO%2FeBtnqQWouaJr8%2FJmVMzZ%2BTtcylbMsR%2B%2Fct28ekxvIHcWVJBbp3CEtg%3D%3D&numOfRows=100&pageNo=". $page ."&MobileOS=ETC&MobileApp=AppTest&_type=json&showflag=1&listYN=Y&arrange=A&contentTypeId=12&areaCode=". $a . "&sigunguCode=" . $_GET["b"]; 


$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $areaUri);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

$arr = json_decode($response,true);


$some = 0;
foreach($arr["response"]["body"]["items"]["item"] as $arr1){
  $value = $arr1["title"];
  
  $asdasd=$_GET["search"];
  if (strpos($value,$asdasd) !== false) {
  ?>
  <p>
  <div style="display:inline-block;vertical-align:top;">
  <?php 
  if($arr1["firstimage"]==""){
  ?>
  <img src="photo/thum_detail.jpg" class="thumbnail-img">
  <?php
  }
  else{
  ?>
  <img src=<?php echo $arr1["firstimage"]?> class="thumbnail-img">
  <?php
  }
  ?> 
  </div>


  <?php
    
      //echo $arr1["firstimage"]."<br>"; //지역의 사진
      
  ?>
  <div style="display:inline-block;">
      <div style="font:size 30px;font-weight:bold; color:teal;">
  <?php
      echo $arr1["title"]."<br>"; //지역의 이름
  ?>
      </div>
      <div style="color:DarkGray;">
  <?php
      echo $arr1["addr1"]."<br>"; //지역의 주소
      $some +=1;
      ?>
      </div>
  </div>
  </p>
  <?php
  }
  else {
    // echo "<script>alert('해당지역에는 $asdasd 관련된 키워드가 없습니다.');
    // history.back();
    // </script>";
}

}
if($some == 0){
  echo "<script>alert('해당지역에는 $asdasd 관련된 키워드가 없습니다.');
  history.back();
  </script>";
}
  


    
    


?>





<nav aria-label="Page navigation example">
      <ul class="ct" >
      <ul class="pagination" >
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">«</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="pro2.php?search=<?php echo $Area;?>&page=1">1</a></li>
        <li class="page-item"><a class="page-link" href="pro2.php?search=<?php echo $Area;?>&page=2">2</a></li>
        <li class="page-item"><a class="page-link" href="pro2.php?search=<?php echo $Area;?>&page=3">3</a></li>
        <li class="page-item"><a class="page-link" href="pro2.php?search=<?php echo $Area;?>&page=4">4</a></li>
        <li class="page-item"><a class="page-link" href="pro2.php?search=<?php echo $Area;?>&page=5">5</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">»</span>
          </a>
        </li>
      </ul>
      </ul>
    </nav>

</body>
</html>
