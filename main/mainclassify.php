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
<?php
 ini_set( "display_errors", 0 );
    switch($_GET["location"]){
      case "여행지":
        $code = 12;
        break;
      case "맛집":
        $code = 39;
        break;
      case "문화재":
        $code = 14;
        break;
      case "축제":
        $code = 15;
        break;
      default:
        //echo "테스트용 확인";
    }
    ?>
<body>
<div class="bighead">
  <div class="searchArea">
            <form method="get" action="procode.php?page=1" >
            <input type="text" placeholder="검색어를 입력하세요" name="search">
            <input type="hidden" name="code" value= <?php echo $code ?>>
            <input type="hidden" name="location" value= <?php echo $_GET["location"] ?>>
            <button type="submit">검색</button>
        </form>
          </div>
          <ul class="nav">
            <div class="home-button">
              <a href="main.html">
                <img src="photo/exlogo.png">
              </a>
            </div>

            <li><a href="containfood.php?search=<?php echo $_GET["search"];?>&page=1&location=맛집">맛집</a></li>
            <li><a href="containtrip.php?search=<?php echo $_GET["search"];?>&page=1&location=여행지">여행지</a></li>
            <li><a href="containculture.php?search=<?php echo $_GET["search"];?>&page=1&location=문화재">문화재</a></li>
            <li><a href="containfestival.php?search=<?php echo $_GET["search"];?>&page=1&location=축제">축제</a></li>
          </ul>
  </div>
    <div class="con">
    <nav id="topNav" class="top-bar__menu-box-1">
      <ul>
        <li>
          <a href="proclassify.php?a=<?php echo "서울";?>&page=1&search=<?php echo $_GET["search"];?>">서울</a>
          <ul>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=1&page=1&search=<?php echo $_GET["search"];?>">강남</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=2&page=1&search=<?php echo $_GET["search"];?>">강동</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=3&page=1&search=<?php echo $_GET["search"];?>">강북</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=4&page=1&search=<?php echo $_GET["search"];?>">강서</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=5&page=1&search=<?php echo $_GET["search"];?>">관악</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=6&page=1&search=<?php echo $_GET["search"];?>">광진</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=7&page=1&search=<?php echo $_GET["search"];?>">구로</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=8&page=1&search=<?php echo $_GET["search"];?>">금천</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=9&page=1&search=<?php echo $_GET["search"];?>">노원</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=10&page=1&search=<?php echo $_GET["search"];?>">도봉</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=11&page=1&search=<?php echo $_GET["search"];?>">동대문</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=12&page=1&search=<?php echo $_GET["search"];?>">동작</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=13&page=1&search=<?php echo $_GET["search"];?>">마포</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=14&page=1&search=<?php echo $_GET["search"];?>">서대문</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=15&page=1&search=<?php echo $_GET["search"];?>">서초</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=16&page=1&search=<?php echo $_GET["search"];?>">성동</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=17&page=1&search=<?php echo $_GET["search"];?>">성북</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=18&page=1&search=<?php echo $_GET["search"];?>">송파</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=19&page=1&search=<?php echo $_GET["search"];?>">양천</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=20&page=1&search=<?php echo $_GET["search"];?>">영등포</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=21&page=1&search=<?php echo $_GET["search"];?>">용산</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=22&page=1&search=<?php echo $_GET["search"];?>">은평</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=23&page=1&search=<?php echo $_GET["search"];?>">종로</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=24&page=1&search=<?php echo $_GET["search"];?>">중구</a></li>
            <li><a href="proclassify.php?a=<?php echo "서울";?>&b=25&page=1&search=<?php echo $_GET["search"];?>">중랑</a></li>
          </ul>
        </li>
        <li>
          <a href="proclassify.php?a=<?php echo "부산";?>&page=1&search=<?php echo $_GET["search"];?>">부산</a>
          <ul>
            <li><a href="proclassify.php?a=<?php echo "부산";?>&b=1&page=1&search=<?php echo $_GET["search"];?>">강서</a></li>
            <li><a href="proclassify.php?a=<?php echo "부산";?>&b=2&page=1&search=<?php echo $_GET["search"];?>">금정</a></li>
            <li><a href="proclassify.php?a=<?php echo "부산";?>&b=3&page=1&search=<?php echo $_GET["search"];?>">기장</a></li>
            <li><a href="proclassify.php?a=<?php echo "부산";?>&b=4&page=1&search=<?php echo $_GET["search"];?>">남구</a></li>
            <li><a href="proclassify.php?a=<?php echo "부산";?>&b=5&page=1&search=<?php echo $_GET["search"];?>">동구</a></li>
            <li><a href="proclassify.php?a=<?php echo "부산";?>&b=6&page=1&search=<?php echo $_GET["search"];?>">동래</a></li>
            <li><a href="proclassify.php?a=<?php echo "부산";?>&b=7&page=1&search=<?php echo $_GET["search"];?>">부산진구</a></li>
            <li><a href="proclassify.php?a=<?php echo "부산";?>&b=8&page=1&search=<?php echo $_GET["search"];?>">북구</a></li>
            <li><a href="proclassify.php?a=<?php echo "부산";?>&b=9&page=1&search=<?php echo $_GET["search"];?>">사상</a></li>
            <li><a href="proclassify.php?a=<?php echo "부산";?>&b=10&page=1&search=<?php echo $_GET["search"];?>">사하</a></li>
            <li><a href="proclassify.php?a=<?php echo "부산";?>&b=11&page=1&search=<?php echo $_GET["search"];?>">서구</a></li>
            <li><a href="proclassify.php?a=<?php echo "부산";?>&b=12&page=1&search=<?php echo $_GET["search"];?>">수영</a></li>
            <li><a href="proclassify.php?a=<?php echo "부산";?>&b=13&page=1&search=<?php echo $_GET["search"];?>">연제</a></li>
            <li><a href="proclassify.php?a=<?php echo "부산";?>&b=14&page=1&search=<?php echo $_GET["search"];?>">영도</a></li>
            <li><a href="proclassify.php?a=<?php echo "부산";?>&b=15&page=1&search=<?php echo $_GET["search"];?>">중구</a></li>
            <li><a href="proclassify.php?a=<?php echo "부산";?>&b=16&page=1&search=<?php echo $_GET["search"];?>">해운대</a></li>
           </ul>
        </li>
        <li>
          <a href="proclassify.php?a=<?php echo "인천";?>&page=1&search=<?php echo $_GET["search"];?>">인천</a>
          <ul>
            <li><a href="proclassify.php?a=<?php echo "인천";?>&b=1&page=1&search=<?php echo $_GET["search"];?>">강화</a></li>
            <li><a href="proclassify.php?a=<?php echo "인천";?>&b=2&page=1&search=<?php echo $_GET["search"];?>">계양</a></li>
            <li><a href="proclassify.php?a=<?php echo "인천";?>&b=3&page=1&search=<?php echo $_GET["search"];?>">미추홀</a></li>
            <li><a href="proclassify.php?a=<?php echo "인천";?>&b=4&page=1&search=<?php echo $_GET["search"];?>">남동</a></li>
            <li><a href="proclassify.php?a=<?php echo "인천";?>&b=5&page=1&search=<?php echo $_GET["search"];?>">동구</a></li>
            <li><a href="proclassify.php?a=<?php echo "인천";?>&b=6&page=1&search=<?php echo $_GET["search"];?>">부평</a></li>
            <li><a href="proclassify.php?a=<?php echo "인천";?>&b=7&page=1&search=<?php echo $_GET["search"];?>">서구</a></li>
            <li><a href="proclassify.php?a=<?php echo "인천";?>&b=8&page=1&search=<?php echo $_GET["search"];?>">연수</a></li>
            <li><a href="proclassify.php?a=<?php echo "인천";?>&b=9&page=1&search=<?php echo $_GET["search"];?>">옹진</a></li>
            <li><a href="proclassify.php?a=<?php echo "인천";?>&b=10&page=1&search=<?php echo $_GET["search"];?>">중구</a></li>
          </ul>
        </li>
        <li>
          <a href="proclassify.php?a=<?php echo "대구";?>&page=1&search=<?php echo $_GET["search"];?>">대구</a>
          <ul>
            <li><a href="proclassify.php?a=<?php echo "대구";?>&b=1&page=1&search=<?php echo $_GET["search"];?>">남구</a></li>
            <li><a href="proclassify.php?a=<?php echo "대구";?>&b=2&page=1&search=<?php echo $_GET["search"];?>">달서</a></li>
            <li><a href="proclassify.php?a=<?php echo "대구";?>&b=3&page=1&search=<?php echo $_GET["search"];?>">달성</a></li>
            <li><a href="proclassify.php?a=<?php echo "대구";?>&b=4&page=1&search=<?php echo $_GET["search"];?>">동구</a></li>
            <li><a href="proclassify.php?a=<?php echo "대구";?>&b=5&page=1&search=<?php echo $_GET["search"];?>">북구</a></li>
            <li><a href="proclassify.php?a=<?php echo "대구";?>&b=6&page=1&search=<?php echo $_GET["search"];?>">서구</a></li>
            <li><a href="proclassify.php?a=<?php echo "대구";?>&b=7&page=1&search=<?php echo $_GET["search"];?>">수성</a></li>
            <li><a href="proclassify.php?a=<?php echo "대구";?>&b=8&page=1&search=<?php echo $_GET["search"];?>">중구</a></li>
          </ul>
        </li>
        <li>
          <a href="proclassify.php?a=<?php echo "대전";?>&page=1&search=<?php echo $_GET["search"];?>">대전</a>
          <ul>
            <li><a href="proclassify.php?a=<?php echo "대전";?>&b=1&page=1&search=<?php echo $_GET["search"];?>">대덕</a></li>
            <li><a href="proclassify.php?a=<?php echo "대전";?>&b=2&page=1&search=<?php echo $_GET["search"];?>">동구</a></li>
            <li><a href="proclassify.php?a=<?php echo "대전";?>&b=3&page=1&search=<?php echo $_GET["search"];?>">서구</a></li>
            <li><a href="proclassify.php?a=<?php echo "대전";?>&b=4&page=1&search=<?php echo $_GET["search"];?>">유성</a></li>
            <li><a href="proclassify.php?a=<?php echo "대전";?>&b=5&page=1&search=<?php echo $_GET["search"];?>">중구</a></li>
          </ul>
        </li>
        <li>
          <a href="proclassify.php?a=<?php echo "광주";?>&page=1&search=<?php echo $_GET["search"];?>">광주</a>
          <ul>
            <li><a href="proclassify.php?a=<?php echo "광주";?>&b=1&page=1&search=<?php echo $_GET["search"];?>">광산</a></li>
            <li><a href="proclassify.php?a=<?php echo "광주";?>&b=2&page=1&search=<?php echo $_GET["search"];?>">남구</a></li>
            <li><a href="proclassify.php?a=<?php echo "광주";?>&b=3&page=1&search=<?php echo $_GET["search"];?>">동구</a></li>
            <li><a href="proclassify.php?a=<?php echo "광주";?>&b=4&page=1&search=<?php echo $_GET["search"];?>">북구</a></li>
            <li><a href="proclassify.php?a=<?php echo "광주";?>&b=5&page=1&search=<?php echo $_GET["search"];?>">서구</a></li>
          </ul>
        </li>
        <li>
          <a href="proclassify.php?a=<?php echo "울산";?>&page=1&search=<?php echo $_GET["search"];?>">울산</a>
          <ul>
            <li><a href="proclassify.php?a=<?php echo "울산";?>&b=1&page=1&search=<?php echo $_GET["search"];?>">중구</a></li>
            <li><a href="proclassify.php?a=<?php echo "울산";?>&b=2&page=1&search=<?php echo $_GET["search"];?>">남구</a></li>
            <li><a href="proclassify.php?a=<?php echo "울산";?>&b=3&page=1&search=<?php echo $_GET["search"];?>">동구</a></li>
            <li><a href="proclassify.php?a=<?php echo "울산";?>&b=4&page=1&search=<?php echo $_GET["search"];?>">북구</a></li>
            <li><a href="proclassify.php?a=<?php echo "울산";?>&b=5&page=1&search=<?php echo $_GET["search"];?>">울주</a></li>
          </ul>
        </li>
        <li>
          <a href="proclassify.php?a=<?php echo "세종";?>&b=1&page=1&search=<?php echo $_GET["search"];?>">세종</a>
          <!-- <ul>
            <li><a href="proclassify.php?a=<?// echo "세종";?>&b=1&page=1&search=<?php echo $_GET["search"];?>">중구</a></li>
          </ul> -->
        </li>
        <li>
          <a href="proclassify.php?a=<?php echo "강원";?>&page=1&search=<?php echo $_GET["search"];?>">강원</a>
          <ul>
            <li><a href="proclassify.php?a=<?php echo "강원";?>&b=1&page=1&search=<?php echo $_GET["search"];?>">강릉</a></li>
            <li><a href="proclassify.php?a=<?php echo "강원";?>&b=2&page=1&search=<?php echo $_GET["search"];?>">고성</a></li>
            <li><a href="proclassify.php?a=<?php echo "강원";?>&b=3&page=1&search=<?php echo $_GET["search"];?>">동해</a></li>
            <li><a href="proclassify.php?a=<?php echo "강원";?>&b=4&page=1&search=<?php echo $_GET["search"];?>">삼척</a></li>
            <li><a href="proclassify.php?a=<?php echo "강원";?>&b=5&page=1&search=<?php echo $_GET["search"];?>">속초</a></li>
            <li><a href="proclassify.php?a=<?php echo "강원";?>&b=6&page=1&search=<?php echo $_GET["search"];?>">양구</a></li>
            <li><a href="proclassify.php?a=<?php echo "강원";?>&b=7&page=1&search=<?php echo $_GET["search"];?>">양양</a></li>
            <li><a href="proclassify.php?a=<?php echo "강원";?>&b=8&page=1&search=<?php echo $_GET["search"];?>">영월</a></li>
            <li><a href="proclassify.php?a=<?php echo "강원";?>&b=9&page=1&search=<?php echo $_GET["search"];?>">원주</a></li>
            <li><a href="proclassify.php?a=<?php echo "강원";?>&b=10&page=1&search=<?php echo $_GET["search"];?>">인제</a></li>
            <li><a href="proclassify.php?a=<?php echo "강원";?>&b=11&page=1&search=<?php echo $_GET["search"];?>">정선</a></li>
            <li><a href="proclassify.php?a=<?php echo "강원";?>&b=12&page=1&search=<?php echo $_GET["search"];?>">춸원</a></li>
            <li><a href="proclassify.php?a=<?php echo "강원";?>&b=13&page=1&search=<?php echo $_GET["search"];?>">춘천</a></li>
            <li><a href="proclassify.php?a=<?php echo "강원";?>&b=14&page=1&search=<?php echo $_GET["search"];?>">태백</a></li>
            <li><a href="proclassify.php?a=<?php echo "강원";?>&b=15&page=1&search=<?php echo $_GET["search"];?>">평창</a></li>
            <li><a href="proclassify.php?a=<?php echo "강원";?>&b=16&page=1&search=<?php echo $_GET["search"];?>">홍천</a></li>
            <li><a href="proclassify.php?a=<?php echo "강원";?>&b=17&page=1&search=<?php echo $_GET["search"];?>">화천</a></li>
            <li><a href="proclassify.php?a=<?php echo "강원";?>&b=18&page=1&search=<?php echo $_GET["search"];?>">횡성</a></li>
          </ul>
        </li>
        <li>
          <a href="proclassify.php?a=<?php echo "경기";?>&page=1&search=<?php echo $_GET["search"];?>">경기</a>
          <ul>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=1&page=1&search=<?php echo $_GET["search"];?>">가평</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=2&page=1&search=<?php echo $_GET["search"];?>">고양</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=3&page=1&search=<?php echo $_GET["search"];?>">과천</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=4&page=1&search=<?php echo $_GET["search"];?>">광명</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=5&page=1&search=<?php echo $_GET["search"];?>">광주</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=6&page=1&search=<?php echo $_GET["search"];?>">구리</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=7&page=1&search=<?php echo $_GET["search"];?>">군포</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=8&page=1&search=<?php echo $_GET["search"];?>">김포</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=9&page=1&search=<?php echo $_GET["search"];?>">남양주</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=10&page=1&search=<?php echo $_GET["search"];?>">동두천</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=11&page=1&search=<?php echo $_GET["search"];?>">부천</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=12&page=1&search=<?php echo $_GET["search"];?>">성남</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=13&page=1&search=<?php echo $_GET["search"];?>">수원</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=14&page=1&search=<?php echo $_GET["search"];?>">시흥</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=15&page=1&search=<?php echo $_GET["search"];?>">안산</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=16&page=1&search=<?php echo $_GET["search"];?>">안성</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=17&page=1&search=<?php echo $_GET["search"];?>">안양</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=18&page=1&search=<?php echo $_GET["search"];?>">양주</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=19&page=1&search=<?php echo $_GET["search"];?>">양평</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=20&page=1&search=<?php echo $_GET["search"];?>">여주</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=21&page=1&search=<?php echo $_GET["search"];?>">연천</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=22&page=1&search=<?php echo $_GET["search"];?>">오상</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=23&page=1&search=<?php echo $_GET["search"];?>">용인</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=24&page=1&search=<?php echo $_GET["search"];?>">의왕</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=25&page=1&search=<?php echo $_GET["search"];?>">의정부</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=26&page=1&search=<?php echo $_GET["search"];?>">이천</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=27&page=1&search=<?php echo $_GET["search"];?>">파주</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=28&page=1&search=<?php echo $_GET["search"];?>">평택</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=29&page=1&search=<?php echo $_GET["search"];?>">포천</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=30&page=1&search=<?php echo $_GET["search"];?>">하남</a></li>
            <li><a href="proclassify.php?a=<?php echo "경기";?>&b=31&page=1&search=<?php echo $_GET["search"];?>">화성</a></li>
          </ul>
        </li>

        <li>
          <a href="proclassify.php?a=<?php echo "충북";?>&page=1&search=<?php echo $_GET["search"];?>">충북</a>
          <ul>
            <li><a href="proclassify.php?a=<?php echo "충북";?>&b=1&page=1&search=<?php echo $_GET["search"];?>">괴산</a></li>
            <li><a href="proclassify.php?a=<?php echo "충북";?>&b=2&page=1&search=<?php echo $_GET["search"];?>">단양</a></li>
            <li><a href="proclassify.php?a=<?php echo "충북";?>&b=3&page=1&search=<?php echo $_GET["search"];?>">보은</a></li>
            <li><a href="proclassify.php?a=<?php echo "충북";?>&b=4&page=1&search=<?php echo $_GET["search"];?>">영동</a></li>
            <li><a href="proclassify.php?a=<?php echo "충북";?>&b=5&page=1&search=<?php echo $_GET["search"];?>">옥천</a></li>
            <li><a href="proclassify.php?a=<?php echo "충북";?>&b=6&page=1&search=<?php echo $_GET["search"];?>">음성</a></li>
            <li><a href="proclassify.php?a=<?php echo "충북";?>&b=7&page=1&search=<?php echo $_GET["search"];?>">제천</a></li>
            <li><a href="proclassify.php?a=<?php echo "충북";?>&b=8&page=1&search=<?php echo $_GET["search"];?>">진천</a></li>
            <li><a href="proclassify.php?a=<?php echo "충북";?>&b=9&page=1&search=<?php echo $_GET["search"];?>">청원</a></li>
            <li><a href="proclassify.php?a=<?php echo "충북";?>&b=10&page=1&search=<?php echo $_GET["search"];?>">청주</a></li>
            <li><a href="proclassify.php?a=<?php echo "충북";?>&b=11&page=1&search=<?php echo $_GET["search"];?>">충주</a></li>
            <li><a href="proclassify.php?a=<?php echo "충북";?>&b=12&page=1&search=<?php echo $_GET["search"];?>">증평</a></li>
          </ul>
        </li>
        <li>
          <a href="proclassify.php?a=<?php echo "충남";?>&page=1&search=<?php echo $_GET["search"];?>">충남</a>
          <ul>
            <li><a href="proclassify.php?a=<?php echo "충남";?>&b=1&page=1&search=<?php echo $_GET["search"];?>">공주</a></li>
            <li><a href="proclassify.php?a=<?php echo "충남";?>&b=2&page=1&search=<?php echo $_GET["search"];?>">금산</a></li>
            <li><a href="proclassify.php?a=<?php echo "충남";?>&b=3&page=1&search=<?php echo $_GET["search"];?>">논산</a></li>
            <li><a href="proclassify.php?a=<?php echo "충남";?>&b=4&page=1&search=<?php echo $_GET["search"];?>">당진</a></li>
            <li><a href="proclassify.php?a=<?php echo "충남";?>&b=5&page=1&search=<?php echo $_GET["search"];?>">보령</a></li>
            <li><a href="proclassify.php?a=<?php echo "충남";?>&b=6&page=1&search=<?php echo $_GET["search"];?>">부여</a></li>
            <li><a href="proclassify.php?a=<?php echo "충남";?>&b=7&page=1&search=<?php echo $_GET["search"];?>">서산</a></li>
            <li><a href="proclassify.php?a=<?php echo "충남";?>&b=8&page=1&search=<?php echo $_GET["search"];?>">서천</a></li>
            <li><a href="proclassify.php?a=<?php echo "충남";?>&b=9&page=1&search=<?php echo $_GET["search"];?>">아산</a></li>
            <li><a href="proclassify.php?a=<?php echo "충남";?>&b=11&page=1&search=<?php echo $_GET["search"];?>">예산</a></li>
            <li><a href="proclassify.php?a=<?php echo "충남";?>&b=12&page=1&search=<?php echo $_GET["search"];?>">천안</a></li>
            <li><a href="proclassify.php?a=<?php echo "충남";?>&b=13&page=1&search=<?php echo $_GET["search"];?>">청양</a></li>
            <li><a href="proclassify.php?a=<?php echo "충남";?>&b=14&page=1&search=<?php echo $_GET["search"];?>">태안</a></li>
            <li><a href="proclassify.php?a=<?php echo "충남";?>&b=15&page=1&search=<?php echo $_GET["search"];?>">홍성</a></li>
            <li><a href="proclassify.php?a=<?php echo "충남";?>&b=16&page=1&search=<?php echo $_GET["search"];?>">계롱</a></li>
          </ul>
        </li>
        <li>
          <a href="proclassify.php?a=<?php echo "경북";?>&page=1&search=<?php echo $_GET["search"];?>">경북</a>
          <ul>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=1&page=1&search=<?php echo $_GET["search"];?>">경산</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=2&page=1&search=<?php echo $_GET["search"];?>">경주</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=3&page=1&search=<?php echo $_GET["search"];?>">고령</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=4&page=1&search=<?php echo $_GET["search"];?>">구미</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=5&page=1&search=<?php echo $_GET["search"];?>">군위</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=6&page=1&search=<?php echo $_GET["search"];?>">김천</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=7&page=1&search=<?php echo $_GET["search"];?>">문경</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=8&page=1&search=<?php echo $_GET["search"];?>">봉화</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=9&page=1&search=<?php echo $_GET["search"];?>">상주</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=10&page=1&search=<?php echo $_GET["search"];?>">성주</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=11&page=1&search=<?php echo $_GET["search"];?>">안동</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=12&page=1&search=<?php echo $_GET["search"];?>">영덕</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=13&page=1&search=<?php echo $_GET["search"];?>">영양</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=14&page=1&search=<?php echo $_GET["search"];?>">영주</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=15&page=1&search=<?php echo $_GET["search"];?>">영천</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=16&page=1&search=<?php echo $_GET["search"];?>">예천</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=17&page=1&search=<?php echo $_GET["search"];?>">울릉</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=18&page=1&search=<?php echo $_GET["search"];?>">울진</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=19&page=1&search=<?php echo $_GET["search"];?>">의성</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=20&page=1&search=<?php echo $_GET["search"];?>">청도</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=21&page=1&search=<?php echo $_GET["search"];?>">청송</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=22&page=1&search=<?php echo $_GET["search"];?>">칠곡</a></li>
            <li><a href="proclassify.php?a=<?php echo "경북";?>&b=23&page=1&search=<?php echo $_GET["search"];?>">포항</a></li>
        </ul> 
        </li>
        <li>
          <a href="proclassify.php?a=<?php echo "경남";?>&page=1&search=<?php echo $_GET["search"];?>">경남</a>
          <ul>
            <li><a href="proclassify.php?a=<?php echo "경남";?>&b=1&page=1&search=<?php echo $_GET["search"];?>">거제</a></li>
            <li><a href="proclassify.php?a=<?php echo "경남";?>&b=2page=1">거창</a></li>
            <li><a href="proclassify.php?a=<?php echo "경남";?>&b=3&page=1&search=<?php echo $_GET["search"];?>">고성</a></li>
            <li><a href="proclassify.php?a=<?php echo "경남";?>&b=4&page=1&search=<?php echo $_GET["search"];?>">김해</a></li>
            <li><a href="proclassify.php?a=<?php echo "경남";?>&b=5&page=1&search=<?php echo $_GET["search"];?>">남해</a></li>
            <li><a href="proclassify.php?a=<?php echo "경남";?>&b=6&page=1&search=<?php echo $_GET["search"];?>">마산</a></li>
            <li><a href="proclassify.php?a=<?php echo "경남";?>&b=7&page=1&search=<?php echo $_GET["search"];?>">밀양</a></li>
            <li><a href="proclassify.php?a=<?php echo "경남";?>&b=8&page=1&search=<?php echo $_GET["search"];?>">사천</a></li>
            <li><a href="proclassify.php?a=<?php echo "경남";?>&b=9&page=1&search=<?php echo $_GET["search"];?>">산청</a></li>
            <li><a href="proclassify.php?a=<?php echo "경남";?>&b=10&page=1&search=<?php echo $_GET["search"];?>">양산</a></li>
            <li><a href="proclassify.php?a=<?php echo "경남";?>&b=12&page=1&search=<?php echo $_GET["search"];?>">의령</a></li>
            <li><a href="proclassify.php?a=<?php echo "경남";?>&b=13&page=1&search=<?php echo $_GET["search"];?>">진주</a></li>
            <li><a href="proclassify.php?a=<?php echo "경남";?>&b=14&page=1&search=<?php echo $_GET["search"];?>">진해</a></li>
            <li><a href="proclassify.php?a=<?php echo "경남";?>&b=154&page=1&search=<?php echo $_GET["search"];?>">창녕</a></li>
            <li><a href="proclassify.php?a=<?php echo "경남";?>&b=16&page=1&search=<?php echo $_GET["search"];?>">창원</a></li>
            <li><a href="proclassify.php?a=<?php echo "경남";?>&b=17&page=1&search=<?php echo $_GET["search"];?>">통영</a></li>
            <li><a href="proclassify.php?a=<?php echo "경남";?>&b=18&page=1&search=<?php echo $_GET["search"];?>">하동</a></li>
            <li><a href="proclassify.php?a=<?php echo "경남";?>&b=19&page=1&search=<?php echo $_GET["search"];?>">함안</a></li>
            <li><a href="proclassify.php?a=<?php echo "경남";?>&b=20&page=1&search=<?php echo $_GET["search"];?>">함양</a></li>
            <li><a href="proclassify.php?a=<?php echo "경남";?>&b=21&page=1&search=<?php echo $_GET["search"];?>">합천</a></li>
          </ul>
        </li>
        <li>
          <a href="proclassify.php?a=<?php echo "전북";?>&page=1&search=<?php echo $_GET["search"];?>">전북</a>
          <ul>
            <li><a href="proclassify.php?a=<?php echo "전북";?>&b=1&page=1&search=<?php echo $_GET["search"];?>">고창</a></li>
            <li><a href="proclassify.php?a=<?php echo "전북";?>&b=2&page=1&search=<?php echo $_GET["search"];?>">군산</a></li>
            <li><a href="proclassify.php?a=<?php echo "전북";?>&b=3&page=1&search=<?php echo $_GET["search"];?>">김제</a></li>
            <li><a href="proclassify.php?a=<?php echo "전북";?>&b=4&page=1&search=<?php echo $_GET["search"];?>">남원</a></li>
            <li><a href="proclassify.php?a=<?php echo "전북";?>&b=5&page=1&search=<?php echo $_GET["search"];?>">무주</a></li>
            <li><a href="proclassify.php?a=<?php echo "전북";?>&b=6&page=1&search=<?php echo $_GET["search"];?>">부안</a></li>
            <li><a href="proclassify.php?a=<?php echo "전북";?>&b=7&page=1&search=<?php echo $_GET["search"];?>">순창</a></li>
            <li><a href="proclassify.php?a=<?php echo "전북";?>&b=8&page=1&search=<?php echo $_GET["search"];?>">완주</a></li>
            <li><a href="proclassify.php?a=<?php echo "전북";?>&b=9&page=1&search=<?php echo $_GET["search"];?>">익산</a></li>
            <li><a href="proclassify.php?a=<?php echo "전북";?>&b=10&page=1&search=<?php echo $_GET["search"];?>">임실</a></li>
            <li><a href="proclassify.php?a=<?php echo "전북";?>&b=11&page=1&search=<?php echo $_GET["search"];?>">장수</a></li>
            <li><a href="proclassify.php?a=<?php echo "전북";?>&b=12&page=1&search=<?php echo $_GET["search"];?>">전주</a></li>
            <li><a href="proclassify.php?a=<?php echo "전북";?>&b=13&page=1&search=<?php echo $_GET["search"];?>">정읍</a></li>
            <li><a href="proclassify.php?a=<?php echo "전북";?>&b=14&page=1&search=<?php echo $_GET["search"];?>">진안</a></li>
          </ul>
        </li>
        <li>
          <a href="proclassify.php?a=<?php echo "전남";?>&page=1&search=<?php echo $_GET["search"];?>">전남</a>
          <ul>
          <li><a href="proclassify.php?a=<?php echo "전남";?>&b=1&page=1&search=<?php echo $_GET["search"];?>">강진</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=2&page=1&search=<?php echo $_GET["search"];?>">고흥</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=3&page=1&search=<?php echo $_GET["search"];?>">곡성</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=4&page=1&search=<?php echo $_GET["search"];?>">광양</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=5&page=1&search=<?php echo $_GET["search"];?>">구례</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=6&page=1&search=<?php echo $_GET["search"];?>">나주</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=7&page=1&search=<?php echo $_GET["search"];?>">담양</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=8&page=1&search=<?php echo $_GET["search"];?>">목포</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=9&page=1&search=<?php echo $_GET["search"];?>">무안</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=10&page=1&search=<?php echo $_GET["search"];?>">보성</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=11&page=1&search=<?php echo $_GET["search"];?>">순천</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=12&page=1&search=<?php echo $_GET["search"];?>">신안</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=13&page=1&search=<?php echo $_GET["search"];?>">여수</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=16&page=1&search=<?php echo $_GET["search"];?>">영광</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=17&page=1&search=<?php echo $_GET["search"];?>">영암</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=18&page=1&search=<?php echo $_GET["search"];?>">완도</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=19&page=1&search=<?php echo $_GET["search"];?>">장성</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=20&page=1&search=<?php echo $_GET["search"];?>">장흥</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=21&page=1&search=<?php echo $_GET["search"];?>">진도</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=22&page=1&search=<?php echo $_GET["search"];?>">함평</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=23&page=1&search=<?php echo $_GET["search"];?>">해남</a></li>
            <li><a href="proclassify.php?a=<?php echo "전남";?>&b=24&page=1&search=<?php echo $_GET["search"];?>">화순</a></li>
접기
807fcec249e346e3.txt
3KB
          </ul>
        </li>
        <li>
          <a href="proclassify.php?a=<?php echo "제주";?>&page=1&search=<?php echo $_GET["search"];?>">제주</a>
          <ul>
           
            <li><a href="proclassify.php?a=<?php echo "제주";?>&b=3&page=1&search=<?php echo $_GET["search"];?>">서귀포</a></li>

          </ul>
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

