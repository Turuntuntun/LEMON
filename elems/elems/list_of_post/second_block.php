<?php
    $SQLRequest = "SELECT * FROM random_pages ORDER BY RAND() LIMIT 3 ";

    $result = mysqli_query($link,$SQLRequest) or die (mysqli_error());
    $mimetype = 'image/jpeg';

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
?>

<div class = "recipees">
    <?foreach ($data as $value){
        ?>
        <div class = "box">
        <img src="data:<?=$mimetype?>;base64,<?= base64_encode($value['img'])?>">
        <p class = "zag"><?=$value['name']?></p>
        <div class = "small_zag">
           <div class = "icon_time"></div>
           <span class = "mins"><?=$value['time'].'mins'?> |</span>
           <div class = "comment_icon"></div>
           <span class = "mins"><?=$value['count_comments']?></span>
           <div class = "viem_icon"></div>
           <span class ="mins"><?=$value['count_view']?></span>
        </div>
    </div>
    <?
    }
    ?>
</div>
