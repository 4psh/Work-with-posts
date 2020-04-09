<?php
require_once "bootstrap.php";
require_once "views/header.php";

$posts = $data->getOnePost($_GET['id']);

require_once "views/footer.php";
require_once "views/about.view.php";
