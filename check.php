<?php
$namekom = filter_var(trim($_POST['namekom']), FILTER_SANITIZE_STRING);
$emaile = filter_var(trim($_POST['emaile']), FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$banner = addslashes(file_get_contents($_FILES['banner']['tmp_name']));

//Участники
$name1 = filter_var(trim($_POST['name1']), FILTER_SANITIZE_STRING);
$female1 = filter_var(trim($_POST['female1']), FILTER_SANITIZE_STRING);
$lastname1 = filter_var(trim($_POST['lastname1']), FILTER_SANITIZE_STRING);
$information1 = filter_var(trim($_POST['information1']), FILTER_SANITIZE_STRING);
// $photo1 = addslashes(file_get_contents($_FILES['file1']['tmp_name']));

$name2 = filter_var(trim($_POST['name2']), FILTER_SANITIZE_STRING);
$female2 = filter_var(trim($_POST['female2']), FILTER_SANITIZE_STRING);
$lastname2 = filter_var(trim($_POST['lastname2']), FILTER_SANITIZE_STRING);
$information2 = filter_var(trim($_POST['information2']), FILTER_SANITIZE_STRING);
// $photo2 = addslashes(file_get_contents($_FILES['file2']['tmp_name']));

$name3 = filter_var(trim($_POST['name3']), FILTER_SANITIZE_STRING);
$female3 = filter_var(trim($_POST['female3']), FILTER_SANITIZE_STRING);
$lastname3 = filter_var(trim($_POST['lastname3']), FILTER_SANITIZE_STRING);
$information3 = filter_var(trim($_POST['information3']), FILTER_SANITIZE_STRING);
// $photo3 = addslashes(file_get_contents($_FILES['file3']['tmp_name']));

$name4 = filter_var(trim($_POST['name4']), FILTER_SANITIZE_STRING);
$female4 = filter_var(trim($_POST['female4']), FILTER_SANITIZE_STRING);
$lastname4 = filter_var(trim($_POST['lastname4']), FILTER_SANITIZE_STRING);
$information4 = filter_var(trim($_POST['information4']), FILTER_SANITIZE_STRING);
// $photo4 = addslashes(file_get_contents($_FILES['file4']['tmp_name']));

$name5 = filter_var(trim($_POST['name5']), FILTER_SANITIZE_STRING);
$female5 = filter_var(trim($_POST['female5']), FILTER_SANITIZE_STRING);
$lastname5 = filter_var(trim($_POST['lastname5']), FILTER_SANITIZE_STRING);
$information5 = filter_var(trim($_POST['information5']), FILTER_SANITIZE_STRING);
// $photo5 = addslashes(file_get_contents($_FILES['file5']['tmp_name']));

$name6 = filter_var(trim($_POST['name6']), FILTER_SANITIZE_STRING);
$female6 = filter_var(trim($_POST['female6']), FILTER_SANITIZE_STRING);
$lastname6 = filter_var(trim($_POST['lastname6']), FILTER_SANITIZE_STRING);
$information6 = filter_var(trim($_POST['information6']), FILTER_SANITIZE_STRING);
// $photo6 = addslashes(file_get_contents($_FILES['file6']['tmp_name']));

$password = md5($password . "sadhuias12321");

// echo $namekom . '\n';
// echo $emaile . '\n';
// echo $login . '\n';
// echo $password . '\n';
// echo $name1 . '\n';
// echo $female1 . '\n';
// echo $lastname1 . '\n';
// echo $information1 . '\n';

require "conect.php";

$mysql->query("INSERT INTO `Info` (`namekom`, `emaile`, `login`, `password`, `banner`) VALUES ('$namekom', '$emaile', '$login', '$password', '$banner')");
$mysql->query("INSERT INTO `User1` (`name`, `female`, `lastname`, `information`) VALUES ('$name1', '$female1', '$lastname1', '$information1')");
$mysql->query("INSERT INTO `User2` (`name`, `female`, `lastname`, `information`) VALUES ('$name2', '$female2', '$lastname2', '$information2')");

$mysql->close();

header('Location: /');
?>