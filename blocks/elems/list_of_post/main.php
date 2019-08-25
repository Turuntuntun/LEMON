<?php
    require_once('class.php');
    $SQLRequest = "SELECT COUNT(*) FROM random_pages";
    $result = mysqli_query($link,$SQLRequest) or die (mysqli_error());
    $count_str_of_mysql = mysqli_fetch_assoc($result)['COUNT(*)'];
    if($count_str_of_mysql<3){
        $out_count = $count_str_of_mysql;
    }else $out_count = 3;

    $SQLRequest = "SELECT id FROM random_pages";
    $result = mysqli_query($link,$SQLRequest) or die (mysqli_error());
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    $output_id = [];
    $id = [];
    while(true){
        $rand = rand(0,$count_str_of_mysql-1);
        if(!in_array($rand,$output_id)){
            $output_id[] = $rand;
            $id[] = $data[$rand]['id'];
        }
        if(count($output_id) == $out_count) break;
    }
    $SQLRequest = "SELECT * FROM random_pages WHERE id = $id[0] OR id = $id[1] OR id = $id[2] LIMIT 3 ";
    $result = mysqli_query($link,$SQLRequest) or die (mysqli_error());

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    $mimetype = 'image/jpeg';
?>

<div class = "listPost">
    <?
    foreach ($data as $value){
        ?>
        <div class = "block">
            <?if(!empty($value['img'])){?>
                <img src="data:<?=$mimetype?>;base64,<?= base64_encode($value['img'])?>">
            <?}else{?>
                 <img src="elems/elems/list_of_post/images/no-photo-big.gif">
            <?}?>
            <a href = '' class = "title"><?=$value['name']?></a>
            <div class = "smallBlock">
               <div class = "time"></div>
               <span class = "text"><?=$value['time'].'mins'?> |</span>
               <div class = "comment"></div>
               <span class = "text"><?=$value['count_comments']?></span>
               <div class = "viem"></div>
               <span class ="text"><?=$value['count_view']?></span>
            </div>
        </div>
    <?
    }
    ?>
</div>
