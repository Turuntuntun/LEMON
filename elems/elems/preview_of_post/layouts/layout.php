<div class = "preview">
    <div class = "block">
        <div class = "subLogo">
        </div>
        <h2><?=$resultPreview['title'];?></h2>
        <div class = "textBlock">
            <p class = "text">
                <?=$resultPreview['prewiew_text'];?>
            </p>
        </div>
        <input type = "button" value = "GET IT RECIPE"><br>
        <div class = "radio">
            <?
            foreach ($resultPreview['path'] as $key => $value){
                ?>
                <input type = "radio" name = "slide" id = "preview<?=$key?>" value="<?=$key?>">
                <label for = "preview<?=$key?>">
                    <div></div>
                </label>
                <?
            }
            ?>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        let images = <?=json_encode($resultPreview['path'])?>;
        if(images.length > 1) {
            slider(images,8000);
        }else{
            $('.preview').css('background-image', images[0]);
        }
    });
</script>