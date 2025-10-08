<?php
session_start(); 


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}


$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$token    = isset($_POST['token']) ? $_POST['token'] : '';


$validUser = 'Wong Lin Yan';
$validPass = '105960329';

if ($username === $validUser && $password === $validPass) {
    
    session_regenerate_id(true);

    $_SESSION['user'] = $username;
    $_SESSION['token'] = $token;

  
    header('Location: welcome.php');
    exit;
} else {
   
    header('Location: login.php?error=1');
    exit;
}
?>
