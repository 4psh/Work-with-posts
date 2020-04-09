<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Авторизация</title>
    <style>
        form {
            width: 400px;
            margin: 0 auto;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 10px;
        }
        .btn {
            width: 180px;
        }

        .btn-block {
            text-align: center;
            margin: 30px 0;
        }
        .backBtn{
            color: white;
        }

        .backBtn:hover {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>

<form method="POST" class="fp1">
    <div class='alert alert-secondary'
         role='alert'>Нет своего аккаунта? <a href='registr.php'>Зарегистрироваться</a>
    </div>
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

    <div class="form-group btn-block">
        <button name="ok" id="ok" value="ok" class="btn btn-primary">Дальше</button>
        <button name="back" id="back" value="back" class="btn btn-primary">Назад</button>
    </div>
</form>

<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
