<?php
session_start();
 require_once "bootstrap.php";
if(!isset($_GET['id']) || empty($_GET['id'])) {
    exit;
}
$post=$data->getOnePost($_GET['id']);
if(!$post) {
    header("Location: /");
    exit;
}
if(isset($_POST['btnPost'])) {
    $_POST['id'] = $_GET['id'];
    $_POST['datePublication'] = date("Y-m-d");
    $data->updatePost($_POST);
    header("Location: /");
    exit;
}

 require_once "updatePost.view.php";
