<?php
session_start();

class userData
{

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findOneUser($login, $password)
    {
        $s = $this->pdo->prepare("SELECT * FROM users WHERE login=:login AND password=:password");
        $s->execute([
            "login" => $login,
            "password" => $password
        ]);
        return $s->fetch();
    }

    public function findOneUserForReg($login, $nickname)
    {
        $s = $this->pdo->prepare("SELECT * FROM users WHERE login=:login AND nickname=:nickname");
        $s->execute([
            "login" => $login,
            "nickname" => $nickname
        ]);
        return $s->fetch();
    }

    public function authUser($login, $password)
    {
        $s = $this->findOneUser($login, $password);
        if($s) {
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $s->id_user;
            $_SESSION['nick'] = $s->nickname;
        }
        else
        {
            $_SESSION['auth'] = false;
            $_SESSION['alertColor'] = "danger";
            $_SESSION['alert'] = "Неверный логин или пароль!";

        }
    }

    public function regUser($login, $password, $nickname)
    {
        $s = $this->findOneUserForReg($login, $nickname);
        if($s)
        {
            $_SESSION['alertColor'] = "danger";
            $_SESSION['alert'] = "Пользователь с таким логином или никнеймом уже зарегистрирован!";
        }
        else
        {
            $n = $this->pdo->prepare("INSERT INTO users (login, password, nickname) VALUES (:login, :password, :nickname)");
            $n->execute([
                "login" => $login,
                "password" => $password,
                "nickname" => $nickname
            ]);
            $_SESSION['alertColor'] = "success";
            $_SESSION['alert'] = "Вы успешно зарегистрировались!";
        }
    }

    public function logout()
    {
        unset($_SESSION['auth']);
        session_destroy();
    }

}
