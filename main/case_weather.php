<?php

switch($_GET['weather']){ // $_GET['weather']는 사용자가 입력한 값
    case "서울":
    case "서울시":
    case "서울특별시":
        $_GET['weather']="서울특별시";
        break;
    case "인천":
    case "인천시":
    case "인천광역시":
        $_GET['weather']="인천광역시";
        break;
    case "대전":
    case "대전시":
    case "대전광역시":    
        $_GET['weather']="대전광역시";
        break;
    case "대구":
    case "대구시":
    case "대구광역시":
        $_GET['weather']="대구광역시";
        break;
    case "광주":
    case "광주시":
    case "광주광역시":
        $_GET['weather']="광주광역시";
        break;
    case "부산":
    case "부산시":
    case "부산광역시":
        $_GET['weather']="부산광역시";
        break;
    case "울산":
    case "울산시":
    case "울산광역시":
        $_GET['weather']="울산광역시";
        break;
    case "세종":
    case "세종특별시":  
        $_GET['weather']="세종특별시";
        break;
    case "경기도":
    case "경기":
        $_GET['weather']="경기도";
        break;
    case "강원도":
    case "강원":
        $_GET['weather']="강원도";
        break;    
    case "충북":
    case "충청북도":
        $_GET['weather']="충청북도";
        break;
    case "충남":
    case "충청남도":    
        $_GET['weather']="충청남도";
        break;
    case "경북":
    case "경상북도":
        $_GET['weather']="경상북도";
        break;
    case "경남":
    case "경상남도":
        $_GET['weather']="경상남도";
        break;
    case "전북":
    case "전라북도":
        $_GET['weather']="부산광역시";
        break;
    case "전남":
    case "전라남도":        
        $_GET['weather']="전라남도";
        break;
    case "제주":
    case "제주광역시":
        $_GET['weather']="제주광역시";
        break;
    default:
        // $_GET['weather']="서울특별시";
        // break;
        //echo "<script>alert('지역명을 입력하여주세요!');</script>";
        
        //echo "테스트용 확인";
}
echo "<br>";
?>