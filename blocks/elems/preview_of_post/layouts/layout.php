<div class = "preview">
    <img src = '' class = img >
    <div class = "block">
        <div class = "subLogo">
        </div>
        <h2>
            <a href = ''></a>
        </h2>
        <div class = "textBlock">
            <p class = "text">
            </p>
        </div>
        <input type = "button" value = "GET IT RECIPE"><br>
        <div class = "radio">
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        let images = <?=json_encode($resultArray)?>;
        new slider(images,1000).main();
    });
</script>