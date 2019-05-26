<?php
/**
 * Created by PhpStorm.
 * User: Юра
 * Date: 10.05.2019
 * Time: 0:18
 */
require_once('include/init.php');
echo '<pre>';
$query = "CREATE DATABASE IF NOT EXISTS NEW";
$result = mysqli_query($link,$query) or die (mysqli_error($link));
if (!$result){
    $row = mysqli_fetch_assoc($result);
    print_r($row);
}

