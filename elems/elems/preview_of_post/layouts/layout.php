<div class = "preview">
    <img src = '' class = img>
    <div class = "block">
        <div class = "subLogo">
        </div>
        <h2><a href = ''></a></h2>
        <div class = "textBlock">
            <p class = "text">
            </p>
        </div>
        <input type = "button" value = "GET IT RECIPE"><br>
        <div class = "radio">
            <?
            if (count($resultPreview) > 1) {
                foreach ($resultPreview as $key => $value) {
                    ?>
                    <input type = "radio" name = "slide" id = "preview<?=$key?>" value="<?=$key?>">
                    <label for = "preview<?=$key?>">
                        <div></div>
                    </label>
                    <?
                }
            }
            ?>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        let images = <?=json_encode($resultPreview)?>;
        if(images.length > 1) {
            slider(images,8000);
        }else{
            $('.preview').css('background-image', images[0]['path']);
            $('.preview a').text(images[0]['title']);
            $('.preview .text').text(images[0]['prewiew_text']);
        }
    });
</script>