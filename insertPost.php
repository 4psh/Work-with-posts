<?php
session_start();
require_once "bootstrap.php";

if(isset($_POST['btnPost'])) {
    $_POST['datePublication'] = date("Y-m-d");
    $id = $data->insertPost($_POST, $_SESSION['id']);
    header("Location: page.php");
    exit;
}
if(isset($_POST['back'])) {
    header("Location: page.php");
}
require_once "insertPost.view.php";