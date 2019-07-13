<div class = 'sidebar'>
     <div class = 'side_line1'>
        <?php
            require_once('/../chi-chi/main.php');
            require_once('/../posts_for_user/main.php');
            require_once('/../popular_post/main.php');
        ?>

     </div>

      <div class = 'side_line2'>
            <?
                require_once('/../target/main.php');
            ?>
            <div class = 'tags_calend'>
                <?
                    require_once('/../tags/main.php');
                    require_once('/../calendar/main.php');
                ?>
            </div>
            <?
                require_once('/../time_of_recipe/main.php');
            ?>
      </div>
</div>