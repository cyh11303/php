<!DOCTYPE html>
<html lang="ko">
<head>
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
        </form>
    </div>
    <nav class="navbar">
		<ul>
            <li><a href="trip.php?trip=<?php echo $_GET["search"];?>">여행지</a></li>    
			<li><a href="food.php?trip=<?php echo $_GET["trip"];?>">맛집</a></li>
			<li><a href="festival.php?trip=<?php echo $_GET["trip"];;?>">축제</a></li>
		</ul>
	</nav>
	</header>