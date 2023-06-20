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
            <form method="get" action="procode.php?page=1" >
            <input type="text" placeholder="검색어를 입력하세요" name="search">
            <input type="hidden" name="code" value="15">
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
            <li><a href="containfood2.php?a=<?php echo $_GET["a"];?>&location=맛집&b=<?php echo $_GET["b"];?>&page=1">맛집</a></li>
            <li><a href="containtrip2.php?a=<?php echo $_GET["a"];?>&location=여행지&b=<?php echo $_GET["b"];?>&page=1">여행지</a></li>
            <li><a href="containculture2.php?a=<?php echo $_GET["a"];?>&location=문화재&b=<?php echo $_GET["b"];?>&page=1">문화재</a></li>
            <li><a href="containfestival2.php?a=<?php echo $_GET["a"];?>&location=축제&b=<?php echo $_GET["b"];?>&page=1">축제</a></li>
          </ul>
          </div>
    <div class="con">
    <nav class="top-bar__menu-box-1">
      <ul>
        <li>
          <a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=&page=1">서울</a>
          <ul>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=1&page=1">강남</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=2&page=1">강동</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=3&page=1">강북</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=4&page=1">강서</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=5&page=1">관악</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=6&page=1">광진</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=7&page=1">구로</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=8&page=1">금천</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=9&page=1">노원</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=10&page=1">도봉</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=11&page=1">동대문</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=12&page=1">동작</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=13&page=1">마포</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=14&page=1">서대문</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=15&page=1">서초</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=16&page=1">성동</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=17&page=1">성북</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=18&page=1">송파</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=19&page=1">양천</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=20&page=1">영등포</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=21&page=1">용산</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=22&page=1">은평</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=23&page=1">종로</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=24&page=1">중구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "서울";?>&location=축제&b=25&page=1">중랑</a></li>
          </ul>
        </li>
        <li>
          <a href="festivaltap.php?a=<?php echo "부산";?>&location=축제&b=&page=1">부산</a>
          <ul>
            <li><a href="festivaltap.php?a=<?php echo "부산";?>&location=축제&b=1&page=1">강서</a></li>
            <li><a href="festivaltap.php?a=<?php echo "부산";?>&location=축제&b=2&page=1">금정</a></li>
            <li><a href="festivaltap.php?a=<?php echo "부산";?>&location=축제&b=3&page=1">기장</a></li>
            <li><a href="festivaltap.php?a=<?php echo "부산";?>&location=축제&b=4&page=1">남구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "부산";?>&location=축제&b=5&page=1">동구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "부산";?>&location=축제&b=6&page=1">동래</a></li>
            <li><a href="festivaltap.php?a=<?php echo "부산";?>&location=축제&b=7&page=1">부산진구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "부산";?>&location=축제&b=8&page=1">북구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "부산";?>&location=축제&b=9&page=1">사상</a></li>
            <li><a href="festivaltap.php?a=<?php echo "부산";?>&location=축제&b=10&page=1">사하</a></li>
            <li><a href="festivaltap.php?a=<?php echo "부산";?>&location=축제&b=11&page=1">서구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "부산";?>&location=축제&b=12&page=1">수영</a></li>
            <li><a href="festivaltap.php?a=<?php echo "부산";?>&location=축제&b=13&page=1">연제</a></li>
            <li><a href="festivaltap.php?a=<?php echo "부산";?>&location=축제&b=14&page=1">영도</a></li>
            <li><a href="festivaltap.php?a=<?php echo "부산";?>&location=축제&b=15&page=1">중구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "부산";?>&location=축제&b=16&page=1">해운대</a></li>
           </ul>
        </li>
        <li>
          <a href="festivaltap.php?a=<?php echo "인천";?>&location=축제&b=&page=1">인천</a>
          <ul>
            <li><a href="festivaltap.php?a=<?php echo "인천";?>&location=축제&b=1&page=1">강화</a></li>
            <li><a href="festivaltap.php?a=<?php echo "인천";?>&location=축제&b=2&page=1">계양</a></li>
            <li><a href="festivaltap.php?a=<?php echo "인천";?>&location=축제&b=3&page=1">미추홀</a></li>
            <li><a href="festivaltap.php?a=<?php echo "인천";?>&location=축제&b=4&page=1">남동</a></li>
            <li><a href="festivaltap.php?a=<?php echo "인천";?>&location=축제&b=5&page=1">동구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "인천";?>&location=축제&b=6&page=1">부평</a></li>
            <li><a href="festivaltap.php?a=<?php echo "인천";?>&location=축제&b=7&page=1">서구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "인천";?>&location=축제&b=8&page=1">연수</a></li>
            <li><a href="festivaltap.php?a=<?php echo "인천";?>&location=축제&b=9&page=1">옹진</a></li>
            <li><a href="festivaltap.php?a=<?php echo "인천";?>&location=축제&b=10&page=1">중구</a></li>
          </ul>
        </li>
        <li>
          <a href="festivaltap.php?a=<?php echo "대구";?>&location=축제&b=&page=1">대구</a>
          <ul>
            <li><a href="festivaltap.php?a=<?php echo "대구";?>&location=축제&b=1&page=1">남구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "대구";?>&location=축제&b=2&page=1">달서</a></li>
            <li><a href="festivaltap.php?a=<?php echo "대구";?>&location=축제&b=3&page=1">달성</a></li>
            <li><a href="festivaltap.php?a=<?php echo "대구";?>&location=축제&b=4&page=1">동구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "대구";?>&location=축제&b=5&page=1">북구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "대구";?>&location=축제&b=6&page=1">서구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "대구";?>&location=축제&b=7&page=1">수성</a></li>
            <li><a href="festivaltap.php?a=<?php echo "대구";?>&location=축제&b=8&page=1">중구</a></li>
          </ul>
        </li>
        <li>
          <a href="festivaltap.php?a=<?php echo "대전";?>&location=축제&b=&page=1">대전</a>
          <ul>
            <li><a href="festivaltap.php?a=<?php echo "대전";?>&location=축제&b=1&page=1">대덕</a></li>
            <li><a href="festivaltap.php?a=<?php echo "대전";?>&location=축제&b=2&page=1">동구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "대전";?>&location=축제&b=3&page=1">서구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "대전";?>&location=축제&b=4&page=1">유성</a></li>
            <li><a href="festivaltap.php?a=<?php echo "대전";?>&location=축제&b=5&page=1">중구</a></li>
          </ul>
        </li>
        <li>
          <a href="festivaltap.php?a=<?php echo "광주";?>&location=축제&b=&page=1">광주</a>
          <ul>
            <li><a href="festivaltap.php?a=<?php echo "광주";?>&location=축제&b=1&page=1">광산</a></li>
            <li><a href="festivaltap.php?a=<?php echo "광주";?>&location=축제&b=2&page=1">남구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "광주";?>&location=축제&b=3&page=1">동구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "광주";?>&location=축제&b=4&page=1">북구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "광주";?>&location=축제&b=5&page=1">서구</a></li>
          </ul>
        </li>
        <li>
          <a href="festivaltap.php?a=<?php echo "울산";?>&location=축제&b=&page=1">울산</a>
          <ul>
            <li><a href="festivaltap.php?a=<?php echo "울산";?>&location=축제&b=1&page=1">중구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "울산";?>&location=축제&b=2&page=1">남구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "울산";?>&location=축제&b=3&page=1">동구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "울산";?>&location=축제&b=4&page=1">북구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "울산";?>&location=축제&b=5&page=1">울주</a></li>
          </ul>
        </li>
        <li>
          <a href="festivaltap.php?a=<?php echo "세종";?>&location=축제&b=&page=1">세종</a>
          <!-- <ul>
            <li><a href="festivaltap.php?a=<?// echo "세종";?>&location=축제&b=1&page=1">중구</a></li>
          </ul> -->
        </li>
        <li>
          <a href="festivaltap.php?a=<?php echo "강원";?>&location=축제&b=&page=1">강원</a>
          <ul>
            <li><a href="festivaltap.php?a=<?php echo "강원";?>&location=축제&b=1&page=1">강릉</a></li>
            <li><a href="festivaltap.php?a=<?php echo "강원";?>&location=축제&b=2&page=1">고성</a></li>
            <li><a href="festivaltap.php?a=<?php echo "강원";?>&location=축제&b=3&page=1">동해</a></li>
            <li><a href="festivaltap.php?a=<?php echo "강원";?>&location=축제&b=4&page=1">삼척</a></li>
            <li><a href="festivaltap.php?a=<?php echo "강원";?>&location=축제&b=5&page=1">속초</a></li>
            <li><a href="festivaltap.php?a=<?php echo "강원";?>&location=축제&b=6&page=1">양구</a></li>
            <li><a href="festivaltap.php?a=<?php echo "강원";?>&location=축제&b=7&page=1">양양</a></li>
            <li><a href="festivaltap.php?a=<?php echo "강원";?>&location=축제&b=8&page=1">영월</a></li>
            <li><a href="festivaltap.php?a=<?php echo "강원";?>&location=축제&b=9&page=1">원주</a></li>
            <li><a href="festivaltap.php?a=<?php echo "강원";?>&location=축제&b=10&page=1">인제</a></li>
            <li><a href="festivaltap.php?a=<?php echo "강원";?>&location=축제&b=11&page=1">정선</a></li>
            <li><a href="festivaltap.php?a=<?php echo "강원";?>&location=축제&b=12&page=1">춸원</a></li>
            <li><a href="festivaltap.php?a=<?php echo "강원";?>&location=축제&b=13&page=1">춘천</a></li>
            <li><a href="festivaltap.php?a=<?php echo "강원";?>&location=축제&b=14&page=1">태백</a></li>
            <li><a href="festivaltap.php?a=<?php echo "강원";?>&location=축제&b=15&page=1">평창</a></li>
            <li><a href="festivaltap.php?a=<?php echo "강원";?>&location=축제&b=16&page=1">홍천</a></li>
            <li><a href="festivaltap.php?a=<?php echo "강원";?>&location=축제&b=17&page=1">화천</a></li>
            <li><a href="festivaltap.php?a=<?php echo "강원";?>&location=축제&b=18&page=1">횡성</a></li>
          </ul>
        </li>
        <li>
          <a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=&page=1">경기</a>
          <ul>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=1&page=1">가평</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=2&page=1">고양</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=3&page=1">과천</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=4&page=1">광명</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=5&page=1">광주</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=6&page=1">구리</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=7&page=1">군포</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=8&page=1">김포</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=9&page=1">남양주</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=10&page=1">동두천</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=11&page=1">부천</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=12&page=1">성남</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=13&page=1">수원</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=14&page=1">시흥</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=15&page=1">안산</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=16&page=1">안성</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=17&page=1">안양</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=18&page=1">양주</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=19&page=1">양평</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=20&page=1">여주</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=21&page=1">연천</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=22&page=1">오상</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=23&page=1">용인</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=24&page=1">의왕</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=25&page=1">의정부</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=26&page=1">이천</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=27&page=1">파주</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=28&page=1">평택</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=29&page=1">포천</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=30&page=1">하남</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경기";?>&location=축제&b=31&page=1">화성</a></li>
          </ul>
        </li>
        <li>
          <a href="festivaltap.php?a=<?php echo "충북";?>&location=축제&b=&page=1">충북</a>
          <ul>
            <li><a href="festivaltap.php?a=<?php echo "충북";?>&location=축제&b=1&page=1">괴산</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충북";?>&location=축제&b=2&page=1">단양</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충북";?>&location=축제&b=3&page=1">보은</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충북";?>&location=축제&b=4&page=1">영동</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충북";?>&location=축제&b=5&page=1">옥천</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충북";?>&location=축제&b=6&page=1">음성</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충북";?>&location=축제&b=7&page=1">제천</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충북";?>&location=축제&b=8&page=1">진천</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충북";?>&location=축제&b=9&page=1">청원</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충북";?>&location=축제&b=10&page=1">청주</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충북";?>&location=축제&b=11&page=1">충주</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충북";?>&location=축제&b=12&page=1">증평</a></li>
          </ul>
        </li>
        <li>
          <a href="festivaltap.php?a=<?php echo "충남";?>&location=축제&b=&page=1">충남</a>
          <ul>
            <li><a href="festivaltap.php?a=<?php echo "충남";?>&location=축제&b=1&page=1">공주</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충남";?>&location=축제&b=2&page=1">금산</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충남";?>&location=축제&b=3&page=1">논산</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충남";?>&location=축제&b=4&page=1">당진</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충남";?>&location=축제&b=5&page=1">보령</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충남";?>&location=축제&b=6&page=1">부여</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충남";?>&location=축제&b=7&page=1">서산</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충남";?>&location=축제&b=8&page=1">서천</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충남";?>&location=축제&b=9&page=1">아산</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충남";?>&location=축제&b=11&page=1">예산</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충남";?>&location=축제&b=12&page=1">천안</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충남";?>&location=축제&b=13&page=1">청양</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충남";?>&location=축제&b=14&page=1">태안</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충남";?>&location=축제&b=15&page=1">홍성</a></li>
            <li><a href="festivaltap.php?a=<?php echo "충남";?>&location=축제&b=16&page=1">계롱</a></li>
          </ul>
        </li>
        <li>
          <a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=&page=1">경북</a>
          <ul>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=1&page=1">경산</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=2&page=1">경주</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=3&page=1">고령</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=4&page=1">구미</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=5&page=1">군위</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=6&page=1">김천</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=7&page=1">문경</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=8&page=1">봉화</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=9&page=1">상주</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=10&page=1">성주</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=11&page=1">안동</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=12&page=1">영덕</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=13&page=1">영양</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=14&page=1">영주</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=15&page=1">영천</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=16&page=1">예천</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=17&page=1">울릉</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=18&page=1">울진</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=19&page=1">의성</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=20&page=1">청도</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=21&page=1">청송</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=22&page=1">칠곡</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경북";?>&location=축제&b=23&page=1">포항</a></li>
        </ul> 
        </li>
        <li>
          <a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=&page=1">경남</a>
          <ul>
            <li><a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=1&page=1">거제</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=2page=1">거창</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=3&page=1">고성</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=4&page=1">김해</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=5&page=1">남해</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=6&page=1">마산</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=7&page=1">밀양</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=8&page=1">사천</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=9&page=1">산청</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=10&page=1">양산</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=12&page=1">의령</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=13&page=1">진주</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=14&page=1">진해</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=154&page=1">창녕</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=16&page=1">창원</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=17&page=1">통영</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=18&page=1">하동</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=19&page=1">함안</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=20&page=1">함양</a></li>
            <li><a href="festivaltap.php?a=<?php echo "경남";?>&location=축제&b=21&page=1">합천</a></li>
          </ul>
        </li>
        <li>
          <a href="festivaltap.php?a=<?php echo "전북";?>&location=축제&b=&page=1">전북</a>
          <ul>
            <li><a href="festivaltap.php?a=<?php echo "전북";?>&location=축제&b=1&page=1">고창</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전북";?>&location=축제&b=2&page=1">군산</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전북";?>&location=축제&b=3&page=1">김제</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전북";?>&location=축제&b=4&page=1">남원</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전북";?>&location=축제&b=5&page=1">무주</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전북";?>&location=축제&b=6&page=1">부안</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전북";?>&location=축제&b=7&page=1">순창</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전북";?>&location=축제&b=8&page=1">완주</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전북";?>&location=축제&b=9&page=1">익산</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전북";?>&location=축제&b=10&page=1">임실</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전북";?>&location=축제&b=11&page=1">장수</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전북";?>&location=축제&b=12&page=1">전주</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전북";?>&location=축제&b=13&page=1">정읍</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전북";?>&location=축제&b=14&page=1">진안</a></li>
          </ul>
        </li>
        <li>
          <a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=&page=1">전남</a>
          <ul>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=1&page=1">강진</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=2&page=1">고흥</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=3&page=1">곡성</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=4&page=1">광양</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=5&page=1">구례</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=6&page=1">나주</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=7&page=1">담양</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=8&page=1">목포</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=9&page=1">무안</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=10&page=1">보성</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=11&page=1">순천</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=12&page=1">신안</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=13&page=1">여수</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=16&page=1">영광</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=17&page=1">영암</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=18&page=1">완도</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=19&page=1">장성</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=20&page=1"">장흥</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=21&page=1">진도</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=22&page=1">함평</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=23&page=1">해남</a></li>
            <li><a href="festivaltap.php?a=<?php echo "전남";?>&location=축제&b=24&page=1">화순</a></li>
          </ul>
        </li>
        <li>
          <a href="festivaltap.php?a=<?php echo "제주";?>&location=축제&b=&page=1">제주</a>
          <ul>

            <li><a href="festivaltap.php?a=<?php echo "제주";?>&location=축제&b=3&page=1">서귀포</a></li>

          </ul>
        </li>
        
      </ul>
    </nav>
  </div>
</body>
</html>

