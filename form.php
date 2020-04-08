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
    </style>
</head>
<body>
<form method="POST">
   <div class="form-group mt-3">
       <label for="post_date">Дата публикации:
        <?= $posts->datePublication ? date_format(new DateTime($posts->datePublication), 'd.m.Y') : date("d.m.Y") ?>
       </label>
   </div>
    <div class="form-group mt-5">
        <label for="title" class="mb-3">Название:</label>
        <input type="text" class="form-control" id="title" name="title"  value="<?= $posts->title ?? '' ?>">
    </div>
    <div class="form-group">
        <label for="description" class="mb-3">Введите описание:</label>
        <textarea class="form-control" id="description" name="description" rows="5" cols="50" >
            <?= $posts->description ?? '' ?>
        </textarea>
    </div>
    <div class="form-group">
        <label for="description" class="mb-3">Выберите изображение:</label>
        <input type="file" name="image" class="image">
    </div>
    <button type="submit" name="btnPost" class="btn btn-primary mt-3">
        <?= $btnText ?>
    </button>
    <button type="submit" name="back" class="btn btn-primary mt-3">
        Назад
    </button>
</form>
</div>
<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

