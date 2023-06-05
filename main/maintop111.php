<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>가라GO</title>
    <link rel="stylesheet" href="mainup.css">
</head>
<body>
  <header>
  <div class="home-button" style="text-align: center;">
        <a href="main.html">
          <img src="photo/exlogo.png">
        </a>
  </div>
	<div class="search-container">
        <form method="POST" action="pro.php" >
            <input type="text" placeholder="검색어를 입력하세요" name="search">
            <button type="submit">검색</button>
        </form>
    </div>
    
  <div class="container">

        <input type="radio" name="s" id="Seoul">
        <input type="radio" name="s" id="Busan">
        <input type="radio" name="s" id="Daegu">
        <input type="radio" name="s" id="Incheon">
        <input type="radio" name="s" id="Gwangju">
        <input type="radio" name="s" id="Daejeon">
        <input type="radio" name="s" id="Ulsan">
        <input type="radio" name="s" id="Sejong">
        <input type="radio" name="s" id="Gyeonggi">
        <input type="radio" name="s" id="Gangwon">
        <input type="radio" name="s" id="Chungbuk">
        <input type="radio" name="s" id="Chungnam">
        <input type="radio" name="s" id="Jeonbuk">
        <input type="radio" name="s" id="Jeonnam">
        <input type="radio" name="s" id="Gyeongbuk">
        <input type="radio" name="s" id="Gyeongnam">
        <input type="radio" name="s" id="Jeju">
        
        <nav>
        <ul>
            <div class="slider"></div>
            <label class="Seoul" for="Seoul">
            서울
            </label>
            <label class="Busan" for="Busan">
            부산
            </label>
            <label class="Daegu" for="Daegu">
            대구
            </label>
            <label class="Incheon" for="Incheon">
            인천
            </label>
            <label class="Gwangju" for="Gwangju">
            광주
            </label>
            <label class="Daejeon" for="Daejeon">
            대전
            </label>
            <label class="Ulsan" for="Ulsan">
            울산
            </label>
            <label class="Sejong" for="Sejong">
            세종
            </label>
            <label class="Gyeonggi" for="Gyeonggi">
            경기
            </label>
            <label class="Gangwon" for="Gangwon">
            강원
            </label>
            <label class="Chungbuk" for="Chungbuk">
            충북
            </label>
            <label class="Chungnam" for="Chungnam">
            충남
            </label>
            <label class="Jeonbuk" for="Jeonbuk">
            전북
            </label>
            <label class="Jeonnam" for="Jeonnam">
            전남
            </label>
            <label class="Gyeongbuk" for="Gyeongbuk">
            경북
            </label>
            <label class="Gyeongnam" for="Gyeongnam">
            경남
            </label>
            <label class="Jeju" for="Jeju">
            제주
            </label>

        </ul>
        </nav>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
    const labels = document.querySelectorAll("label");
    labels.forEach(function(label) {
    label.addEventListener("click", function() {
      const id = label.getAttribute("for");
      document.getElementById(id).checked = true;

      // 링크 부분에 지역별 링크 넣을 수 있게 만듦
      let link; 
      if (id === "Seoul") {
        $(#"Seoul").prop("cheked",true);
        link = "foodtap.php?a=<?php echo "서울";?>";
      } else if (id === "Busan") {
        $(#"Busan").prop("cheked",true);
        link = "foodtap.php?a=<?php echo "부산";?>";
      } else if (id === "Daegu") {
        $(#"Daegu").prop("cheked",true);
        link = "링크3";
      } else if (id === "Incheon") {
        link = "링크4";
      } else if (id === "Gwangju") {
        link = "링크5";
      } else if (id === "Daejeon") {
        link = "링크6";
      } else if (id === "Ulsan") {
        link = "링크7";
      } else if (id === "Sejong") {
        link = "링크8";
      } else if (id === "Gyeonggi") {
        link = "링크9";
      } else if (id === "Gangwon") {
        link = "링크10";
      } else if (id === "Chungbuk") {
        link = "링크11";
      } else if (id === "Chungnam") {
        link = "링크12";
      } else if (id === "Jeonbuk") {
        link = "링크13";
      } else if (id === "Jeonnam") {
        link = "링크14";
      } else if (id === "Gyeongbuk") {
        link = "링크15";
      } else if (id === "Gyeongnam") {
        link = "링크16";
      } else if (id === "Jeju") {
        link = "링크17";
      }

      window.location.href = link;
    });
  });
});

</script>
	</header>
</body>