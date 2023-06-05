<?php
switch($a){
    case "서울":
    case "서울시":
    case "서울특별시":
        $a=1;
        break;
    case "인천":
    case "인천시":
    case "인천광역시":
        $a=2;
        break;
    case "대전":
    case "대전시":
    case "대전광역시":    
        $a=3;
        break;
    case "대구":
    case "대구시":
    case "대구광역시":
        $a=4;
        break;
    case "광주":
    case "광주시":
    case "광주광역시":
        $a=5;
        break;
    case "부산":
    case "부산시":
    case "부산광역시":
        $a=6;
        break;
    case "울산":
    case "울산시":
    case "울산광역시":
        $a=7;
        break;
    case "세종":
    case "세종시":
    case "세종특별시":  
        $a=8;
        break;
    case "경기도":
    case "경기":
        $a=31;
        break;
    case "강원도":
    case "강원":
        $a=32;
        break;    
    case "충북":
    case "충청북도":
        $a=33;
        break;
    case "충남":
    case "충청남도":    
        $a=34;
        break;
    case "경북":
    case "경상북도":
        $a=35;
        break;
    case "경남":
    case "경상남도":
        $a=36;
        break;
    case "전북":
    case "전라북도":
        $a=37;
        break;
    case "전남":
    case "전라남도":        
        $a=38;
        break;
    case "제주":
    case "제주특별자치도":
    case "제주시":
        $a=39;
        break;
    default:
        echo "<script>alert('지역명을 입력하여주세요!');</script>";
        //echo "테스트용 확인";
}
echo "<br>";
?>