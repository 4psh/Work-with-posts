<?php
session_start();
require_once "bootstrap.php";

$_SESSION['alertColor'] = "secondary";
$_SESSION['alert'] = "";

if(isset($_POST['reg']))
{
    $user->regUser($_POST['login'], $_POST['password'], $_POST['nickname']);
}

if(isset($_POST['back']))
{
    header("Location: home.php");
}

require_once "views/form_registr.php";

