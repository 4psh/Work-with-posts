<?php
session_start();

require_once "bootstrap.php";
$_SESSION['alertColor'] = "muted";
$_SESSION['alert'] = "";
if(isset($_POST['ok']))
{
    $user->authUser($_POST['login'], $_POST['password']);
}

if(isset($_POST['back']))
{
    header("Location: home.php");
}


if($_SESSION['auth'])
{
    header("Location:page.php");
}

require_once "views/form_auth.php";
