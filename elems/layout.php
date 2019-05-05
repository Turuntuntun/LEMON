<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="../css/styles.css?v=4">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
	<script type="text/javascript" src = "../js/main.js"></script>
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<title>LEMON</title>
</head>
<body>
	<div class = "logo">
	</div>
 	<header>
	 	<div class = "wrapper">
	 		<div class = 'href1'>
		 			<a href = "#">
		 				<img src = '../css/images/Lemon_Logo.png' id = 'smal_logo'>
		 			</a>	    
	 		</div>
	 		<nav>
	 			<ul class = "nav">
	 				<li class = "menu_item" id ='first-child'>
                        <a href="">HOME</a>
                    </li>
	 				<li class = "menu_item">
                        <a href="">RECIPES</a>
		 				<ul>
		 					<li class = "menu_item"><a href="">RECOMENDED</a></li>
		 					<li class = "menu_item"><a href="">POPULAR</a></li>
		 					<li class = "menu_item"><a href="">QUICK & EASY</a></li>
		 					<li class = "menu_item"><a href="">HEALTHY</a></li>
		 					<li class = "menu_item"><a href="">NEWEST</a></li>
		 				</ul>
	 				</li>
	 				<li class = "menu_item" ><a href="">PHOTO GALERIES</a>
						<ul id = 'li_li'>
		 					<li class = "menu_item"><a href="">NEW</a></li>
		 					<li class = "menu_item"><a href="">TOP</a></li>
		 					<li class = "menu_item"><a href="">RATEST</a></li>
		 				</ul>
	 				</li>
	 				<li class = "menu_item">
                        <a href="">VIDEOS</a>
                    </li>
	 				<li class = "menu_item">
                        <a href="">ALL CATEGORIES</a>
                    </li>
	 		    </ul>
	 		</nav>

	 		<input type = "text"  placeholder = "FIND A RECIPE" id = 'find_recipe'>
	    </div>
	</header>
	<main>
		<?php
			include 'elems/first_block.php';
			include 'elems/second_block.php';
			include 'elems/trird_block.php';
			include 'elems/fourth_block.php';
			include 'elems/fifth_block.php';
			include 'elems/sixth_block.php';
			include 'elems/seventh_block.php';
			include 'elems/eigth_block.php';
			include 'elems/nineth_block.php';
		?>  
    </main>
    <footer>
    	<div class ='void'>
    	</div>
    	<div class = 'foot'>
    	    <div class = 'foot_nav'>
	    		<a href = '#' class = 'foot_logo'>
	    		</a>
	    		<nav>
	    			<ul class = 'foot_menu'>
	    				<li class = "foot_menu_item"><a href="">HOME</a></li>
	 			    	<li class = "foot_menu_item"><a href="">RECIPES</a></li>
	 				    <li class = "foot_menu_item"><a href="">PHOTO GALERIES</a></li>
	 				    <li class = "foot_menu_item"><a href="">VIDEOS</a></li>
	 				    <li class = "foot_menu_item"><a href="">ALL CATEGORIES</a></li>
	    			</ul>
	    		</nav>
	    		<div class = 'year_by'>
	    		 	<p>&copy; 2018 - <?= date('Y',time()); ?> by Yury</p>
	    		</div>
    	    </div>
    	    <div class = 'icon_footer'>
    	    </div>
    	</div> 	
    </footer>
</body>
</html>

