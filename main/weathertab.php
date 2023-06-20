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
            <form method="get" action="weather.php" >
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
          <a href="weather.php?weather=<?php echo "서울특별시";?>&page=1&location=날씨">서울</a>
          <ul>
            <li><a href="weather.php?weather=<?php echo "강남구";?>&page=1&location=날씨">강남</a></li>
            <li><a href="weather.php?weather=<?php echo "강동구";?>&page=1&location=날씨">강동</a></li>
            <li><a href="weather.php?weather=<?php echo "강북구";?>&page=1&location=날씨">강북</a></li>
            <li><a href="weather.php?weather=<?php echo "강서구";?>&page=1&location=날씨">강서</a></li>
            <li><a href="weather.php?weather=<?php echo "관악구";?>&page=1&location=날씨">관악</a></li>
            <li><a href="weather.php?weather=<?php echo "광진구";?>&page=1&location=날씨">광진</a></li>
            <li><a href="weather.php?weather=<?php echo "구로구";?>&page=1&location=날씨">구로</a></li>
            <li><a href="weather.php?weather=<?php echo "금천구";?>&page=1&location=날씨">금천</a></li>
            <li><a href="weather.php?weather=<?php echo "노원구";?>&page=1&location=날씨">노원</a></li>
            <li><a href="weather.php?weather=<?php echo "도봉구";?>&page=1&location=날씨">도봉</a></li>
            <li><a href="weather.php?weather=<?php echo "동대문구";?>&page=1&location=날씨">동대문</a></li>
            <li><a href="weather.php?weather=<?php echo "동작구";?>&page=1&location=날씨">동작</a></li>
            <li><a href="weather.php?weather=<?php echo "마포구";?>&page=1&location=날씨">마포</a></li>
            <li><a href="weather.php?weather=<?php echo "서대문구";?>&page=1&location=날씨">서대문</a></li>
            <li><a href="weather.php?weather=<?php echo "서초구";?>&page=1&location=날씨">서초</a></li>
            <li><a href="weather.php?weather=<?php echo "성동구";?>&page=1&location=날씨">성동</a></li>
            <li><a href="weather.php?weather=<?php echo "성북구";?>&page=1&location=날씨">성북</a></li>
            <li><a href="weather.php?weather=<?php echo "송파구";?>&page=1&location=날씨">송파</a></li>
            <li><a href="weather.php?weather=<?php echo "양천구";?>&page=1&location=날씨">양천</a></li>
            <li><a href="weather.php?weather=<?php echo "영등포구";?>&page=1&location=날씨">영등포</a></li>
            <li><a href="weather.php?weather=<?php echo "용산구";?>&page=1&location=날씨">용산</a></li>
            <li><a href="weather.php?weather=<?php echo "은평구";?>&page=1&location=날씨">은평</a></li>
            <li><a href="weather.php?weather=<?php echo "종로구";?>&page=1&location=날씨">종로</a></li>
            <li><a href="weather.php?weather=<?php echo "서울특별시 중구";?>&page=1&location=날씨">중구</a></li>
            <li><a href="weather.php?weather=<?php echo "중랑구";?>&page=1&location=날씨">중랑</a></li>
          </ul>
        </li>
        <li>
          <a href="weather.php?weather=<?php echo "부산";?>&page=1&location=날씨">부산</a>
          <ul>
            <li><a href="weather.php?weather=<?php echo "부산광역시 강서구";?>&page=1&location=날씨">강서</a></li>
            <li><a href="weather.php?weather=<?php echo "부산광역시 금정구";?>&page=1&location=날씨">금정</a></li>
            <li><a href="weather.php?weather=<?php echo "부산광역시 기장군";?>&page=1&location=날씨">기장</a></li>
            <li><a href="weather.php?weather=<?php echo "부산광역시 남구";?>&page=1&location=날씨">남구</a></li>
            <li><a href="weather.php?weather=<?php echo "부산광역시 동구";?>&page=1&location=날씨">동구</a></li>
            <li><a href="weather.php?weather=<?php echo "부산광역시 동래구";?>&page=1&location=날씨">동래</a></li>
            <li><a href="weather.php?weather=<?php echo "부산광역시 진구";?>&page=1&location=날씨">부산진구 </a></li>
            <li><a href="weather.php?weather=<?php echo "부산광역시 북구";?>&page=1&location=날씨">북구</a></li>
            <li><a href="weather.php?weather=<?php echo "부산광역시 사상구";?>&page=1&location=날씨">사상</a></li>
            <li><a href="weather.php?weather=<?php echo "부산광역시 사하구";?>&page=1&location=날씨">사하</a></li>
            <li><a href="weather.php?weather=<?php echo "부산광역시 서구";?>&page=1&location=날씨">서구</a></li>
            <li><a href="weather.php?weather=<?php echo "부산광역시 수영구";?>&page=1&location=날씨">수영</a></li>
            <li><a href="weather.php?weather=<?php echo "부산광역시 연제구";?>&page=1&location=날씨">연제</a></li>
            <li><a href="weather.php?weather=<?php echo "부산광역시 영도구";?>&page=1&location=날씨">영도</a></li>
            <li><a href="weather.php?weather=<?php echo "부산광역시 중구";?>&page=1&location=날씨">중구</a></li>
            <li><a href="weather.php?weather=<?php echo "부산광역시 해운대구";?>&page=1&location=날씨">해운대</a></li>
           </ul>
        </li>
        <li>
          <a href="weather.php?weather=<?php echo "인천";?>&page=1&location=날씨">인천</a>
          <ul>
            <li><a href="weather.php?weather=<?php echo "인천광역시 강화군";?>&page=1&location=날씨">강화</a></li>
            <li><a href="weather.php?weather=<?php echo "인천광역시 계양구";?>&page=1&location=날씨">계양</a></li>
            <li><a href="weather.php?weather=<?php echo "인천광역시 미추홀구";?>&page=1&location=날씨">미추홀</a></li>
            <li><a href="weather.php?weather=<?php echo "인천광역시 남동구";?>&page=1&location=날씨">남동</a></li>
            <li><a href="weather.php?weather=<?php echo "인천광역시 동구";?>&page=1&location=날씨">동구</a></li>
            <li><a href="weather.php?weather=<?php echo "인천광역시 부평구";?>&page=1&location=날씨">부평</a></li>
            <li><a href="weather.php?weather=<?php echo "인천광역시 서구";?>&page=1&location=날씨">서구</a></li>
            <li><a href="weather.php?weather=<?php echo "인천광역시 연수구";?>&page=1&location=날씨">연수</a></li>
            <li><a href="weather.php?weather=<?php echo "인천광역시 옹진군";?>&page=1&location=날씨">옹진</a></li>
            <li><a href="weather.php?weather=<?php echo "인천광역시 중구";?>&page=1&location=날씨">중구</a></li>
          </ul>
        </li>
        <li>
          <a href="weather.php?weather=<?php echo "대구";?>&page=1&location=날씨"">대구</a>
          <ul>
            <li><a href="weather.php?weather=<?php echo "대구광역시 남구";?>&page=1&location=날씨">남구</a></li>
            <li><a href="weather.php?weather=<?php echo "대구광역시 달서구";?>&page=1&location=날씨">달서</a></li>
            <li><a href="weather.php?weather=<?php echo "대구광역시 달성군";?>&page=1&location=날씨">달성</a></li>
            <li><a href="weather.php?weather=<?php echo "대구광역시 동구";?>&page=1&location=날씨">동구</a></li>
            <li><a href="weather.php?weather=<?php echo "대구광역시 북구";?>&page=1&location=날씨">북구</a></li>
            <li><a href="weather.php?weather=<?php echo "대구광역시 서구";?>&page=1&location=날씨">서구</a></li>
            <li><a href="weather.php?weather=<?php echo "대구광역시 수성구";?>&page=1&location=날씨">수성</a></li>
            <li><a href="weather.php?weather=<?php echo "대구광역시 중구";?>&page=1&location=날씨">중구</a></li>
          </ul>
        </li>
        <li>
          <a href="weather.php?weather=<?php echo "대전";?>&page=1&location=날씨">대전</a>
          <ul>
            <li><a href="weather.php?weather=<?php echo "대전광역시 대덕구";?>&page=1&location=날씨">대덕</a></li>
            <li><a href="weather.php?weather=<?php echo "대전광역시 동구";?>&page=1&location=날씨">동구</a></li>
            <li><a href="weather.php?weather=<?php echo "대전광역시 서구";?>&page=1&location=날씨">서구</a></li>
            <li><a href="weather.php?weather=<?php echo "대전광역시 유성구";?>&page=1&location=날씨">유성</a></li>
            <li><a href="weather.php?weather=<?php echo "대전광역시 중구";?>&page=1&location=날씨">중구</a></li>
          </ul>
        </li>
        <li>
        <a href="weather.php?weather=<?php echo "광주";?>&page=1&location=날씨">광주</a>
          <ul>
            <li><a href="weather.php?weather=<?php echo "광주광역시 광산구";?>&page=1&location=날씨">광산</a></li>
            <li><a href="weather.php?weather=<?php echo "광주광역시 남구";?>&page=1&location=날씨">남구</a></li>
            <li><a href="weather.php?weather=<?php echo "광주광역시 동구";?>&page=1&location=날씨">동구</a></li>
            <li><a href="weather.php?weather=<?php echo "광주광역시 북구";?>&page=1&location=날씨">북구</a></li>
            <li><a href="weather.php?weather=<?php echo "광주광역시 서구";?>&page=1&location=날씨">서구</a></li>
          </ul>
        </li>
        <li>
          <a href="weather.php?weather=<?php echo "울산";?>&page=1&location=날씨">울산</a>
          <ul>
            <li><a href="weather.php?weather=<?php echo "울산광역시 중구";?>&page=1&location=날씨">중구</a></li>
            <li><a href="weather.php?weather=<?php echo "울산광역시 남구";?>&page=1&location=날씨">남구</a></li>
            <li><a href="weather.php?weather=<?php echo "울산광역시 동구";?>&page=1&location=날씨">동구</a></li>
            <li><a href="weather.php?weather=<?php echo "울산광역시 북구";?>&page=1&location=날씨">북구</a></li>
            <li><a href="weather.php?weather=<?php echo "울산광역시 울주군";?>&page=1&location=날씨">울주</a></li>
          </ul>
        </li>
        <li>
          <a href="weather.php?weather=<?php echo "세종";?>&page=1&location=날씨">세종</a>
          <!-- <ul>
            <li><a href="foodtap.php?a=<?// echo "세종";?>&page=1&location=날씨">중구</a></li>
          </ul> -->
        </li>
        <li>
          <a href="weather.php?weather=<?php echo "강원";?>&page=1&location=날씨">강원</a>
          <ul>
            <li><a href="weather.php?weather=<?php echo "강원도 강릉시";?>&page=1&location=날씨">강릉</a></li>
            <li><a href="weather.php?weather=<?php echo "강원도 고성군";?>&page=1&location=날씨">고성</a></li>
            <li><a href="weather.php?weather=<?php echo "강원도 동해시";?>&page=1&location=날씨">동해</a></li>
            <li><a href="weather.php?weather=<?php echo "강원도 삼척시";?>&page=1&location=날씨">삼척</a></li>
            <li><a href="weather.php?weather=<?php echo "강원도 속초시";?>&page=1&location=날씨">속초</a></li>
            <li><a href="weather.php?weather=<?php echo "강원도 양구군";?>&page=1&location=날씨">양구</a></li>
            <li><a href="weather.php?weather=<?php echo "강원도 양양군";?>&page=1&location=날씨">양양</a></li>
            <li><a href="weather.php?weather=<?php echo "강원도 영월군";?>&page=1&location=날씨">영월</a></li>
            <li><a href="weather.php?weather=<?php echo "강원도 원주시";?>&page=1&location=날씨">원주</a></li>
            <li><a href="weather.php?weather=<?php echo "강원도 인제군";?>&page=1&location=날씨">인제</a></li>
            <li><a href="weather.php?weather=<?php echo "강원도 정선군";?>&page=1&location=날씨">정선</a></li>
            <li><a href="weather.php?weather=<?php echo "강원도 철원군";?>&page=1&location=날씨">철원</a></li>
            <li><a href="weather.php?weather=<?php echo "강원도 춘천시";?>&page=1&location=날씨">춘천</a></li>
            <li><a href="weather.php?weather=<?php echo "강원도 태백시";?>&page=1&location=날씨">태백</a></li>
            <li><a href="weather.php?weather=<?php echo "강원도 평창군";?>&page=1&location=날씨">평창</a></li>
            <li><a href="weather.php?weather=<?php echo "강원도 홍천군";?>&page=1&location=날씨">홍천</a></li>
            <li><a href="weather.php?weather=<?php echo "강원도 화천군";?>&page=1&location=날씨">화천</a></li>
            <li><a href="weather.php?weather=<?php echo "강원도 횡성군";?>&page=1&location=날씨">횡성</a></li>
          </ul>
        </li>
        <li>
          <a href="weather.php?weather=<?php echo "경기";?>&page=1&location=날씨">경기</a>
          <ul>
            <li><a href="weather.php?weather=<?php echo "경기도 가평군";?>&page=1&location=날씨">가평</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 고양시";?>&page=1&location=날씨">고양</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 과천시";?>&page=1&location=날씨">과천</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 광명시" ;?>&page=1&location=날씨">광명</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 광주시";?>&page=1&location=날씨">광주</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 구리시";?>&page=1&location=날씨">구리</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 군포시";?>&page=1&location=날씨">군포</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 김포시";?>&page=1&location=날씨">김포</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 남양주시";?>&page=1&location=날씨">남양주</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 동두천시";?>&page=1&location=날씨">동두천</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 부천시";?>&page=1&location=날씨">부천</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 성남시";?>&page=1&location=날씨">성남</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 수원시";?>&page=1&location=날씨">수원</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 시흥시";?>&page=1&location=날씨">시흥</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 안산시";?>&page=1&location=날씨">안산</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 안성시";?>&page=1&location=날씨">안성</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 안양시";?>&page=1&location=날씨">안양</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 양주시";?>&page=1&location=날씨">양주</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 양평군";?>&page=1&location=날씨">양평</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 여주시";?>&page=1&location=날씨">여주</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 연천군";?>&page=1&location=날씨">연천</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 오산시";?>&page=1&location=날씨">오산</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 용인시";?>&page=1&location=날씨">용인</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 의왕시";?>&page=1&location=날씨">의왕</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 의정부시";?>&page=1&location=날씨">의정부</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 이천시";?>&page=1&location=날씨">이천</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 파주시";?>&page=1&location=날씨">파주</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 평택시";?>&page=1&location=날씨">평택</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 포천시";?>&page=1&location=날씨">포천</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 하남시";?>&page=1&location=날씨">하남</a></li>
            <li><a href="weather.php?weather=<?php echo "경기도 화성시";?>&page=1&location=날씨">화성</a></li>
          </ul>
        </li>

        <li>
        <a href="weather.php?weather=<?php echo "충청북도";?>&page=1&location=날씨">충북</a>
          <ul>
            <li><a href="weather.php?weather=<?php echo "충청북도 괴산군";?>&page=1&location=날씨">괴산</a></li>
            <li><a href="weather.php?weather=<?php echo "충청북도 단양군";?>&page=1&location=날씨">단양</a></li>
            <li><a href="weather.php?weather=<?php echo "충청북도 보은군";?>&page=1&location=날씨">보은</a></li>
            <li><a href="weather.php?weather=<?php echo "충청북도 영동군";?>&page=1&location=날씨">영동</a></li>
            <li><a href="weather.php?weather=<?php echo "충청북도 옥천군";?>&page=1&location=날씨">옥천</a></li>
            <li><a href="weather.php?weather=<?php echo "충청북도 음성군";?>&page=1&location=날씨">음성</a></li>
            <li><a href="weather.php?weather=<?php echo "충청북도 제천시";?>&page=1&location=날씨">제천</a></li>
            <li><a href="weather.php?weather=<?php echo "충청북도 진천군";?>&page=1&location=날씨">진천</a></li>
            <li><a href="weather.php?weather=<?php echo "충청북도 청원구";?>&page=1&location=날씨">청원</a></li>
            <li><a href="weather.php?weather=<?php echo "충청북도 청주시";?>&page=1&location=날씨">청주</a></li>
            <li><a href="weather.php?weather=<?php echo "충청북도 충주시";?>&page=1&location=날씨">충주</a></li>
            <li><a href="weather.php?weather=<?php echo "충청북도 증평군";?>&page=1&location=날씨">증평</a></li>
          </ul>
        </li>
        <li>
        <a href="weather.php?weather=<?php echo "충청남도";?>&page=1&location=날씨">충남</a>
          <ul>
            <li><a href="weather.php?weather=<?php echo "충청남도 공주시";?>&page=1&location=날씨">공주</a></li>
            <li><a href="weather.php?weather=<?php echo "충청남도 금산군";?>&page=1&location=날씨">금산</a></li>
            <li><a href="weather.php?weather=<?php echo "충청남도 논산시";?>&page=1&location=날씨">논산</a></li>
            <li><a href="weather.php?weather=<?php echo "충청남도 당진시";?>&page=1&location=날씨">당진</a></li>
            <li><a href="weather.php?weather=<?php echo "충청남도 보령시";?>&page=1&location=날씨">보령</a></li>
            <li><a href="weather.php?weather=<?php echo "충청남도 부여군";?>&page=1&location=날씨">부여</a></li>
            <li><a href="weather.php?weather=<?php echo "충청남도 서산시";?>&page=1&location=날씨">서산</a></li>
            <li><a href="weather.php?weather=<?php echo "충청남도 서천군";?>&page=1&location=날씨">서천</a></li>
            <li><a href="weather.php?weather=<?php echo "충청남도 아산시";?>&page=1&location=날씨">아산</a></li>
            <li><a href="weather.php?weather=<?php echo "충청남도 예산군";?>&page=1&location=날씨">예산</a></li>
            <li><a href="weather.php?weather=<?php echo "충청남도 천안시";?>&page=1&location=날씨">천안</a></li>
            <li><a href="weather.php?weather=<?php echo "충청남도 청양군";?>&page=1&location=날씨">청양</a></li>
            <li><a href="weather.php?weather=<?php echo "충청남도 태안군";?>&page=1&location=날씨">태안</a></li>
            <li><a href="weather.php?weather=<?php echo "충청남도 홍성군";?>&page=1&location=날씨">홍성</a></li>
            <li><a href="weather.php?weather=<?php echo "충청남도 계룡시";?>&page=1&location=날씨">계룡</a></li>
          </ul>
        </li>
        <li>
          <a href="weather.php?weather=<?php echo "경상북도";?>&page=1&location=날씨">경북</a>
          <ul>
            <li><a href="weather.php?weather=<?php echo "경상북도 경산시";?>&page=1&location=날씨">경산</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 경주시";?>&page=1&location=날씨">경주</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 고령군";?>&page=1&location=날씨">고령</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 구미시";?>&page=1&location=날씨">구미</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 군위군";?>&page=1&location=날씨">군위</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 김천시";?>&page=1&location=날씨">김천</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 문경시";?>&page=1&location=날씨">문경</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 봉화군";?>&page=1&location=날씨">봉화</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 상주시";?>&page=1&location=날씨">상주</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 성주군";?>&page=1&location=날씨">성주</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 안동시";?>&page=1&location=날씨">안동</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 영덕군";?>&page=1&location=날씨">영덕</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 영양군";?>&page=1&location=날씨">영양</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 영주시";?>&page=1&location=날씨">영주</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 영천시";?>&page=1&location=날씨">영천</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 예천군";?>&page=1&location=날씨">예천</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 울릉군";?>&page=1&location=날씨">울릉</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 울진군";?>&page=1&location=날씨">울진</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 의성군";?>&page=1&location=날씨">의성</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 청도군";?>&page=1&location=날씨">청도</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 청송군";?>&page=1&location=날씨">청송</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 칠곡군";?>&page=1&location=날씨">칠곡</a></li>
            <li><a href="weather.php?weather=<?php echo "경상북도 포항시";?>&page=1&location=날씨">포항</a></li>
        </ul> 
        </li>
        <li>
          <a href="weather.php?weather=<?php echo "경상남도";?>&page=1&location=날씨">경남</a>
          <ul>
            <li><a href="weather.php?weather=<?php echo "경상남도 거제시";?>&page=1&location=날씨">거제</a></li>
            <li><a href="weather.php?weather=<?php echo "경상남도 거창군";?>&page=1&location=날씨">거창</a></li>
            <li><a href="weather.php?weather=<?php echo "경상남도 고성군";?>&page=1&location=날씨">고성</a></li>
            <li><a href="weather.php?weather=<?php echo "경상남도 김해시";?>&page=1&location=날씨">김해</a></li>
            <li><a href="weather.php?weather=<?php echo "경상남도 남해군";?>&page=1&location=날씨">남해</a></li>
            <li><a href="weather.php?weather=<?php echo "경상남도 마산시";?>&page=1&location=날씨">마산</a></li>
            <li><a href="weather.php?weather=<?php echo "경상남도 밀양시";?>&page=1&location=날씨">밀양</a></li>
            <li><a href="weather.php?weather=<?php echo "경상남도 사천시";?>&page=1&location=날씨">사천</a></li>
            <li><a href="weather.php?weather=<?php echo "경상남도 산청군";?>&page=1&location=날씨">산청</a></li>
            <li><a href="weather.php?weather=<?php echo "경상남도 양산시";?>&page=1&location=날씨">양산</a></li>
            <li><a href="weather.php?weather=<?php echo "경상남도 의령군";?>&page=1&location=날씨">의령</a></li>
            <li><a href="weather.php?weather=<?php echo "경상남도 진주시";?>&page=1&location=날씨">진주</a></li>
            <li><a href="weather.php?weather=<?php echo "경상남도 진해구";?>&page=1&location=날씨">진해</a></li>
            <li><a href="weather.php?weather=<?php echo "경상남도 창녕군";?>&page=1&location=날씨">창녕</a></li>
            <li><a href="weather.php?weather=<?php echo "경상남도 창원시";?>&page=1&location=날씨">창원</a></li>
            <li><a href="weather.php?weather=<?php echo "경상남도 통영시";?>&page=1&location=날씨">통영</a></li>
            <li><a href="weather.php?weather=<?php echo "경상남도 하동군";?>&page=1&location=날씨">하동</a></li>
            <li><a href="weather.php?weather=<?php echo "경상남도 함안군";?>&page=1&location=날씨">함안</a></li>
            <li><a href="weather.php?weather=<?php echo "경상남도 함양군";?>&page=1&location=날씨">함양</a></li>
            <li><a href="weather.php?weather=<?php echo "경상남도 합천군";?>&page=1&location=날씨">합천</a></li>
          </ul>
        </li>
        <li>
          <a href="weather.php?weather=<?php echo "전라북도";?>&page=1&location=날씨">전북</a>
          <ul>
            <li><a href="weather.php?weather=<?php echo "전라북도 고창군";?>&page=1&location=날씨">고창</a></li>
            <li><a href="weather.php?weather=<?php echo "전라북도 군산시";?>&page=1&location=날씨">군산</a></li>
            <li><a href="weather.php?weather=<?php echo "전라북도 김제시";?>&page=1&location=날씨">김제</a></li>
            <li><a href="weather.php?weather=<?php echo "전라북도 남원시";?>&page=1&location=날씨">남원</a></li>
            <li><a href="weather.php?weather=<?php echo "전라북도 무주군";?>&page=1&location=날씨">무주</a></li>
            <li><a href="weather.php?weather=<?php echo "전라북도 부안군";?>&page=1&location=날씨">부안</a></li>
            <li><a href="weather.php?weather=<?php echo "전라북도 순창군";?>&page=1&location=날씨">순창</a></li>
            <li><a href="weather.php?weather=<?php echo "전라북도 완주군";?>&page=1&location=날씨">완주</a></li>
            <li><a href="weather.php?weather=<?php echo "전라북도 익산시";?>&page=1&location=날씨">익산</a></li>
            <li><a href="weather.php?weather=<?php echo "전라북도 임실군";?>&page=1&location=날씨">임실</a></li>
            <li><a href="weather.php?weather=<?php echo "전라북도 장수군";?>&page=1&location=날씨">장수</a></li>
            <li><a href="weather.php?weather=<?php echo "전라북도 전주시";?>&page=1&location=날씨">전주</a></li>
            <li><a href="weather.php?weather=<?php echo "전라북도 정읍시";?>&page=1&location=날씨">정읍</a></li>
            <li><a href="weather.php?weather=<?php echo "전라북도 진안군";?>&page=1&location=날씨">진안</a></li>
          </ul>
        </li>
        <li>
          <a href="weather.php?weather=<?php echo "전라남도";?>&page=1&location=날씨">전남</a>
          <ul>
            <li><a href="weather.php?weather=<?php echo "전라남도 강진군";?>&page=1&location=날씨">강진</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 고흥군";?>&page=1&location=날씨">고흥</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 곡성군";?>&page=1&location=날씨">곡성</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 광양시";?>&page=1&location=날씨">광양</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 구례군";?>&page=1&location=날씨">구례</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 나주시";?>&page=1&location=날씨">나주</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 담양군";?>&page=1&location=날씨">담양</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 목포시";?>&page=1&location=날씨">목포</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 무안군";?>&page=1&location=날씨">무안</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 보성군";?>&page=1&location=날씨">보성</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 순천시";?>&page=1&location=날씨">순천</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 신안군";?>&page=1&location=날씨">신안</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 여수시";?>&page=1&location=날씨">여수</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 영광군";?>&page=1&location=날씨">영광</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 영암군";?>&page=1&location=날씨">영암</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 완도군";?>&page=1&location=날씨">완도</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 장성군";?>&page=1&location=날씨">장성</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 장흥군";?>&page=1&location=날씨">장흥</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 진도군";?>&page=1&location=날씨">진도</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 함평군";?>&page=1&location=날씨">함평</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 해남군";?>&page=1&location=날씨">해남</a></li>
            <li><a href="weather.php?weather=<?php echo "전라남도 화순군";?>&page=1&location=날씨">화순</a></li>
          </ul>
        </li>

        <li>
          <a href="weather.php?weather=<?php echo "제주";?>&page=1&location=날씨">제주</a>
          <ul>
            <li><a href="weather.php?weather=<?php echo "제주특별자치도 서귀포시";?>&page=1&location=날씨">서귀포</a></li>
            
          </ul>
        </li>
        
      </ul>
    </nav>
  </div>
</body>
</html>
