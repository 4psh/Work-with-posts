<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Регистрация</title>
    <style>
        form {
            width: 400px;
            margin: 0 auto;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 10px;
        }

        a {
            color: white;
        }

        a:hover {
            text-decoration: none;
            color: white;
        }

        .btn {
            width: 180px;
        }

        .btn-block {
            text-align: center;
            margin: 30px 0;
        }

    </style>
</head>
<body>

<form method="POST" class="fp2">
    <div class="alert alert-<?= $_SESSION['alertColor'] ?>
         role='alert' "><?= $_SESSION['alert'] ?>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Логин:</label>
        <input type="email" class="form-control"
               id="login"
               name="login"
               autofocus
               placeholder="n@mail.ru">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Пароль:</label>
        <input type="password" class="form-control"
               id="password"
               name="password"
               autofocus>
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Никнейм:</label>
        <input type="text" class="form-control"
               id="nickname"
               name="nickname"
               autofocus>
    </div>

    <div class="form-group btn-block">
        <button name="reg" id="reg" value="reg" class="btn btn-primary">Зарегистрироваться</button>
        <button name="back" id="back" value="back" class="btn btn-primary">Назад</button>
    </div>
</form>

<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>