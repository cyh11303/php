<?php
switch($a){
    case "서울":
    case "서울시":
    case "서울특별시":
        $a=1;
        break;
    case "인천":
        $a=2;
        break;
    case "대전":
        $a=3;
        break;
    case "대구":
        $a=4;
        break;
    case "광주":
        $a=5;
        break;
    case "부산":
    case "부산광역시":
        $a=6;
        break;
    case "울산":
        $a=7;
        break;
    case "세종":
        $a=8;
        break;
    case "세종특별시":
        $a=8;
        break;
    case "경기도":
        $a=31;
        break;
    case "강원도":
        $a=32;
        break;    
    case "충북":
        $a=33;
        break;
    case "충청북도":
        $a=33;
        break;
    case "충남":
        $a=34;
        break;
    case "충청남도":
        $a=34;
        break;
    case "경북":
        $a=35;
        break;
    case "경상북도":
        $a=35;
        break;
    case "경남":
        $a=36;
        break;
    case "경상남도":
        $a=36;
        break;
    case "전북":
        $a=37;
        break;
    case "전라북도":
        $a=37;
        break;
    case "전남":
        $a=38;
        break;
    case "전라남도":
        $a=38;
        break;
    case "제주":
        $a=39;
        break;
    default:
        echo "<script>alert('지역명을 입력하여주세요!');</script>";


}
echo "<br>";
?>