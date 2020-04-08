<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="img/1.png" type="image/x-icon">
    <title>Моя страница</title>
    <style>
        li {
            margin-right: 10px;
        }

        .search {
            margin: 5px 0;
        }
    </style>
</head>
<body>
<form method="post">
<header>
    <div class="container shadow p-3 mb-4 bg-white rounded" >
        <nav class="navbar navbar-expand-lg navbar-light pl-0 pr-0">
            <nav class="navbar navbar-light pl-0">
                <a class="navbar-brand" href="#">
                    <img src="img/1.png" width="30" height="30" class="d-inline-block align-top" alt="">GPictures</a>
            </nav>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <input type="text" name="search" class="search">
                    </li>
                    <li class="nav-item">
                        <button name="goSearch" class="nav-link btn-light border-0 rounded">Поиск</button>
                    </li>
                    <li class="nav-item">
                        <button name="posts" class="nav-link btn-light border-0 rounded">Посты</button>
                    </li>
                    <li class="nav-item">
                        <button name="insertPost" class="nav-link btn-secondary text-white border-0 rounded">Добавить запись</button>
                    </li>
                    <li class="nav-item">
                        <button name="logout" class="nav-link bg-dark text-white border-0 rounded">Выйти</button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<div class="container">
    <div class="alert alert-dark" role="alert">
        Приветствуем, <?= $_SESSION['nick'] ?>!
    </div>
            <div class="row row-cols-1 row-cols-md-2">
                <?php foreach ($posts as $p): ?>
                    <div class="col mb-4">
                        <div class="card">
                            <img src="img/<?= $p->image ?>" class="card-img-top img-thumbnail" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $p->title ?></h5>
                                <p class="card-text"><?= $p->description ?></p>
                                <hr>
                                <p class="card-text"><small class="text-muted"><?= $p->datePublication ?></small></p>
                                <button name="deleteBtn" class="btn btn-danger">Удалить</button>
                                <button name="updateBtn" class="btn btn-primary">Изменить</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
    </div>
</div>
</form>
<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
