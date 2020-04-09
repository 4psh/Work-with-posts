<?php
session_start();
require_once "bootstrap.php";

$_SESSION['alertColor'] = "secondary";
$_SESSION['alert'] = "Заполните всю форму регистрации, чтобы пользоваться нашим сайтом!";

if(isset($_POST['reg'])) {
    if (isset($_POST['login']) == "" || isset($_POST['password']) == "" || isset($_POST['nickname'])) {
        $_SESSION['alertColor'] = "danger";
        $_SESSION['alert'] = "Вы ввели не все данные!";
    } else {
        $user->regUser($_POST['login'], $_POST['password'], $_POST['nickname']);
    }
}

require_once "views/form_registr.php";

