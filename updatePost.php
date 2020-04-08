<?php
session_start();
 require_once "bootstrap.php";
if(!isset($_GET['id']) || empty($_GET['id'])) {
    exit;
}
$post=$data->getPost($_GET['id']);
if(!$post) {
    header("Location: /");
    exit;
}
if(isset($_POST['btnPost'])) {
    $_POST['id'] = $_GET['id'];
    $data->updatePost($_POST);
    header("Location: /");
    exit;
}

 require_once "updatePost.view.php";