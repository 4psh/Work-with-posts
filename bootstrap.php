<?php
$config = require_once "config.php";
require_once "Connection.php";
require_once "userData.php";

$user = new userData(Connection::make($config));

require_once "PostData.php";

$data = new PostData(Connection::make($config));