<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $areaUri);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
$arr = json_decode($response,true);
$arr2=$arr["response"]["body"]["totalCount"];
if($arr2==0){
    echo "<script>alert('결과값이 존재하지 않습니다.');
    history.back();
    </script>";
  }
  
    foreach($arr["response"]["body"]["items"]["item"] as $arr1){
    ?>
    <p>
    <div style="display:inline-block;vertical-align:top;">
    <?php
    if($arr1["firstimage"]==""){
    ?>
    <img src="photo/thum_detail.jpg" class="thumbnail-img">
    <?php
    }
    else{
    ?>
    <img src=<?php echo $arr1["firstimage"]?> class="thumbnail-img">
    <?php
    }
    ?> 
    </div>

    
    <?php
    
        //echo $arr1["firstimage"]."<br>"; //지역의 사진
        
    ?>
    <div style="display:inline-block;">
        <div style="font:size 30px;font-weight:bold; color:teal;">
    <?php
        echo $arr1["title"]."<br>"; //지역의 이름
    ?>
        </div>
        <div style="color:DarkGray;">
    <?php
        echo $arr1["addr1"]."<br>"; //지역의 주소
        ?>
        </div>
    </div>
    </p>
    <?php
    }
    ?>