<?php
require_once('../init.php');

$SQLRequest = "SELECT img FROM random_pages WHERE id=3";

$query = mysqli_query($link,$SQLRequest) or die (mysqli_error());

$row = mysqli_fetch_assoc($query);
$image= base64_encode( $row['img']);
$mimetype = 'image/jpeg';
echo "<img src='data:$mimetype;base64,$image'>";
