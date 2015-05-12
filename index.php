<?php
include_once("db_connect.php");
session_start();

    if(isset($_POST['text-ar-cod'])) {
        if (empty($_POST['text-ar-cod'])) {
            echo("Изменения не внесены");
        }
        else {
            $text = trim($_POST['text-ar-cod']);
            $query = "UPDATE `account_page` SET text = '".$text."' WHERE uid =".$_SESSION["id"];
            $queryResult = mysql_query($query);
            if ($queryResult == 1) {
                header('Location: /index.php');
                exit;
            } else {
                echo($queryResult);
                echo("Ошибка запроса");
            }
        }
    }
?>


<html>

<head>
    <meta charset='utf-8'>
    <link href='http://www.jqueryscript.net/css/jquerysctipttop.css' rel='stylesheet' type='text/css'>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js'></script>
    <script src='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>
    <link href='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css' />
    <link href='http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href="main.css" type="text/css" rel="stylesheet">

    <title>Личный кабинет</title>
</head>

<body>
<a href="auth.php"><?php echo (isset($_SESSION["user"]))? "Выйти (".$_SESSION["user"].")":"Вход "; ?></a>
<a href="edit.php">Изменить</a>
<?php
    $query = "SELECT * FROM `account_page` WHERE uid =".$_SESSION["id"];
    $queryResult = mysql_query($query);
    $q = mysql_fetch_row($queryResult);
//echo($q[2]);
?>
<div><?php echo($q[2]) ?><div>
</body>
</html>
