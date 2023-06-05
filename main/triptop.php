<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>가라GO</title>
    <link rel="stylesheet" href="pro0516.css">
</head>
<body>
  <header>
  <div class="home-button" style="text-align: center;">
        <a href="main.html">
          <img src="photo/exlogo.png">
        </a>
  </div>
	<div class="search-container">
        <form method="GET" action="trip2.php" >
            <!-- 주소창에 검색어 입력시 입력어를 search로 받아 trip2.php 넘기면서 실행 -->
            <input type="text" placeholder="검색어를 입력하세요" name="search">
            <button type="submit">검색</button>
        </form>
    </div>
    <nav class="navbar">
		<ul>
            <li><a href="trip.php?trip=<?php echo $_GET["trip"];?>">여행지</a></li>    
			<li><a href="food.php?trip=<?php echo $_GET["trip"];?>">맛집</a></li>
			<li><a href="festival.php?trip=<?php echo $_GET["trip"];;?>">축제</a></li>
		</ul>
	</nav>
	</header>