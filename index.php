<?php
    require_once('ME/settings/init.php');

    if (isset($_POST['reg_email']) and isset($_POST['reg_login']) and isset($_POST['password']) and isset($_POST['password_two'])){
        $email = strip_tags($_POST['reg_email']);
        $login = strip_tags($_POST['reg_login']);
        $pass1 = strip_tags($_POST['password']);
        $pass2 = strip_tags($_POST['password_two']);

        if ($pass1 == $pass2){
            $pass = md5($pass1);
            $query = "INSERT INTO users SET login = '$login', password = '$pass', email = '$email'";
            mysqli_query($link,$query) or die (mysqli_error($link));
        }
        
    }
    if(isset($_POST['log_pass']) and isset($_POST['log_email'])){
        $login = strip_tags($_POST['log_email']);
        $password = md5(strip_tags($_POST['log_pass']));
        $query = "SELECT id FROM users WHERE login = '$login' AND password = '$password'";
        $result = mysqli_query($link,$query) or die (mysqli_error($link));
        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
        if($data){

        }
    }
    include 'elems/layout.php';
