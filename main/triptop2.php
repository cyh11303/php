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
            <input type="text" placeholder="검색어를 입력하세요" name="search">
            <button type="submit">검색</button>
        </form>
    </div>
    <nav class="navbar">
		<ul>
            <li><a href="trip2.php?search=<?php echo $_GET["search"];?>">여행지</a></li>
            <!--위 코드는 자기 자신을 클릭시에는 trip.php로 설정시 trip 변수를 받을 수 없어 오류가 나며 search로 변경하였고
            모든 get타입의 변수가 trip에서 search 임을 확인 -->   
			<li><a href="food.php?trip=<?php echo $_GET["search"];?>">맛집</a></li>
			<li><a href="festival.php?trip=<?php echo $_GET["search"];?>">축제</a></li>
		</ul>
	</nav>
	</header>
