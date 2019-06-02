<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <!-- Стили шаблона -->
    <link rel="stylesheet" type="text/css" href="../css/styles.css?v=1">
    <!-- Стили елементов -->
    <link rel="stylesheet" type="text/css" href="/elems/elems/list_of_post/style.css?v=0">
    <link rel="stylesheet" type="text/css" href="/elems/elems/head_menu/style.css?v=3">
    <link rel="stylesheet" type="text/css" href="/elems/elems/full_post/style.css?v=8">
    <link rel="stylesheet" type="text/css" href="/elems/elems/navigation/style.css?v=3">
    <link rel="stylesheet" type="text/css" href="/elems/elems/post_a_comment/style.css?v=3">
    <link rel="stylesheet" type="text/css" href="/elems/elems/elem_about_syte/style.css?v=5">
    <link rel="stylesheet" type="text/css" href="/elems/elems/autorization/style.css?v=6">
    <link rel="stylesheet" type="text/css" href="/elems/elems/preview_of_post/style.css?v=6">
    <link rel="stylesheet" type="text/css" href="/elems/elems/registration/style.css?v=0">
    <link rel="stylesheet" type="text/css" href="/elems/elems/comments/style.css?v=2">

    <!-- Шрифты -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <!-- Скрипты -->
	<script type="text/javascript" src = "../js/main.js"></script>
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<title>LEMON</title>
</head>
<body>
	<div class = "logo">
	</div>
 	<header>
        <? include 'header.php'; ?>
	</header>
	<main>
		<?php
			include 'elems/preview_of_post/main.php';
            include 'elems/full_post/main.php';
            include 'elems/list_of_post/main.php';
			include 'elems/elem_about_syte/main.php';
			include 'elems/complex_element/main.php';
			include 'elems/authorization_registrarion/main.php';
			include 'elems/post_a_comment/main.php';
			include 'elems/comments/main.php';
			include 'elems/navigation/main.php';
		?>  
    </main>
    <footer>
    	<? include 'footer.php'; ?>
    </footer>
</body>
</html>

