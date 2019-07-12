<div class = 'tags'>
    <div class = 'void'>
    </div>
    <div class = 'title'>
        <p>Tags</p>
    </div>
    <hr class = 'hr'>
    <div class = 'tags_list'>
        <?php
        $tags = ['YUMMY','SWEET','DINNER','LUNCH','BREAKFAST','FRESH','TASTY','DELISH','DELICIOS','EATING','FOOD'];
        foreach ($tags as $key => $value) {
            echo '<p>#'.$value.'</p>';
        }
        ?>
    </div>
</div>