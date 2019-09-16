<?php
require_once('/../../settings/init.php');
if(isset($_POST['slideDelay'])){
    $delay = (int)$_POST['slideDelay'];
    $query = "UPDATE delay SET delay=$delay WHERE code = 'prewiew'";
    mysqli_query($link,$query) or die (mysqli_error());
}