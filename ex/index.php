
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>기상청 날씨 API 연습</title>

</head>
<body>
    <h1>기상청 날씨</h1>
    <h2>지역 날씨</h2>

    <?php
     $Date = 0;//($_POST['date']);
     $Time = 0;//($_POST['time']);
     $Nx= 0;//($_POST['nx']);
     $Ny= 0;//($_POST['ny']);

    $address = `https://apis.data.go.kr/1360000/VilageFcstInfoService_2.0/getUltraSrtNcst?serviceKey=k2FhBBQxor2i%2B9pBvFADgh%2B6ld8CDQul1g46DdYsfyg40rzqKGlBNpHWPcgV88Nj0FFBbu2iFfC24Q3cNzUCXg%3D%3D&pageNo=1&numOfRows=1000&dataType=JSON&base_date=20230405&base_time=0600&nx=61&ny=$127`;

    $data = json_decode(file_get_contents($address)); //#. file_get_contents : 주소로부터 데이터 가져오기

    //#. api로 부터 데이터를 받아오는 코드 js :  getJSON | php : file_get_contents
    //#. 파싱 :
    //#.

    ?>


    <p class="result">
        <!--20230402, 1400, -7입니다.-->
    </p>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <!-- <script>

        var date = <?= $Date ?>; //#. date = 0 으로 해석됨(웹사이트 접속시)

        $.getJSON(`https://apis.data.go.kr/1360000/VilageFcstInfoService_2.0/getUltraSrtNcst?serviceKey=k2FhBBQxor2i%2B9pBvFADgh%2B6ld8CDQul1g46DdYsfyg40rzqKGlBNpHWPcgV88Nj0FFBbu2iFfC24Q3cNzUCXg%3D%3D&pageNo=1&numOfRows=1000&dataType=JSOn&base_date=${Date}&base_time=${Time}&nx=${Nx}&ny=${Ny}`,function(data){
            console.log(data);
            console.log(data.response.body.items.item[3].obsrValue); //item배열의 3번째에 있는 온도를 출력
            let item = data.response.body.items.item[3];
            let content= item.baseDate +"일 "+ item.baseTime+" 기준 온도는"+ item.obsrValue+"입니다"; //item배열의 3번째 값에 있는 날짜, 시간, 온도를 변수명 content로 선언
            $(".result").text(content);

        });
    </script> -->
</body>
</html>