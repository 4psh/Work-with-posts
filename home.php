<?php

require_once "bootstrap.php";
require_once "views/header.php";

$posts = $data->getAllPosts();

require_once "views/footer.php";
require_once "home.view.php";