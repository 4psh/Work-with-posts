<?php
session_start();
require_once "bootstrap.php";
if(!isset($_GET['id']) || empty($_GET['id']))
{
    exit;
}

if($data->deletePost($_GET['id'])) {
    header("Location: /");
    exit;
}

require_once "page.php";
