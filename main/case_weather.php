<?php

switch($_GET['weather']){ // $_GET['weather']는 사용자가 입력한 값
    case "서울":
    case "서울시":
    case "서울특별시":
        $_GET['weather']="서울특별시";
        break;
    case "강남구":
    case "강남":
        $_GET['weather']="강남구";
        break;
    case "강동구":
    case "강동":
        $_GET['weather']="강동구";
        break;
    case "강북구":
    case "강북":
        $_GET['weather']="강북구";
        break;
    case "강서구":
    case "강서":
        $_GET['weather']="강서구";
        break;
    case "관악구":
    case "관악":
        $_GET['weather']="관악구";
        break;
    case "광진구":
    case "광진":
        $_GET['weather']="광진구";
        break;
    case "구로구":
    case "구로":
        $_GET['weather']="구로구";
        break;
    case "금천구":
    case "금천":
        $_GET['weather']="금천구";
        break;
    case "노원구":
    case "노원":
        $_GET['weather']="노원구";
        break;
    case "도봉구":
    case "도봉":
        $_GET['weather']="도봉구";
        break;
    case "동대문구":
    case "동대문":
        $_GET['weather']="동대문구";
        break;
    case "동작구":
    case "동작":
        $_GET['weather']="동작구";
        break;
    case "마포구":
    case "마포":
        $_GET['weather']="마포구";
        break;
    case "서대문구":
    case "서대문":
        $_GET['weather']="서대문구";
        break;
    case "서초구":
    case "서초":
        $_GET['weather']="서초구";
        break;
    case "성동구":
    case "성동":
        $_GET['weather']="성동구";
        break;
    case "성북구":
    case "성북":
        $_GET['weather']="성북구";
        break;
    case "송파구":
    case "송파":
        $_GET['weather']="송파구";
        break;
    case "양천구":
    case "양천":
        $_GET['weather']="양천구";
        break;
    case "양천구":
    case "양천":
        $_GET['weather']="양천구";
        break;
    case "영등포구":
    case "영등포":
        $_GET['weather']="영등포구";
        break;
    case "용산":
    case "용산구":
        $_GET['weather']="용산구";
        break;
    case "은평구":
    case "은평":
        $_GET['weather']="은평구";
        break;
    case "종로구":
    case "종로":
         $_GET['wearher']="종로구";
         break;
    case "중구":
    case "서울특별시 중구":
        $_GET['weather']="서울특별시 중구";
        break;
    case "중랑구":
    case "중랑":
        $_GET['weather']="중랑구";
        break;

    case "부산":
    case "부산시":
    case "부산광역시":
        $_GET['weather']="부산광역시";
        break;
    case "부산 강서구":
    case "부산 강서":
            $_GET['weather']="부산광역시 강서구";
        break;
    case "부산 금정구":
    case "부산 금정":
            $_GET['weather']="부산광역시 금정구";
        break;
    case "부산 기장군":
    case "부산 기장군":
            $_GET['weather']="부산광역시 기장군";
        break;
    case "부산 남구":
        $_GET['weather']="부산광역시 남구";
        break;
    case "부산 동구":
        $_GET['weather']="부산광역시 동구";
        break;
    case "부산 진구":
        $_GET['weather']="부산광역시 진구";
        break;
    case "부산 북구":
        $_GET['weather']="부산광역시 북구";
        break;
    case "부산 서구":
        $_GET['weather']="부산광역시 서구";
        break;
    case "부산 중구":
        $_GET['weather']="부산광역시 중구";
        break;
    case "부산 동래구":
    case "동래":
        $_GET['weather']="부산광역시 동래구";
        break;
    case "부산 사상구":
    case "사상":
        $_GET['weather']="부산광역시 사상구";
        break;
    case "부산 사하구":
    case "사하":
        $_GET['weather']="부산광역시 사하구";
        break;
    case "부산 수영구":
    case "수영":
        $_GET['weather']="부산광역시 수영구";
        break;
    case "부산 연제구":
    case "연제":
        $_GET['weather']="부산광역시 연제구";
        break;
    case "부산 영도구":
    case "영도":
        $_GET['weather']="부산광역시 영도구";
        break;
    case "부산 해운대":
    case "해운대":
        $_GET['weather']="부산광역시 해운대구";
        break;

    case "인천":
    case "인천시":
    case "인천광역시":
        $_GET['weather']="인천광역시";
        break;
    case "인천 중구":
        $_GET['weather']="인천광역시 중구";
        break;
    case "인천 동구":
        $_GET['weather']="인천광역시 동구";
        break;
    case "인천 서구":
        $_GET['weather']="인천광역시 서구";
        break;
    case "강화도":
    case "강화":
        $_GET['weather']="인천광역시 강화군";
        break;
    case "계양":
    case "계양구":
        $_GET['weather']="인천광역시 계양구";
        break;
    case "미추홀":
    case "미추홀구":
        $_GET['weather']="인천광역시 미추홀구";
        break;
    case "남동":
    case "남동구":
        $_GET['weather']="인천광역시 남동구";
        break;
    case "부평":
    case "부평구":
        $_GET['weather']="인천광역시 부평구";
        break;
    case "연수":
    case "연수구":
        $_GET['weather']="인천광역시 연수구";
        break;
    case "웅진군":
    case "옹진":
        $_GET['weather']="인천광역시 옹진군";
        break;

        
    case "대전":
    case "대전시":
    case "대전광역시":    
        $_GET['weather']="대전광역시";
        break;
    case "대전 동구":
        $_GET['weather']="대전광역시 동구";
        break;
    case "대전 서구":
        $_GET['weather']="대전광역시 서구";
        break;
    case "대전 중구":
        $_GET['weather']="대전광역시 중구";
        break;
    case "대덕":
    case "대덕구":
        $_GET['weather']="대전광역시 대덕구";
        break;
    case "유성":
    case "유성구":
        $_GET['weather']="대전광역시 유성구";
        break;
        
        
        
    case "대구":
    case "대구시":
    case "대구광역시":
        $_GET['weather']="대구광역시";
        break;
    case "대구 남구":
        $_GET['weather']="대구광역시 남구";
        break;
    case "대구 동구":
        $_GET['weather']="대구광역시 동구";
        break;
    case "대구 북구":
        $_GET['weather']="대구광역시 북구";
        break;
    case "대구 서구":
        $_GET['weather']="대구광역시 서구";
        break;
    case "대구 중구":
        $_GET['weather']="대구광역시 중구";
        break;
    case "달서구":
    case "달서":
        $_GET['weather']="대구광역시 달서구";
        break;
    case "달성군":
    case "달성":
        $_GET['weather']="대구광역시 달성군";
        break;
    case "수성구":
    case "수성":
        $_GET['weather']="대구광역시 수성구";
        break;

    case "광주":
    case "광주시":
    case "광주광역시":
        $_GET['weather']="광주광역시";
        break; 
    case "광주 동구":
        $_GET['weather']="광주광역시 동구";
        break;
    case "광주 서구":
        $_GET['weather']="광주광역시 서구";
        break;
    case "광주 남구":
        $_GET['weather']="광주광역시 남구";
        break;
    case "광주 북구":
        $_GET['weather']="광주광역시 북구";
        break;
    case "광산":
    case "광산구":
        $_GET['weather']="광주광역시 광산구";
        break;

    case "울산":
    case "울산시":
    case "울산광역시":
        $_GET['weather']="울산광역시";
        break;
    case "울산 동구":
        $_GET['weather']="울산광역시 동구";
        break;
    case "울산 중구":
        $_GET['weather']="울산광역시 중구";
        break;
    case "울산 남구":
        $_GET['weather']="울산광역시 남구";
        break;
    case "울산 북구":
        $_GET['weather']="울산광역시 북구";
        break;
    case "울주":
    case "울주군":
        $_GET['weather']="울산광역시 울주군";
        break;

    case "세종":
    case "세종특별시":  
        $_GET['weather']="세종특별시";
        break;

    case "경기도":
    case "경기":
        $_GET['weather']="경기도";
        break;
    case "가평":
    case "가평군":
        $_GET['weather']="경기도 가평군";
        break;
    case "고양":
    case "고양시":
        $_GET['weather']="경기도 고양시";
        break;
    case "과천":
    case "과천시":
        $_GET['weather']="경기도 과천시";
        break;
    case "광명":
    case "광명시":
        $_GET['weather']="경기도 광명시";
        break;
    case "광주":
    case "광주시":
        $_GET['weather']="경기도 광주시";
        break;
    case "구리":
    case "구리시":
        $_GET['weather']="경기도 구리시";
        break;
    case "군포":
    case "군포시":
        $_GET['weather']="경기도 군포시";
        break;
    case "김포":
    case "김포시":
        $_GET['weather']="경기도 김포시";
        break;
    case "남양주시":
    case "남양주":
        $_GET['weather']="경기도 남양주시";
        break;
    case "동두천시":
    case "동두천":
        $_GET['weather']="경기도 동두천시";
        break;
    case "부천":
    case "부천시":
        $_GET['weather']="경기도 부천시";
        break;
    case "성남":
    case "성남시":
        $_GET['weather']="경기도 성남시";
        break;
    case "수원":
    case "수원시":
        $_GET['weather']="경기도 수원시";
        break;
    case "시흥":
    case "시흥시":
        $_GET['weather']="경기도 시흥시";
        break;
    case "안산":
    case "안산시":
        $_GET['weather']="경기도 안산시";
        break;
    case "안성":
    case "안성시":
        $_GET['weather']="경기도 안성시";
        break;
    case "안양":
    case "안양시":
        $_GET['weather']="경기도 안양시";
        break;
    case "양주시":
    case "양주":
        $_GET['weather']="경기도 양주시";
        break;
    case "양평군":
    case "양평":
        $_GET['weather']="경기도 양평군";
        break;
    case "여주시":
    case "여주":
        $_GET['weather']="경기도 여주시";
        break;
    case "연천":
    case "연천군":
        $_GET['weather']="경기도 연천군";
        break;
    case "오산":
    case "오산시":
        $_GET['weather']="경기도 오산시";
        break;
    case "용인":
    case "용인시":
        $_GET['weather']="경기도 용인시";
        break;
    case "의왕":
    case "의왕시":
        $_GET['weather']="경기도 의왕시";
        break;
    case "의정부":
    case "의정부시":
        $_GET['weather']="경기도 의정부시";
        break;
    case "이천":
    case "이천시":
        $_GET['weather']="경기도 이천시";
        break;
    case "파주":
    case "파주시":
        $_GET['weather']="경기도 파주시";
        break;
    case "평택":
    case "평택시":
        $_GET['weather']="경기도 안성시";
        break;
    case "포천":
    case "포천시":
        $_GET['weather']="경기도 안성시";
        break;
    case "하남":
    case "하남시":
        $_GET['weather']="경기도 하남시";
        break;
    case "화성":
    case "화성시":
        $_GET['weather']="경기도 화성시";
        break;
 
    case "강원도":
    case "강원":
        $_GET['weather']="강원도";
        break; 
    case "강릉":
    case "강릉시":
        $_GET['weather']="강원도 강릉시";
        break;
    case "고성":
    case "고성군":
        $_GET['weather']="강원도 고성군";
        break;
    case "동해":
    case "동해시":
        $_GET['weather']="강원도 동해시";
        break;
    case "삼척":
    case "삼척시":
        $_GET['weather']="강원도 삼척시";
        break;
    case "속초":
    case "속초시":
        $_GET['weather']="강원도 속초시";
        break;
    case "양구":
    case "양구군":
        $_GET['weather']="강원도 양구군";
        break;
    case "양양":
    case "양양군":
        $_GET['weather']="강원도 양양군";
        break;
    case "영월":
    case "영월군":
        $_GET['weather']="강원도 영월군";
        break;
    case "원주":
    case "원주시":
        $_GET['weather']="강원도 원주시";
        break;
    case "인제":
    case "인제군":
        $_GET['weather']="강원도 인제군";
        break;
    case "정선":
    case "정선군":
        $_GET['weather']="강원도 정선군";
        break;
    case "철원":
    case "철원군":
        $_GET['weather']="강원도 철원군";
        break;
    case "춘천":
    case "춘천시":
        $_GET['weather']="강원도 춘천시";
        break;
    case "태백":
    case "태백시":
        $_GET['weather']="강원도 태백시";
        break;
    case "평창":
    case "평창군":
        $_GET['weather']="강원도 평창군";
        break;
    case "홍천":
    case "홍천군":
        $_GET['weather']="강원도 홍천군";
        break;
    case "화천":
    case "화천군":
        $_GET['weather']="강원도 화천군";
        break;
    case "횡성":
    case "횡성군":
        $_GET['weather']="강원도 횡성군";
        break;

    case "충북":
    case "충청북도":
        $_GET['weather']="충청북도";
        break;
    case "괴산":
    case "괴산군":
        $_GET['weather']="충청북도 괴산군";
        break;
    case "단양":
    case "단양군":
        $_GET['weather']="충청북도 단양군";
        break;
    case "보은":
    case "보은군":
        $_GET['weather']="충청북도 보은군";
        break;
    case "괴산":
    case "괴산군":
        $_GET['weather']="충청북도 괴산군";
        break;
    case "영동":
    case "영동군":
        $_GET['weather']="충청북도 영동군";
        break;
    case "옥천":
    case "옥천군":
        $_GET['weather']="충청북도 옥천군";
        break;
    case "음성":
    case "음성군":
        $_GET['weather']="충청북도 음성군";
        break;
    case "제천":
    case "제천시":
        $_GET['weather']="충청북도 제천시";
        break;
    case "진천":
    case "진천군":
        $_GET['weather']="충청북도 진천군";
        break;
    case "청원":
    case "청원구":
        $_GET['weather']="충청북도 청원구";
        break;
    case "청주":
    case "청주시":
        $_GET['weather']="충청북도 청주시";
        break;
    case "충주":
    case "충주시":
        $_GET['weather']="충청북도 충주시";
        break;
    case "증평":
    case "증평군":
        $_GET['weather']="충청북도 증평군";
        break;

    case "충남":
    case "충청남도":    
        $_GET['weather']="충청남도";
        break;
    case "공주":
    case "공주시":
        $_GET['weather']="충청남도 공주시";
        break;
    case "금산":
    case "금산군":
        $_GET['weather']="충청남도 금산군";
        break;
    case "논산":
    case "논산시":
        $_GET['weather']="충청남도 논산시";
        break;
    case "당진":
    case "당진시":
        $_GET['weather']="충청남도 당진시";
        break;
    case "보령":
    case "보령시":
        $_GET['weather']="충청남도 보령시";
        break;
    case "부여":
    case "부여시":
        $_GET['weather']="충청남도 부여군";
        break;
    case "서산":
    case "서산시":
        $_GET['weather']="충청남도 서산시";
        break;
    case "서천":
    case "서천군":
        $_GET['weather']="충청남도 서천군";
        break;
    case "아산":
    case "아산시":
        $_GET['weather']="충청남도 아산시";
        break;
    case "예산":
    case "예산군":
        $_GET['weather']="충청남도 예산군";
        break;
    case "천안":
    case "천안시":
        $_GET['weather']="충청남도 천안시";
        break;
    case "청양":
    case "청양군":
        $_GET['weather']="충청남도 청양군";
        break;
    case "태안":
    case "태안군":
        $_GET['weather']="충청남도 태안군";
        break;
    case "홍성":
    case "홍성군":
        $_GET['weather']="충청남도 홍성군";
        break;
    case "계룡":
    case "계룡시":
        $_GET['weather']="충청남도 계룡시";
        break;

    case "경북":
    case "경상북도":
        $_GET['weather']="경상북도";
        break;
    case "경산":
    case "경산시":
        $_GET['weather']="경상북도 경산시";
        break;
    case "경주":
    case "경주시":
        $_GET['weather']="경상북도 경주시";
        break;
    case "고령":
    case "고령군":
        $_GET['weather']="경상북도 고령군";
        break;
    case "구미":
    case "구미시":
        $_GET['weather']="경상북도 구미시";
        break;
    case "군위":
    case "군위군":
        $_GET['weather']="경상북도 군위군";
        break;
    case "김천":
    case "김천시":
        $_GET['weather']="경상북도 김천시";
        break;
    case "문경":
    case "문경시":
        $_GET['weather']="경상북도 문경시";
        break;
    case "봉화":
    case "봉화군":
        $_GET['weather']="경상북도 봉화군";
        break;
    case "상주":
    case "상주시":
        $_GET['weather']="경상북도 상주시";
        break;
    case "성주":
    case "성주군":
        $_GET['weather']="경상북도 성주군";
        break;
    case "안동":
    case "안동시":
        $_GET['weather']="경상북도 안동시";
        break;
    case "영덕":
    case "영덕군":
        $_GET['weather']="경상북도 영덕군";
        break;
    case "영양":
    case "영양군":
        $_GET['weather']="경상북도 영양군";
        break;
    case "영주":
    case "영주시":
        $_GET['weather']="경상북도 영주시";
        break;
    case "영천":
    case "영천시":
        $_GET['weather']="경상북도 영천시";
        break;
    case "울릉":
    case "울릉군":
        $_GET['weather']="경상북도 울릉군";
        break;
    case "울진":
    case "울진군":
        $_GET['weather']="경상북도 울진군";
        break;
    case "의성":
    case "의성군":
        $_GET['weather']="경상북도 의성군";
        break;
    case "청도":
    case "청도군":
        $_GET['weather']="경상북도 청도군";
        break;
    case "청송":
    case "청송군":
        $_GET['weather']="경상북도 청송군";
        break;
    case "칠곡":
    case "칠곡군":
        $_GET['weather']="경상북도 칠곡군";
        break;
    case "포항":
    case "포항시":
        $_GET['weather']="경상북도 포항시";
        break;

    case "경남":
    case "경상남도":
        $_GET['weather']="경상남도";
        break;
    case "거제":
    case "경남 거제":
        $_GET['weather']="경상남도 거제시";
        break;
    case "거창":
    case "경남 거창":
        $_GET['weather']="경상남도 거창군";
        break;
    case "고성":
    case "경남 고성":
        $_GET['weather']="경상남도 고성군";
        break;
    case "김해":
    case "경남 김해":
        $_GET['weather']="경상남도 김해시";
        break;
    case "남해":
    case "경남 남해":
        $_GET['weather']="경상남도 남해군";
        break;
    case "마산":
    case "경남 마산":
        $_GET['weather']="경상남도 마산시";
        break;
    case "밀양":
    case "경남 밀양":
        $_GET['weather']="경상남도 밀양시";
        break;
    case "사천":
    case "경남 사천":
        $_GET['weather']="경상남도 사천시";
        break;
    case "산청":
    case "경남 산청":
        $_GET['weather']="경상남도 산청군";
        break;
    case "양산":
    case "경남 양산":
        $_GET['weather']="경상남도 양산시";
        break;
    case "의령":
    case "경남 의령":
        $_GET['weather']="경상남도 의령군";
        break;
    case "진주":
    case "경남 진주":
        $_GET['weather']="경상남도 진주시";
        break;
    case "진해":
    case "경남 진해":
        $_GET['weather']="경상남도 진해구";
        break;
    case "창녕":
    case "경남 창녕":
        $_GET['weather']="경상남도 창녕군";
        break;
    case "창원":
    case "경남 창원":
        $_GET['weather']="경상남도 창원시";
        break;
    case "통영":
    case "경남 통영":
        $_GET['weather']="경상남도 통영시";
        break;
    case "하동":
    case "경남 하동":
        $_GET['weather']="경상남도 하동군";
        break;
    case "함안":
    case "경남 함안":
        $_GET['weather']="경상남도 함안군";
        break;
    case "함양":
    case "경남 함양":
        $_GET['weather']="경상남도 함양군";
        break;
    case "함천":
    case "경남 함천":
        $_GET['weather']="경상남도 함천군";
        break;

    case "전북":
    case "전라북도":
        $_GET['weather']="전라북도";
        break;
    case "고창":
    case "전북 고창":
        $_GET['weather']="전라북도 고창군";
        break;
    case "군산":
    case "전북 군산":
        $_GET['weather']="전라북도 군산시";
        break;
    case "김제":
    case "전북 김제":
        $_GET['weather']="전라북도 김제시";
        break;
    case "남원":
    case "전북 남원":
        $_GET['weather']="전라북도 남원시";
        break;
    case "무주":
    case "전북 무주":
        $_GET['weather']="전라북도 무주군";
        break;
    case "부안":
    case "전북 부안":
        $_GET['weather']="전라북도 부안군";
        break;
    case "순창":
    case "전북 순창":
        $_GET['weather']="전라북도 순창군";
        break;
    case "완주":
    case "전북 완주":
        $_GET['weather']="전라북도 완주군";
        break;
    case "익산":
    case "전북 익산":
        $_GET['weather']="전라북도 익산시";
        break;
    case "임실":
    case "전북 임실":
        $_GET['weather']="전라북도 임실군";
        break;
    case "장수":
    case "전북 장수":
        $_GET['weather']="전라북도 장수군";
        break;
    case "전주":
    case "전북 전주":
        $_GET['weather']="전라북도 전주시";
        break;
    case "정읍":
    case "전북 정읍":
        $_GET['weather']="전라북도 정읍시";
        break;
    case "진안":
    case "전북 진안":
        $_GET['weather']="전라북도 진안군";
        break;


    case "전남":
    case "전라남도":        
        $_GET['weather']="전라남도";
        break;
    case "강진":
    case "전남 강진":
        $_GET['weather']="전라남도 강진군";
        break;
    case "고흥":
    case "전남 고흥":
        $_GET['weather']="전라남도 고흥군";
        break;
    case "곡성":
    case "전남 곡성":
        $_GET['weather']="전라남도 곡성군";
        break;
    case "광양":
    case "전남 광양":
        $_GET['weather']="전라남도 광양시";
        break;
    case "구례":
    case "전남 구례":
        $_GET['weather']="전라남도 구례군";
        break;
    case "나주":
    case "전남 나주":
        $_GET['weather']="전라남도 나주시";
        break;
    case "강진":
    case "전남 강진":
        $_GET['weather']="전라남도 강진군";
        break;
    case "담양":
    case "전남 담양":
        $_GET['weather']="전라남도 담양군";
        break;
    case "목포":
    case "전남 목포":
        $_GET['weather']="전라남도 목포시";
        break;
    case "강진":
    case "전남 강진":
        $_GET['weather']="전라남도 강진군";
        break;
    case "무안":
    case "전남 무안":
        $_GET['weather']="전라남도 무안군";
        break;
    case "보성":
    case "전남 보성":
        $_GET['weather']="전라남도 보성군";
        break;
    case "순천":
    case "전남 순천":
        $_GET['weather']="전라남도 순천시";
        break;
    case "여수":
    case "전남 여수":
        $_GET['weather']="전라남도 여수시";
        break;
    case "신안":
    case "전남 신안":
        $_GET['weather']="전라남도 신안군";
        break;
    case "영광":
    case "전남 영광":
        $_GET['weather']="전라남도 영광군";
        break;
    case "영암":
    case "전남 영암":
        $_GET['weather']="전라남도 영암군";
        break;
    case "완도":
    case "전남 완도":
        $_GET['weather']="전라남도 완도군";
        break;
    case "장성":
    case "전남 장성":
        $_GET['weather']="전라남도 장성군";
        break;
    case "장흥":
    case "전남 장흥":
        $_GET['weather']="전라남도 장흥군";
        break;
    case "진도":
    case "전남 진도":
        $_GET['weather']="전라남도 진도군";
        break;
    case "함평":
    case "전남 함평":
        $_GET['weather']="전라남도 함평군";
        break;
    case "해남":
    case "전남 해남":
        $_GET['weather']="전라남도 해남군";
        break;
    case "화순":
    case "전남 화순":
        $_GET['weather']="전라남도 화순군";
        break;
            
    case "제주":
    case "제주특별자치도":
        $_GET['weather']="제주특별자치도";
        break;
    // case "서귀포시":
    // case "서귀포":
    //     $_GET['weather']="제주특별자치도 서귀포시";
    default:
        // $_GET['weather']="서울특별시";
        // break;
        //echo "<script>alert('지역명을 입력하여주세요!');</script>";
        
        
}
echo "<br>";
?>