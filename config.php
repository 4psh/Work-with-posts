<?php
return [
    "host" => "localhost",
    "db" => "posts_db",
    "login" => "root",
    "password" => "",
    "opt" => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]
];