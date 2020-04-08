<?php
session_start();

require_once "bootstrap.php";
if (!$_SESSION['auth'])
{
    header("Location:index.php");
    die();
}
else
{
    $posts = $data->getMyPosts($_SESSION['id']);
}

if(isset($_POST['logout']))
{
    $user->logout();
}

if(isset($_POST['insertPost']))
{
    header("Location:insertPost.php");
}

if(isset($_POST['goSearch']))
{
    $posts = $data->searchPost($_SESSION['id'], $_POST['search']);
}


if(isset($_POST['posts']))
{
    header("Location: page.php");
}

if(isset($_POST['updateBtn']))
{
    header("Location: updatePost.php");
}




require_once "views/page.view.php";