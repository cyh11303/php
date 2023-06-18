<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>가라GO</title>
    <link rel="stylesheet" href="mainup.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="bighead">
  <div class="searchArea">
            <form method="get" action="pro.php?page=1" >
            <input type="text" placeholder="검색어를 입력하세요" name="search">
            <button type="submit">검색</button>
        </form>
          </div>
          <ul class="nav">
            <div class="home-button">
              <a href="main.html">
                <img src="photo/exlogo.png">
              </a>
            </div>
            <?php  ini_set( "display_errors", 0 );?>
            <li><a href="containfood.php?search=<?php echo $_GET["search"];?>&location=맛집&page=1">맛집</a></li>
            <li><a href="containtrip.php?search=<?php echo $_GET["search"];?>&location=여행지&page=1">여행지</a></li>
            <li><a href="containculture.php?search=<?php echo $_GET["search"];?>&location=문화재&page=1">문화재</a></li>
            <li><a href="containfestival.php?search=<?php echo $_GET["search"];?>&location=축제&page=1">축제</a></li>
          </ul>
  </div>
    <div class="con">
    <nav id="topNav" class="top-bar__menu-box-1">
      <ul>
        <li>
          <a href="pro2.php?a=<?php echo "서울";?>&b=&page=1&search=<?php echo $_GET["search"];?>&location=키워드">서울</a>
          <ul>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=1&page=1&search=<?php echo $_GET["search"];?>&location=키워드">강남</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=2&page=1&search=<?php echo $_GET["search"];?>&location=키워드">강동</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=3&page=1&search=<?php echo $_GET["search"];?>&location=키워드">강북</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=4&page=1&search=<?php echo $_GET["search"];?>&location=키워드">강서</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=5&page=1&search=<?php echo $_GET["search"];?>&location=키워드">관악</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=6&page=1&search=<?php echo $_GET["search"];?>&location=키워드">광진</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=7&page=1&search=<?php echo $_GET["search"];?>&location=키워드">구로</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=8&page=1&search=<?php echo $_GET["search"];?>&location=키워드">금천</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=9&page=1&search=<?php echo $_GET["search"];?>&location=키워드">노원</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=10&page=1&search=<?php echo $_GET["search"];?>&location=키워드">도봉</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=11&page=1&search=<?php echo $_GET["search"];?>&location=키워드">동대문</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=12&page=1&search=<?php echo $_GET["search"];?>&location=키워드">동작</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=13&page=1&search=<?php echo $_GET["search"];?>&location=키워드">마포</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=14&page=1&search=<?php echo $_GET["search"];?>&location=키워드">서대문</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=15&page=1&search=<?php echo $_GET["search"];?>&location=키워드">서초</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=16&page=1&search=<?php echo $_GET["search"];?>&location=키워드">성동</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=17&page=1&search=<?php echo $_GET["search"];?>&location=키워드">성북</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=18&page=1&search=<?php echo $_GET["search"];?>&location=키워드">송파</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=19&page=1&search=<?php echo $_GET["search"];?>&location=키워드">양천</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=20&page=1&search=<?php echo $_GET["search"];?>&location=키워드">영등포</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=21&page=1&search=<?php echo $_GET["search"];?>&location=키워드">용산</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=22&page=1&search=<?php echo $_GET["search"];?>&location=키워드">은평</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=23&page=1&search=<?php echo $_GET["search"];?>&location=키워드">종로</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=24&page=1&search=<?php echo $_GET["search"];?>&location=키워드">중구</a></li>
            <li><a href="pro2.php?a=<?php echo "서울";?>&b=25&page=1&search=<?php echo $_GET["search"];?>&location=키워드">중랑</a></li>
          </ul>
        </li>
        <li>
          <a href="pro2.php?a=<?php echo "부산";?>&b=&page=1&search=<?php echo $_GET["search"];?>&location=키워드">부산</a>
          <ul>
            <li><a href="pro2.php?a=<?php echo "부산";?>&b=1&page=1&search=<?php echo $_GET["search"];?>&location=키워드">강서</a></li>
            <li><a href="pro2.php?a=<?php echo "부산";?>&b=2&page=1&search=<?php echo $_GET["search"];?>&location=키워드">금정</a></li>
            <li><a href="pro2.php?a=<?php echo "부산";?>&b=3&page=1&search=<?php echo $_GET["search"];?>&location=키워드">기장</a></li>
            <li><a href="pro2.php?a=<?php echo "부산";?>&b=4&page=1&search=<?php echo $_GET["search"];?>&location=키워드">남구</a></li>
            <li><a href="pro2.php?a=<?php echo "부산";?>&b=5&page=1&search=<?php echo $_GET["search"];?>&location=키워드">동구</a></li>
            <li><a href="pro2.php?a=<?php echo "부산";?>&b=6&page=1&search=<?php echo $_GET["search"];?>&location=키워드">동래</a></li>
            <li><a href="pro2.php?a=<?php echo "부산";?>&b=7&page=1&search=<?php echo $_GET["search"];?>&location=키워드">부산진구</a></li>
            <li><a href="pro2.php?a=<?php echo "부산";?>&b=8&page=1&search=<?php echo $_GET["search"];?>&location=키워드">북구</a></li>
            <li><a href="pro2.php?a=<?php echo "부산";?>&b=9&page=1&search=<?php echo $_GET["search"];?>&location=키워드">사상</a></li>
            <li><a href="pro2.php?a=<?php echo "부산";?>&b=10&page=1&search=<?php echo $_GET["search"];?>&location=키워드">사하</a></li>
            <li><a href="pro2.php?a=<?php echo "부산";?>&b=11&page=1&search=<?php echo $_GET["search"];?>&location=키워드">서구</a></li>
            <li><a href="pro2.php?a=<?php echo "부산";?>&b=12&page=1&search=<?php echo $_GET["search"];?>&location=키워드">수영</a></li>
            <li><a href="pro2.php?a=<?php echo "부산";?>&b=13&page=1&search=<?php echo $_GET["search"];?>&location=키워드">연제</a></li>
            <li><a href="pro2.php?a=<?php echo "부산";?>&b=14&page=1&search=<?php echo $_GET["search"];?>&location=키워드">영도</a></li>
            <li><a href="pro2.php?a=<?php echo "부산";?>&b=15&page=1&search=<?php echo $_GET["search"];?>&location=키워드">중구</a></li>
            <li><a href="pro2.php?a=<?php echo "부산";?>&b=16&page=1&search=<?php echo $_GET["search"];?>&location=키워드">해운대</a></li>
           </ul>
        </li>
        <li>
          <a href="pro2.php?a=<?php echo "인천";?>&b=&page=1&search=<?php echo $_GET["search"];?>&location=키워드">인천</a>
          <ul>
            <li><a href="pro2.php?a=<?php echo "인천";?>&b=1&page=1&search=<?php echo $_GET["search"];?>&location=키워드">강화</a></li>
            <li><a href="pro2.php?a=<?php echo "인천";?>&b=2&page=1&search=<?php echo $_GET["search"];?>&location=키워드">계양</a></li>
            <li><a href="pro2.php?a=<?php echo "인천";?>&b=3&page=1&search=<?php echo $_GET["search"];?>&location=키워드">미추홀</a></li>
            <li><a href="pro2.php?a=<?php echo "인천";?>&b=4&page=1&search=<?php echo $_GET["search"];?>&location=키워드">남동</a></li>
            <li><a href="pro2.php?a=<?php echo "인천";?>&b=5&page=1&search=<?php echo $_GET["search"];?>&location=키워드">동구</a></li>
            <li><a href="pro2.php?a=<?php echo "인천";?>&b=6&page=1&search=<?php echo $_GET["search"];?>&location=키워드">부평</a></li>
            <li><a href="pro2.php?a=<?php echo "인천";?>&b=7&page=1&search=<?php echo $_GET["search"];?>&location=키워드">서구</a></li>
            <li><a href="pro2.php?a=<?php echo "인천";?>&b=8&page=1&search=<?php echo $_GET["search"];?>&location=키워드">연수</a></li>
            <li><a href="pro2.php?a=<?php echo "인천";?>&b=9&page=1&search=<?php echo $_GET["search"];?>&location=키워드">옹진</a></li>
            <li><a href="pro2.php?a=<?php echo "인천";?>&b=10&page=1&search=<?php echo $_GET["search"];?>&location=키워드">중구</a></li>
          </ul>
        </li>
        <li>
          <a href="pro2.php?a=<?php echo "대구";?>&b=&page=1&search=<?php echo $_GET["search"];?>&location=키워드">대구</a>
          <ul>
            <li><a href="pro2.php?a=<?php echo "대구";?>&b=1&page=1&search=<?php echo $_GET["search"];?>&location=키워드">남구</a></li>
            <li><a href="pro2.php?a=<?php echo "대구";?>&b=2&page=1&search=<?php echo $_GET["search"];?>&location=키워드">달서</a></li>
            <li><a href="pro2.php?a=<?php echo "대구";?>&b=3&page=1&search=<?php echo $_GET["search"];?>&location=키워드">달성</a></li>
            <li><a href="pro2.php?a=<?php echo "대구";?>&b=4&page=1&search=<?php echo $_GET["search"];?>&location=키워드">동구</a></li>
            <li><a href="pro2.php?a=<?php echo "대구";?>&b=5&page=1&search=<?php echo $_GET["search"];?>&location=키워드">북구</a></li>
            <li><a href="pro2.php?a=<?php echo "대구";?>&b=6&page=1&search=<?php echo $_GET["search"];?>&location=키워드">서구</a></li>
            <li><a href="pro2.php?a=<?php echo "대구";?>&b=7&page=1&search=<?php echo $_GET["search"];?>&location=키워드">수성</a></li>
            <li><a href="pro2.php?a=<?php echo "대구";?>&b=8&page=1&search=<?php echo $_GET["search"];?>&location=키워드">중구</a></li>
          </ul>
        </li>
        <li>
          <a href="pro2.php?a=<?php echo "대전";?>&b=&page=1&search=<?php echo $_GET["search"];?>&location=키워드">대전</a>
          <ul>
            <li><a href="pro2.php?a=<?php echo "대전";?>&b=1&page=1&search=<?php echo $_GET["search"];?>&location=키워드">대덕</a></li>
            <li><a href="pro2.php?a=<?php echo "대전";?>&b=2&page=1&search=<?php echo $_GET["search"];?>&location=키워드">동구</a></li>
            <li><a href="pro2.php?a=<?php echo "대전";?>&b=3&page=1&search=<?php echo $_GET["search"];?>&location=키워드">서구</a></li>
            <li><a href="pro2.php?a=<?php echo "대전";?>&b=4&page=1&search=<?php echo $_GET["search"];?>&location=키워드">유성</a></li>
            <li><a href="pro2.php?a=<?php echo "대전";?>&b=5&page=1&search=<?php echo $_GET["search"];?>&location=키워드">중구</a></li>
          </ul>
        </li>
        <li>
          <li><a href="pro2.php?a=<?php echo "광주";?>&b=&page=1&search=<?php echo $_GET["search"];?>&location=키워드">광주</a>
          <ul>
            <li><a href="pro2.php?a=<?php echo "광주";?>&b=1&page=1&search=<?php echo $_GET["search"];?>&location=키워드">광산</a></li>
            <li><a href="pro2.php?a=<?php echo "광주";?>&b=2&page=1&search=<?php echo $_GET["search"];?>&location=키워드">남구</a></li>
            <li><a href="pro2.php?a=<?php echo "광주";?>&b=3&page=1&search=<?php echo $_GET["search"];?>&location=키워드">동구</a></li>
            <li><a href="pro2.php?a=<?php echo "광주";?>&b=4&page=1&search=<?php echo $_GET["search"];?>&location=키워드">북구</a></li>
            <li><a href="pro2.php?a=<?php echo "광주";?>&b=5&page=1&search=<?php echo $_GET["search"];?>&location=키워드">서구</a></li>
          </ul>
        </li>
        <li>
          <li><a href="pro2.php?a=<?php echo "울산";?>&b=&page=1&search=<?php echo $_GET["search"];?>&location=키워드">울산</a>
          <ul>
            <li><a href="pro2.php?a=<?php echo "울산";?>&b=1&page=1&search=<?php echo $_GET["search"];?>&location=키워드">중구</a></li>
            <li><a href="pro2.php?a=<?php echo "울산";?>&b=2&page=1&search=<?php echo $_GET["search"];?>&location=키워드">남구</a></li>
            <li><a href="pro2.php?a=<?php echo "울산";?>&b=3&page=1&search=<?php echo $_GET["search"];?>&location=키워드">동구</a></li>
            <li><a href="pro2.php?a=<?php echo "울산";?>&b=4&page=1&search=<?php echo $_GET["search"];?>&location=키워드">북구</a></li>
            <li><a href="pro2.php?a=<?php echo "울산";?>&b=5&page=1&search=<?php echo $_GET["search"];?>&location=키워드">울주</a></li>
          </ul>
        </li>
        <li>
          <a href="pro2.php?a=<?php echo "세종";?>&b=&page=1&search=<?php echo $_GET["search"];?>&location=키워드">세종</a>
          <!-- <ul>
            <li><a href="pro2.php?a=<?// echo "세종";?>&b=1&page=1&search=<?php echo $_GET["search"];?>&location=키워드">중구</a></li>
          </ul> -->
        </li>
        <li>
          <li><a href="pro2.php?a=<?php echo "강원";?>&b=&page=1&search=<?php echo $_GET["search"];?>&location=키워드">강원</a>
          <ul>
            <li><a href="pro2.php?a=<?php echo "강원";?>&b=1&page=1&search=<?php echo $_GET["search"];?>&location=키워드">강릉</a></li>
            <li><a href="pro2.php?a=<?php echo "강원";?>&b=2&page=1&search=<?php echo $_GET["search"];?>&location=키워드">고성</a></li>
            <li><a href="pro2.php?a=<?php echo "강원";?>&b=3&page=1&search=<?php echo $_GET["search"];?>&location=키워드">동해</a></li>
            <li><a href="pro2.php?a=<?php echo "강원";?>&b=4&page=1&search=<?php echo $_GET["search"];?>&location=키워드">삼척</a></li>
            <li><a href="pro2.php?a=<?php echo "강원";?>&b=5&page=1&search=<?php echo $_GET["search"];?>&location=키워드">속초</a></li>
            <li><a href="pro2.php?a=<?php echo "강원";?>&b=6&page=1&search=<?php echo $_GET["search"];?>&location=키워드">양구</a></li>
            <li><a href="pro2.php?a=<?php echo "강원";?>&b=7&page=1&search=<?php echo $_GET["search"];?>&location=키워드">양양</a></li>
            <li><a href="pro2.php?a=<?php echo "강원";?>&b=8&page=1&search=<?php echo $_GET["search"];?>&location=키워드">영월</a></li>
            <li><a href="pro2.php?a=<?php echo "강원";?>&b=9&page=1&search=<?php echo $_GET["search"];?>&location=키워드">원주</a></li>
            <li><a href="pro2.php?a=<?php echo "강원";?>&b=10&page=1&search=<?php echo $_GET["search"];?>&location=키워드">인제</a></li>
            <li><a href="pro2.php?a=<?php echo "강원";?>&b=11&page=1&search=<?php echo $_GET["search"];?>&location=키워드">정선</a></li>
            <li><a href="pro2.php?a=<?php echo "강원";?>&b=12&page=1&search=<?php echo $_GET["search"];?>&location=키워드">춸원</a></li>
            <li><a href="pro2.php?a=<?php echo "강원";?>&b=13&page=1&search=<?php echo $_GET["search"];?>&location=키워드">춘천</a></li>
            <li><a href="pro2.php?a=<?php echo "강원";?>&b=14&page=1&search=<?php echo $_GET["search"];?>&location=키워드">태백</a></li>
            <li><a href="pro2.php?a=<?php echo "강원";?>&b=15&page=1&search=<?php echo $_GET["search"];?>&location=키워드">평창</a></li>
            <li><a href="pro2.php?a=<?php echo "강원";?>&b=16&page=1&search=<?php echo $_GET["search"];?>&location=키워드">홍천</a></li>
            <li><a href="pro2.php?a=<?php echo "강원";?>&b=17&page=1&search=<?php echo $_GET["search"];?>&location=키워드">화천</a></li>
            <li><a href="pro2.php?a=<?php echo "강원";?>&b=18&page=1&search=<?php echo $_GET["search"];?>&location=키워드">횡성</a></li>
          </ul>
        </li>
        <li>
          <li><a href="pro2.php?a=<?php echo "경기";?>&b=&page=1&search=<?php echo $_GET["search"];?>&location=키워드">경기</a>
          <ul>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=1&page=1&search=<?php echo $_GET["search"];?>&location=키워드">가평</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=2&page=1&search=<?php echo $_GET["search"];?>&location=키워드">고양</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=3&page=1&search=<?php echo $_GET["search"];?>&location=키워드">과천</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=4&page=1&search=<?php echo $_GET["search"];?>&location=키워드">광명</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=5&page=1&search=<?php echo $_GET["search"];?>&location=키워드">광주</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=6&page=1&search=<?php echo $_GET["search"];?>&location=키워드">구리</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=7&page=1&search=<?php echo $_GET["search"];?>&location=키워드">군포</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=8&page=1&search=<?php echo $_GET["search"];?>&location=키워드">김포</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=9&page=1&search=<?php echo $_GET["search"];?>&location=키워드">남양주</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=10&page=1&search=<?php echo $_GET["search"];?>&location=키워드">동두천</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=11&page=1&search=<?php echo $_GET["search"];?>&location=키워드">부천</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=12&page=1&search=<?php echo $_GET["search"];?>&location=키워드">성남</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=13&page=1&search=<?php echo $_GET["search"];?>&location=키워드">수원</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=14&page=1&search=<?php echo $_GET["search"];?>&location=키워드">시흥</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=15&page=1&search=<?php echo $_GET["search"];?>&location=키워드">안산</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=16&page=1&search=<?php echo $_GET["search"];?>&location=키워드">안성</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=17&page=1&search=<?php echo $_GET["search"];?>&location=키워드">안양</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=18&page=1&search=<?php echo $_GET["search"];?>&location=키워드">양주</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=19&page=1&search=<?php echo $_GET["search"];?>&location=키워드">양평</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=20&page=1&search=<?php echo $_GET["search"];?>&location=키워드">여주</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=21&page=1&search=<?php echo $_GET["search"];?>&location=키워드">연천</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=22&page=1&search=<?php echo $_GET["search"];?>&location=키워드">오상</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=23&page=1&search=<?php echo $_GET["search"];?>&location=키워드">용인</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=24&page=1&search=<?php echo $_GET["search"];?>&location=키워드">의왕</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=25&page=1&search=<?php echo $_GET["search"];?>&location=키워드">의정부</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=26&page=1&search=<?php echo $_GET["search"];?>&location=키워드">이천</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=27&page=1&search=<?php echo $_GET["search"];?>&location=키워드">파주</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=28&page=1&search=<?php echo $_GET["search"];?>&location=키워드">평택</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=29&page=1&search=<?php echo $_GET["search"];?>&location=키워드">포천</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=30&page=1&search=<?php echo $_GET["search"];?>&location=키워드">하남</a></li>
            <li><a href="pro2.php?a=<?php echo "경기";?>&b=31&page=1&search=<?php echo $_GET["search"];?>&location=키워드">화성</a></li>
          </ul>
        </li>
        <li>
          <li><a href="pro2.php?a=<?php echo "충북";?>&b=&page=1&search=<?php echo $_GET["search"];?>&location=키워드">충북</a>
          <ul>
            <li><a href="pro2.php?a=<?php echo "충북";?>&b=1&page=1&search=<?php echo $_GET["search"];?>&location=키워드">괴산</a></li>
            <li><a href="pro2.php?a=<?php echo "충북";?>&b=2&page=1&search=<?php echo $_GET["search"];?>&location=키워드">단양</a></li>
            <li><a href="pro2.php?a=<?php echo "충북";?>&b=3&page=1&search=<?php echo $_GET["search"];?>&location=키워드">보은</a></li>
            <li><a href="pro2.php?a=<?php echo "충북";?>&b=4&page=1&search=<?php echo $_GET["search"];?>&location=키워드">영동</a></li>
            <li><a href="pro2.php?a=<?php echo "충북";?>&b=5&page=1&search=<?php echo $_GET["search"];?>&location=키워드">옥천</a></li>
            <li><a href="pro2.php?a=<?php echo "충북";?>&b=6&page=1&search=<?php echo $_GET["search"];?>&location=키워드">음성</a></li>
            <li><a href="pro2.php?a=<?php echo "충북";?>&b=7&page=1&search=<?php echo $_GET["search"];?>&location=키워드">제천</a></li>
            <li><a href="pro2.php?a=<?php echo "충북";?>&b=8&page=1&search=<?php echo $_GET["search"];?>&location=키워드">진천</a></li>
            <li><a href="pro2.php?a=<?php echo "충북";?>&b=9&page=1&search=<?php echo $_GET["search"];?>&location=키워드">청원</a></li>
            <li><a href="pro2.php?a=<?php echo "충북";?>&b=10&page=1&search=<?php echo $_GET["search"];?>&location=키워드">청주</a></li>
            <li><a href="pro2.php?a=<?php echo "충북";?>&b=11&page=1&search=<?php echo $_GET["search"];?>&location=키워드">충주</a></li>
            <li><a href="pro2.php?a=<?php echo "충북";?>&b=12&page=1&search=<?php echo $_GET["search"];?>&location=키워드">증평</a></li>
          </ul>
        </li>
        <li>
         <li><a href="pro2.php?a=<?php echo "충남";?>&b=&page=1&search=<?php echo $_GET["search"];?>&location=키워드">충남</a>
          <ul>
            <li><a href="pro2.php?a=<?php echo "충남";?>&b=1&page=1&search=<?php echo $_GET["search"];?>&location=키워드">공주</a></li>
            <li><a href="pro2.php?a=<?php echo "충남";?>&b=2&page=1&search=<?php echo $_GET["search"];?>&location=키워드">금산</a></li>
            <li><a href="pro2.php?a=<?php echo "충남";?>&b=3&page=1&search=<?php echo $_GET["search"];?>&location=키워드">논산</a></li>
            <li><a href="pro2.php?a=<?php echo "충남";?>&b=4&page=1&search=<?php echo $_GET["search"];?>&location=키워드">당진</a></li>
            <li><a href="pro2.php?a=<?php echo "충남";?>&b=5&page=1&search=<?php echo $_GET["search"];?>&location=키워드">보령</a></li>
            <li><a href="pro2.php?a=<?php echo "충남";?>&b=6&page=1&search=<?php echo $_GET["search"];?>&location=키워드">부여</a></li>
            <li><a href="pro2.php?a=<?php echo "충남";?>&b=7&page=1&search=<?php echo $_GET["search"];?>&location=키워드">서산</a></li>
            <li><a href="pro2.php?a=<?php echo "충남";?>&b=8&page=1&search=<?php echo $_GET["search"];?>&location=키워드">서천</a></li>
            <li><a href="pro2.php?a=<?php echo "충남";?>&b=9&page=1&search=<?php echo $_GET["search"];?>&location=키워드">아산</a></li>
            <li><a href="pro2.php?a=<?php echo "충남";?>&b=11&page=1&search=<?php echo $_GET["search"];?>&location=키워드">예산</a></li>
            <li><a href="pro2.php?a=<?php echo "충남";?>&b=12&page=1&search=<?php echo $_GET["search"];?>&location=키워드">천안</a></li>
            <li><a href="pro2.php?a=<?php echo "충남";?>&b=13&page=1&search=<?php echo $_GET["search"];?>&location=키워드">청양</a></li>
            <li><a href="pro2.php?a=<?php echo "충남";?>&b=14&page=1&search=<?php echo $_GET["search"];?>&location=키워드">태안</a></li>
            <li><a href="pro2.php?a=<?php echo "충남";?>&b=15&page=1&search=<?php echo $_GET["search"];?>&location=키워드">홍성</a></li>
            <li><a href="pro2.php?a=<?php echo "충남";?>&b=16&page=1&search=<?php echo $_GET["search"];?>&location=키워드">계롱</a></li>
          </ul>
        </li>
        <li>
         <li><a href="pro2.php?a=<?php echo "경북";?>&b=&page=1&search=<?php echo $_GET["search"];?>&location=키워드">경북</a>
          <ul>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=1&page=1&search=<?php echo $_GET["search"];?>&location=키워드">경산</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=2&page=1&search=<?php echo $_GET["search"];?>&location=키워드">경주</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=3&page=1&search=<?php echo $_GET["search"];?>&location=키워드">고령</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=4&page=1&search=<?php echo $_GET["search"];?>&location=키워드">구미</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=5&page=1&search=<?php echo $_GET["search"];?>&location=키워드">군위</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=6&page=1&search=<?php echo $_GET["search"];?>&location=키워드">김천</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=7&page=1&search=<?php echo $_GET["search"];?>&location=키워드">문경</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=8&page=1&search=<?php echo $_GET["search"];?>&location=키워드">봉화</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=9&page=1&search=<?php echo $_GET["search"];?>&location=키워드">상주</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=10&page=1&search=<?php echo $_GET["search"];?>&location=키워드">성주</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=11&page=1&search=<?php echo $_GET["search"];?>&location=키워드">안동</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=12&page=1&search=<?php echo $_GET["search"];?>&location=키워드">영덕</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=13&page=1&search=<?php echo $_GET["search"];?>&location=키워드">영양</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=14&page=1&search=<?php echo $_GET["search"];?>&location=키워드">영주</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=15&page=1&search=<?php echo $_GET["search"];?>&location=키워드">영천</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=16&page=1&search=<?php echo $_GET["search"];?>&location=키워드">예천</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=17&page=1&search=<?php echo $_GET["search"];?>&location=키워드">울릉</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=18&page=1&search=<?php echo $_GET["search"];?>&location=키워드">울진</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=19&page=1&search=<?php echo $_GET["search"];?>&location=키워드">의성</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=20&page=1&search=<?php echo $_GET["search"];?>&location=키워드">청도</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=21&page=1&search=<?php echo $_GET["search"];?>&location=키워드">청송</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=22&page=1&search=<?php echo $_GET["search"];?>&location=키워드">칠곡</a></li>
            <li><a href="pro2.php?a=<?php echo "경북";?>&b=23&page=1&search=<?php echo $_GET["search"];?>&location=키워드">포항</a></li>
        </ul> 
        </li>
        <li>
          <li><a href="pro2.php?a=<?php echo "경남";?>&b=&page=1&search=<?php echo $_GET["search"];?>&location=키워드">경남</a>
          <ul>
            <li><a href="pro2.php?a=<?php echo "경남";?>&b=1&page=1&search=<?php echo $_GET["search"];?>&location=키워드">거제</a></li>
            <li><a href="pro2.php?a=<?php echo "경남";?>&b=2page=1">거창</a></li>
            <li><a href="pro2.php?a=<?php echo "경남";?>&b=3&page=1&search=<?php echo $_GET["search"];?>&location=키워드">고성</a></li>
            <li><a href="pro2.php?a=<?php echo "경남";?>&b=4&page=1&search=<?php echo $_GET["search"];?>&location=키워드">김해</a></li>
            <li><a href="pro2.php?a=<?php echo "경남";?>&b=5&page=1&search=<?php echo $_GET["search"];?>&location=키워드">남해</a></li>
            <li><a href="pro2.php?a=<?php echo "경남";?>&b=6&page=1&search=<?php echo $_GET["search"];?>&location=키워드">마산</a></li>
            <li><a href="pro2.php?a=<?php echo "경남";?>&b=7&page=1&search=<?php echo $_GET["search"];?>&location=키워드">밀양</a></li>
            <li><a href="pro2.php?a=<?php echo "경남";?>&b=8&page=1&search=<?php echo $_GET["search"];?>&location=키워드">사천</a></li>
            <li><a href="pro2.php?a=<?php echo "경남";?>&b=9&page=1&search=<?php echo $_GET["search"];?>&location=키워드">산청</a></li>
            <li><a href="pro2.php?a=<?php echo "경남";?>&b=10&page=1&search=<?php echo $_GET["search"];?>&location=키워드">양산</a></li>
            <li><a href="pro2.php?a=<?php echo "경남";?>&b=12&page=1&search=<?php echo $_GET["search"];?>&location=키워드">의령</a></li>
            <li><a href="pro2.php?a=<?php echo "경남";?>&b=13&page=1&search=<?php echo $_GET["search"];?>&location=키워드">진주</a></li>
            <li><a href="pro2.php?a=<?php echo "경남";?>&b=14&page=1&search=<?php echo $_GET["search"];?>&location=키워드">진해</a></li>
            <li><a href="pro2.php?a=<?php echo "경남";?>&b=154&page=1&search=<?php echo $_GET["search"];?>&location=키워드">창녕</a></li>
            <li><a href="pro2.php?a=<?php echo "경남";?>&b=16&page=1&search=<?php echo $_GET["search"];?>&location=키워드">창원</a></li>
            <li><a href="pro2.php?a=<?php echo "경남";?>&b=17&page=1&search=<?php echo $_GET["search"];?>&location=키워드">통영</a></li>
            <li><a href="pro2.php?a=<?php echo "경남";?>&b=18&page=1&search=<?php echo $_GET["search"];?>&location=키워드">하동</a></li>
            <li><a href="pro2.php?a=<?php echo "경남";?>&b=19&page=1&search=<?php echo $_GET["search"];?>&location=키워드">함안</a></li>
            <li><a href="pro2.php?a=<?php echo "경남";?>&b=20&page=1&search=<?php echo $_GET["search"];?>&location=키워드">함양</a></li>
            <li><a href="pro2.php?a=<?php echo "경남";?>&b=21&page=1&search=<?php echo $_GET["search"];?>&location=키워드">합천</a></li>
          </ul>
        </li>
        <li>
         <li><a href="pro2.php?a=<?php echo "전북";?>&b=&page=1&search=<?php echo $_GET["search"];?>&location=키워드">전북</a>
          <ul>
            <li><a href="pro2.php?a=<?php echo "전북";?>&b=1&page=1&search=<?php echo $_GET["search"];?>&location=키워드">고창</a></li>
            <li><a href="pro2.php?a=<?php echo "전북";?>&b=2&page=1&search=<?php echo $_GET["search"];?>&location=키워드">군산</a></li>
            <li><a href="pro2.php?a=<?php echo "전북";?>&b=3&page=1&search=<?php echo $_GET["search"];?>&location=키워드">김제</a></li>
            <li><a href="pro2.php?a=<?php echo "전북";?>&b=4&page=1&search=<?php echo $_GET["search"];?>&location=키워드">남원</a></li>
            <li><a href="pro2.php?a=<?php echo "전북";?>&b=5&page=1&search=<?php echo $_GET["search"];?>&location=키워드">무주</a></li>
            <li><a href="pro2.php?a=<?php echo "전북";?>&b=6&page=1&search=<?php echo $_GET["search"];?>&location=키워드">부안</a></li>
            <li><a href="pro2.php?a=<?php echo "전북";?>&b=7&page=1&search=<?php echo $_GET["search"];?>&location=키워드">순창</a></li>
            <li><a href="pro2.php?a=<?php echo "전북";?>&b=8&page=1&search=<?php echo $_GET["search"];?>&location=키워드">완주</a></li>
            <li><a href="pro2.php?a=<?php echo "전북";?>&b=9&page=1&search=<?php echo $_GET["search"];?>&location=키워드">익산</a></li>
            <li><a href="pro2.php?a=<?php echo "전북";?>&b=10&page=1&search=<?php echo $_GET["search"];?>&location=키워드">임실</a></li>
            <li><a href="pro2.php?a=<?php echo "전북";?>&b=11&page=1&search=<?php echo $_GET["search"];?>&location=키워드">장수</a></li>
            <li><a href="pro2.php?a=<?php echo "전북";?>&b=12&page=1&search=<?php echo $_GET["search"];?>&location=키워드">전주</a></li>
            <li><a href="pro2.php?a=<?php echo "전북";?>&b=13&page=1&search=<?php echo $_GET["search"];?>&location=키워드">정읍</a></li>
            <li><a href="pro2.php?a=<?php echo "전북";?>&b=14&page=1&search=<?php echo $_GET["search"];?>&location=키워드">진안</a></li>
          </ul>
        </li>
        <li>
          <li><a href="pro2.php?a=<?php echo "전남";?>&b=&page=1&search=<?php echo $_GET["search"];?>&location=키워드">전남</a>
          <ul>
          <li><a href="pro2.php?a=<?php echo "전남";?>&b=1&page=1&search=<?php echo $_GET["search"];?>&location=키워드">강진</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=2&page=1&search=<?php echo $_GET["search"];?>&location=키워드">고흥</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=3&page=1&search=<?php echo $_GET["search"];?>&location=키워드">곡성</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=4&page=1&search=<?php echo $_GET["search"];?>&location=키워드">광양</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=5&page=1&search=<?php echo $_GET["search"];?>&location=키워드">구례</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=6&page=1&search=<?php echo $_GET["search"];?>&location=키워드">나주</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=7&page=1&search=<?php echo $_GET["search"];?>&location=키워드">담양</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=8&page=1&search=<?php echo $_GET["search"];?>&location=키워드">목포</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=9&page=1&search=<?php echo $_GET["search"];?>&location=키워드">무안</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=10&page=1&search=<?php echo $_GET["search"];?>&location=키워드">보성</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=11&page=1&search=<?php echo $_GET["search"];?>&location=키워드">순천</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=12&page=1&search=<?php echo $_GET["search"];?>&location=키워드">신안</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=13&page=1&search=<?php echo $_GET["search"];?>&location=키워드">여수</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=16&page=1&search=<?php echo $_GET["search"];?>&location=키워드">영광</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=17&page=1&search=<?php echo $_GET["search"];?>&location=키워드">영암</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=18&page=1&search=<?php echo $_GET["search"];?>&location=키워드">완도</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=19&page=1&search=<?php echo $_GET["search"];?>&location=키워드">장성</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=20&page=1&search=<?php echo $_GET["search"];?>&location=키워드">장흥</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=21&page=1&search=<?php echo $_GET["search"];?>&location=키워드">진도</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=22&page=1&search=<?php echo $_GET["search"];?>&location=키워드">함평</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=23&page=1&search=<?php echo $_GET["search"];?>&location=키워드">해남</a></li>
            <li><a href="pro2.php?a=<?php echo "전남";?>&b=24&page=1&search=<?php echo $_GET["search"];?>&location=키워드">화순</a></li>
접기
2.txt
4KB
          </ul>
        </li>
        <li>
          <a href="pro2.php?a=<?php echo "제주";?>&b=&page=1&search=<?php echo $_GET["search"];?>&location=키워드">제주</a>
          <ul>
           
            <li><a href="pro2.php?a=<?php echo "제주";?>&b=3&page=1&search=<?php echo $_GET["search"];?>&location=키워드">서귀포</a></li>
            
        </li>
        
      </ul>
    </nav>
  </div>
  <!-- <script>
    var nav = $("#topNav");

  //add indicators and hovers to submenu parents
    nav.find("li").each(function() {
    if ($(this).find("ul").length > 0) {

        $("<span>").text("^").appendTo($(this).children(":first"));

        //show subnav on hover
        $(this).click(function() {
            $(this).find("ul").stop(true, true).slideToggle();
        });
    }
});
  </script> -->

</body>
</html>

