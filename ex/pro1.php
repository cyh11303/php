<!DOCTYPE html>
<html lang="ko">
<head>
<style>
  #div1, #div2, #div3, #div4 {
  border: 1px solid black;
  width:  250px;
  margin-bottom: 12px;
}
  
#div1 { overflow-x: hidden;}
#div2 { overflow-x: scroll;}
#div3 { overflow-x: visible;}
#div4 { overflow-x: auto;}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>가라GO</title>
    <link rel="stylesheet" href="pro.css">
</head>
<body>
  <header>
	<div class="search-container">
		<img src="nepal.jpg" style="width: auto;height: 200px">
        <form method="POST" action="pro.php" >
            <input type="text" placeholder="검색어를 입력하세요" name="search">
            <button type="submit">검색</button>
            <script>
              var search1=document.getElementById('search');
              alert(search1);
            </script>
        </form>
    </div>

    <nav class="navbar">
		<ul>
            <? $Area=urlencode($_POST["search"]); ?>
			<li><a href="trip.php",action="trip.php",name="search1", value="$Area">여행지</a></li>
			<li><a href="trip.php",name="search1", value="$Area">맛집</a></li>
			<li><a href="#">축제</a></li>
		</ul>
	</nav>
	</header>
  <script>
var navLinks = document.querySelectorAll("nav.navbar ul li a");
for (var i = 0; i < navLinks.length; i++) {
    navLinks[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        if (current.length > 0) {
            current[0].className = current[0].className.replace(" active", "");
        }
        this.className += " active";
    });
}
  </script>

<?php

echo $_POST["search"];
echo $_GET["search1"];
$trip = $_POST["search"];
echo "<br>";
$Area=urlencode($_POST["search"]);
echo $Area;
echo "<br>";

$areaUri= "https://apis.data.go.kr/B551011/KorService1/searchKeyword1?serviceKey=k2FhBBQxor2i%2B9pBvFADgh%2B6ld8CDQul1g46DdYsfyg40rzqKGlBNpHWPcgV88Nj0FFBbu2iFfC24Q3cNzUCXg%3D%3D&numOfRows=10&pageNo=1&MobileOS=ETC&MobileApp=AppTest&_type=json&listYN=Y&arrange=A&keyword=". $_GET["search1"] ."&contentTypeId=12";
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $areaUri);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
echo "지역정보<p>";
$arr = json_decode($response,true);

    foreach($arr["response"]["body"]["items"]["item"] as $arr1){
        echo $arr1["title"]."<br>"; //지역의 이름
        echo $arr1["addr1"]."<hr><br>"; //지역의 주소
    
    }

?>
</body>
</html>
