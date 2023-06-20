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
            <form method="get" action="naver1.php" >
            <input type="text" placeholder="검색어를 입력하세요" name="weather">
            <button type="submit">검색</button>
        </form>
          </div>
          <ul class="nav">
            <div class="home-button">
              <a href="main.html">
                <img src="photo/exlogo.png">
              </a>
            </div>
            <?php ini_set( "display_errors", 0 );
            if($_GET['weather']!=True){ ?>
              <li><a href="weatherex.php">날씨</a></li>
              <li><a href="message.php">재난문자</a></li>
              <li><a href="foodex.php">맛집</a></li>
          <?php }else{ ?>
              <li><a href="weather.php?weather=<?php echo $_GET['weather'];?>&location=날씨">날씨</a></li>
              <li><a href="message.php?weather=<?php echo $_GET['weather'];?>&location=재난문자확인">재난문자</a></li>
              <li><a href="naver1.php?weather=<?php echo $_GET['weather'];?>&location=맛집 TOP5">맛집</a></li>
  <?php } ?>
          </ul>
  </div>
  <div class="con">
    <nav class="top-bar__menu-box-1">
      <ul>
        <li>
        <a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "서울";?>&page=1">서울</a>
          <ul>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강남구";?>&page=1">강남</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강동구";?>&page=1">강동</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강북구";?>&page=1">강북</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강서구";?>&page=1">강서</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "관악구";?>&page=1">관악</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "광진구";?>&page=1">광진</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "구로구";?>&page=1">구로</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "금천구";?>&page=1">금천</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "노원구";?>&page=1">노원</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "도봉구";?>&page=1">도봉</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "동대문구";?>&page=1">동대문</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "동작구";?>&page=1">동작</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "마포구";?>&page=1">마포</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "서대문구";?>&page=1">서대문</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "서초구";?>&page=1">서초</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "성동구";?>&page=1">성동</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "성북구";?>&page=1">성북</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "송파구";?>&page=1">송파</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "양천구";?>&page=1">양천</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "영등포구";?>&page=1">영등포</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "용산구";?>&page=1">용산</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "은평구";?>&page=1">은평</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "종로구";?>&page=1">종로</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "서울특별시 중구";?>&page=1">중구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "중랑구";?>&page=1">중랑</a></li>
          </ul>
        </li>
        <li>
          <a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "부산";?>&page=1">부산</a>
          <ul>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "부산광역시 강서구";?>&page=1">강서</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "부산광역시 금정구";?>&page=1">금정</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "부산광역시 기장군";?>&page=1">기장</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "부산광역시 남구";?>&page=1">남구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "부산광역시 동구";?>&page=1">동구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "부산광역시 동래구";?>&page=1">동래</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "부산광역시 진구";?>&page=1">부산진구 </a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "부산광역시 북구";?>&page=1">북구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "부산광역시 사상구";?>&page=1">사상</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "부산광역시 사하구";?>&page=1">사하</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "부산광역시 서구";?>&page=1">서구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "부산광역시 수영구";?>&page=1">수영</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "부산광역시 연제";?>&page=1">연제</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "부산광역시 영도";?>&page=1">영도</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "부산광역시 중구";?>&page=1">중구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "부산광역시 해운대";?>&page=1">해운대</a></li>
           </ul>
        </li>
        <li>
          <a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "인천";?>&page=1">인천</a>
          <ul>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "인천광역시 강화군";?>&page=1">강화</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "인천광역시 계양구";?>&page=1">계양</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "인천광역시 미추홀구";?>&page=1">미추홀</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "인천광역시 남동구";?>&page=1">남동</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "인천광역시 동구";?>&page=1">동구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "인천광역시 부평구";?>&page=1">부평</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "인천광역시 서구";?>&page=1">서구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "인천광역시 연수구";?>&page=1">연수</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "인천광역시 옹진군";?>&page=1">옹진</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "인천광역시 중구";?>&page=1">중구</a></li>
          </ul>
        </li>
        <li>
          <a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "대구";?>&page=1"">대구</a>
          <ul>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "대구광역시 남구";?>&page=1">남구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "대구광역시 달서구";?>&page=1">달서</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "대구광역시 달성군";?>&page=1">달성</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "대구광역시 동구";?>&page=1">동구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "대구광역시 북구";?>&page=1">북구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "대구광역시 서구";?>&page=1">서구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "대구광역시 수성구";?>&page=1">수성</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "대구광역시 중구";?>&page=1">중구</a></li>
          </ul>
        </li>
        <li>
          <a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "대전";?>&page=1">대전</a>
          <ul>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "대전광역시 대덕구";?>&page=1">대덕</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "대전광역시 동구";?>&page=1">동구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "대전광역시 서구";?>&page=1">서구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "대전광역시 유성구";?>&page=1">유성</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "대전광역시 중구";?>&page=1">중구</a></li>
          </ul>
        </li>
        <li>
        <a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "광주";?>&page=1">광주</a>
          <ul>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "광주광역시 광산구";?>&page=1">광산</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "광주광역시 남구";?>&page=1">남구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "광주광역시 동구";?>&page=1">동구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "광주광역시 북구";?>&page=1">북구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "광주광역시 서구";?>&page=1">서구</a></li>
          </ul>
        </li>
        <li>
          <a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "울산";?>&page=1">울산</a>
          <ul>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "울산광역시 중구";?>&page=1">중구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "울산광역시 남구";?>&page=1">남구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "울산광역시 동구";?>&page=1">동구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "울산광역시 북구";?>&page=1">북구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "울산광역시 울주군";?>&page=1">울주</a></li>
          </ul>
        </li>
        <li>
          <a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "세종";?>&page=1">세종</a>
          <!-- <ul>
            <li><a href="foodtap.php?a=<?// echo "세종";?>&page=1">중구</a></li>
          </ul> -->
        </li>
        <li>
          <a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강원";?>&page=1">강원</a>
          <ul>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강원도 강릉시";?>&page=1">강릉</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강원도 고성군";?>&page=1">고성</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강원도 동해시";?>&page=1">동해</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강원도 삼척시";?>&page=1">삼척</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강원도 속초시";?>&page=1">속초</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강원도 양구군";?>&page=1">양구</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강원도 양양군";?>&page=1">양양</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강원도 영월군";?>&page=1">영월</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강원도 원주시";?>&page=1">원주</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강원도 인제군";?>&page=1">인제</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강원도 정선군";?>&page=1">정선</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강원도 철원군";?>&page=1">춸원</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강원도 춘천시";?>&page=1">춘천</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강원도 태백시";?>&page=1">태백</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강원도 평창군";?>&page=1">평창</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강원도 홍천군";?>&page=1">홍천</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강원도 화천군";?>&page=1">화천</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "강원도 횡성군";?>&page=1">횡성</a></li>
          </ul>
        </li>
        <li>
          <a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기";?>&page=1">경기</a>
          <ul>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 가평군";?>&page=1">가평</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 고양시";?>&page=1">고양</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 과천시";?>&page=1">과천</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 광명시" ;?>&page=1">광명</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 광주시";?>&page=1">광주</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 구리시";?>&page=1">구리</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 군포시";?>&page=1">군포</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 김포시";?>&page=1">김포</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 남양주시";?>&page=1">남양주</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 동두천시";?>&page=1">동두천</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 부천시";?>&page=1">부천</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 성남시";?>&page=1">성남</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 수원시";?>&page=1">수원</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 시흥시";?>&page=1">시흥</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 안산시";?>&page=1">안산</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 안성시";?>&page=1">안성</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 안양시";?>&page=1">안양</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 양주시";?>&page=1">양주</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 양평군";?>&page=1">양평</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 여주시";?>&page=1">여주</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 연천군";?>&page=1">연천</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 오산시";?>&page=1">오산</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 용인시";?>&page=1">용인</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 의왕시";?>&page=1">의왕</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 의정부시";?>&page=1">의정부</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 이천시";?>&page=1">이천</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 파주시";?>&page=1">파주</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 평택시";?>&page=1">평택</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 포천시";?>&page=1">포천</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 하남시";?>&page=1">하남</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경기도 화성시";?>&page=1">화성</a></li>
          </ul>
        </li>

        <li>
        <a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청북도";?>&page=1">충북</a>
          <ul>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청북도 괴산군";?>&page=1">괴산</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청북도 단양군";?>&page=1">단양</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청북도 보은군";?>&page=1">보은</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청북도 영동군";?>&page=1">영동</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청북도 옥천군";?>&page=1">옥천</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청북도 음성군";?>&page=1">음성</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청북도 제천시";?>&page=1">제천</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청북도 진천군";?>&page=1">진천</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청북도 청원구";?>&page=1">청원</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청북도 청주시";?>&page=1">청주</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청북도 충주시";?>&page=1">충주</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청북도 증평군";?>&page=1">증평</a></li>
          </ul>
        </li>
        <li>
        <a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청남도";?>&page=1">충남</a>
          <ul>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청남도 공주시";?>&page=1">공주</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청남도 금산군";?>&page=1">금산</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청남도 논산시";?>&page=1">논산</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청남도 당진시";?>&page=1">당진</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청남도 보령시";?>&page=1">보령</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청남도 부여군";?>&page=1">부여</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청남도 서산시";?>&page=1">서산</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청남도 서천군";?>&page=1">서천</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청남도 아산시";?>&page=1">아산</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청남도 예산군";?>&page=1">예산</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청남도 천안시";?>&page=1">천안</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청남도 청양군";?>&page=1">청양</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청남도 태안군";?>&page=1">태안</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청남도 홍성군";?>&page=1">홍성</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "충청남도 계룡시";?>&page=1">계룡</a></li>
          </ul>
        </li>
        <li>
          <a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도";?>&page=1">경북</a>
          <ul>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 경산시";?>&page=1">경산</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 경주시";?>&page=1">경주</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 고령군";?>&page=1">고령</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 구미시";?>&page=1">구미</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 군위군";?>&page=1">군위</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 김천시";?>&page=1">김천</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 문경시";?>&page=1">문경</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 봉화군";?>&page=1">봉화</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 상주시";?>&page=1">상주</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 성주군";?>&page=1">성주</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 안동시";?>&page=1">안동</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 영덕군";?>&page=1">영덕</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 영양군";?>&page=1">영양</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 영주시";?>&page=1">영주</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 영천시";?>&page=1">영천</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 예천군";?>&page=1">예천</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 울릉군";?>&page=1">울릉</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 울진군";?>&page=1">울진</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 의성군";?>&page=1">의성</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 청도군";?>&page=1">청도</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 청송군";?>&page=1">청송</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 칠곡군";?>&page=1">칠곡</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상북도 포항시";?>&page=1">포항</a></li>
        </ul> 
        </li>
        <li>
          <a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도";?>&page=1">경남</a>
          <ul>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도 거제시";?>&page=1">거제</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도 거창군";?>&page=1">거창</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도 고성군";?>&page=1">고성</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도 김해시";?>&page=1">김해</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도 남해군";?>&page=1">남해</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도 마산시";?>&page=1">마산</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도 밀양시";?>&page=1">밀양</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도 사천시";?>&page=1">사천</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도 산청군";?>&page=1">산청</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도 양산시";?>&page=1">양산</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도 의령군";?>&page=1">의령</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도 진주시";?>&page=1">진주</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도 진해구";?>&page=1">진해</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도 창녕군";?>&page=1">창녕</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도 창원시";?>&page=1">창원</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도 통영시";?>&page=1">통영</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도 하동군";?>&page=1">하동</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도 함안군";?>&page=1">함안</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도 함양군";?>&page=1">함양</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "경상남도 합천군";?>&page=1">합천</a></li>
          </ul>
        </li>
        <li>
          <a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라북도";?>&page=1">전북</a>
          <ul>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라북도 고창군";?>&page=1">고창</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라북도 군산시";?>&page=1">군산</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라북도 김제시";?>&page=1">김제</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라북도 남원시";?>&page=1">남원</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라북도 무주군";?>&page=1">무주</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라북도 부안군";?>&page=1">부안</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라북도 순창군";?>&page=1">순창</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라북도 완주군";?>&page=1">완주</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라북도 익산시";?>&page=1">익산</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라북도 임실군";?>0&page=1">임실</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라북도 장수군";?>1&page=1">장수</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라북도 전주시";?>2&page=1">전주</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라북도 정읍시";?>3&page=1">정읍</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라북도 진안군";?>4&page=1">진안</a></li>
          </ul>
        </li>
        <li>
          <a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도";?>&page=1">전남</a>
          <ul>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 강진군";?>&page=1">강진</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 고흥군";?>&page=1">고흥</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 곡성군";?>&page=1">곡성</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 광양시";?>&page=1">광양</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 구례군";?>&page=1">구례</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 나주시";?>&page=1">나주</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 담양군";?>&page=1">담양</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 목포시";?>&page=1">목포</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 무안군";?>&page=1">무안</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 보성군";?>&page=1">보성</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 순천시";?>&page=1">순천</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 신안군";?>&page=1">신안</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 여수시";?>&page=1">여수</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 영광군";?>&page=1">영광</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 영암군";?>&page=1">영암</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 완도군";?>&page=1">완도</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 장성군";?>&page=1">장성</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 장흥군";?>&page=1">장흥</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 진도군";?>&page=1">진도</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 함평군";?>&page=1">함평</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 해남군";?>&page=1">해남</a></li>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "전라남도 화순군";?>&page=1">화순</a></li>
          </ul>
        </li>
        <li>
          <a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "제주";?>&page=1">제주</a>
          <ul>
            <li><a href="naver1.php?&location=맛집 TOP5&weather=<?php echo "제주특별자치도 서귀포시";?>&page=1">서귀포</a></li>
          </ul>
        </li>
        
      </ul>
    </nav>
  </div>
</body>
</html>