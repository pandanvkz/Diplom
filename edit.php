<?php
include_once("db_connect.php");
session_start();
if(isset($_SESSION["user"])) {
    //echo 'Вы уже авторизированы как '.$_SESSION["admin"].'. Перенаправление на главную страницу через 2 с.';
    $_SESSION["user"] = null;
    $_SESSION["id"] = null;
    header('Location:/auth.php');
    exit;
}

if(isset($_POST['username']) && isset($_POST['password'])) {
    if(empty($_POST['username']) || empty($_POST['password'])) {
        echo "Извините, вы должны заполнить все поля";
    }
    else {
        $uname=$_POST['username'];
        $query = "SELECT * FROM `users` WHERE username ='".$uname."'";
        $queryResult = mysql_query($query);
        $q = mysql_fetch_row($queryResult);

        if($queryResult) {
            $_SESSION["user"] = $uname;
            $_SESSION["id"] = $q[0];
            header('Location: /index.php');
            exit;
        }
        else{
            echo($queryResult);
            echo("Ошибка запроса");
        }
    }
}
?>

<html>
<head>
    <title>Аутентификация</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<form action="auth.php" method="POST">
    <div>
        <label for="username">Логин</label>
        <input id="username" type="text" name="username" />
    </div>
    <div>
        <label for="password">Пароль</label>
        <input id="password" type="password" name="password" />
    </div>
    <input type="submit" value="Login"/>
</form>
</body>
</html>
