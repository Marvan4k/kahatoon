<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$password = md5($password . "sadhuias12321");

require "conect.php";

$result = $mysql->query("SELECT * FROM `Info` WHERE `login` = '$login' AND `password` = '$password'");
$user = $result->fetch_assoc();
if (count($user) == 0) {
    echo 'Такого пользователя не существует';
    exit();
}

setcookie('user', $user['namekom'], time() + 3600, '/');

// header('Location: /');
?>