<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <!-- Стили шаблона -->
    <? $rand = rand(1,1000); ?>
    <link rel="stylesheet" type="text/css" href="../css/styles.css?v=<?=$rand?>">
    <!-- Стили елементов -->
    <link rel="stylesheet" type="text/css" href="/elems/elems/list_of_post/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/head_menu/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/full_post/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/navigation/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/post_a_comment/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/elem_about_syte_and_404/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/autorization/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/preview_of_post/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/registration/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/comments/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/calendar/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/tags/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/target/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/not_found/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/elem_about_site/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/chi-chi/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/posts_for_user/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/search/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/time_of_recipe/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/popular_post/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/head_menu/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/complex_element/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/authorization_registrarion/style.css?v=<?=$rand?>">
    <link rel="stylesheet" type="text/css" href="/elems/elems/footer_menu/style.css?v=<?=$rand?>">
    <!-- Шрифты -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <!-- Скрипты -->
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script type="text/javascript" src = "../js/main.js"></script>
    <script type="text/javascript" src = "../elems/elems/head_menu/script.js"></script>
    <script type="text/javascript" src = "../elems/elems/calendar/script.js"></script>
	<title>LEMON</title>
</head>
<body>
	<div class = "logo">
	</div>
 	<header>
        <?
            include 'header.php';
        ?>
	</header>
	<main>
		<?php
			include 'elems/preview_of_post/main.php';
            include 'elems/full_post/main.php';
            include 'elems/list_of_post/main.php';
			include 'elems/elem_about_syte_and_404/main.php';
			include 'elems/complex_element/main.php';
			include 'elems/authorization_registrarion/main.php';
			include 'elems/post_a_comment/main.php';
			include 'elems/comments/main.php';
			include 'elems/navigation/main.php';
		?>  
    </main>
    <footer>
    	<?
            include 'footer.php';
        ?>
    </footer>
</body>
</html>

