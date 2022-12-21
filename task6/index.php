<?php 

$login = 0;
$password = 0;

print_r($_POST);

if ((isset($_POST["login"])) && (isset($_POST["password"]))) {
    $login = $_POST["login"];
    $password = $_POST["password"];      
} 

$_POST['password'] = md5($_POST['password']);
print_r($_POST);

$filename = "another_user.html";

foreach ($_POST as $value) {
    if ((($_POST["login"]) == 'admin'))  {
        $data=file_get_contents($filename);
        echo $data;  
    } else {
        echo 'Что-то пошло не так!';
    }
}

/* ЗАГОТОВКА ДЛЯ ИСПРАВЛЕНИЯ ОШИБОК */


/*$f = fopen('database.php', 'a+'); // открываю базу данных
fwrite($f, $login); //записываю логин
fwrite($f, $password . "<br>"); // записываю пароль
fclose($f); // закрываю файл*/
/*$dataBase = []; //заготовка для хранения паролей
array_push($dataBase, $login, $password); // добавление введенных данных в массив
print_r($dataBase); // проверка*/
/*&& ($_POST["password"]) == '123')*/
/*$login = 0;
$password = 0;

print_r($_POST);

if ((isset($_POST["login"])) && (isset($_POST["password"]))) {
    $login = $_POST["login"];
    $password = $_POST["password"];      
} 

echo $login . $password . '<br>';  

/*$filename = $_GET['another_user.html'];
echo $filename;

/*if ((isset($_POST["login"])) && (isset($_POST["password"]))) {
    $login = $_POST["login"];
    $password = $_POST["password"];
}

if ((isset($_POST["login"])) && (isset($_POST["password"]))) {
    $user = $_POST["login"];
    $user_password = $_POST["password"];    
}

$handle = 0;

if (($login == $user) && ($password == $user_password)) {
    fopen("C:\ospanel\domains\myProfile\another_user.html", "r");    
} else {
    echo 'Что-то пошло не так!';
}*/

/*$user = $_POST[0];
$userPassword = $_POST[1];

if (($login == $user) && ($password == $userPassword)) {
        echo $link_new;
    } */
    
/*$login = $_POST["login"];
$password = $_POST["password"];*/

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONO: социальная сеть</title>
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon"> 
    <link rel="stylesheet" href="styles/style_new.css">
</head>
<body>
    <header class="header">
        <div class="header_container container flex">
            <div class="header_logo">
                <img src="images/logo.svg" class="logo" alt="some text">
            </div>
             <div class="content_head flex">
                <div class="about">
                    <a href="" class="nav_link">О проекте</a>
                </div>
                <div class="contacts">
                    <a href="" class="nav_link">Контакты</a>
                </div>
            </div>        
        </div>
    </header>
    <main class="main">
        <div class="main_container container flex">
            <div class="content_left flex">
                <div class="content_left_title">
                    <h1>Социальная сеть для любых устройств!</h1>
                </div>
                <div class="content_left_descr">
                    <p>Установите официальные приложение MONO и оставайтесь в курсе новостей ваших друзей, где бы вы ни находились.</p>
                </div>
                <div class="content_left_image">
                    <img src="images/mobile.jpg" class="image" alt="some text">
                </div>
                <div class="content_left_product">
                    <p>Все продукты</p>
                </div>
            </div>
            <div class="content_right flex">                
                <div class="form_log_in flex">
                    <div class="content_right_logo">
                        <img src="images/logo.svg" class="logo" alt="some text">
                    </div>
                    <div class="content_right_title">
                        <h2 class="title_log">Вход Mono</h2>
                    </div>
                    <form class="content_form flex" name="log_in" method="post">
                    <div class="login">
                        <input class="text-field__input" type="text" required name="login" placeholder="Введите логин">
                    </div>
                    <div class="password">
                        <input class="text-field__input" type="text" required name="password" placeholder="Введите пароль">
                    </div>
                    <div class="checkbox">
                        <input id="html" type="checkbox">
                        <label for="html">Сохранить данные для входа</label>
                    </div>
                    <div class="button">                    
                        <button class="log_button">Войти</a></button>
                    </div>
                    </form>
                </div>
                <div class="form_sign_in flex">
                    <form class="content_form form_sign flex" name="sign" method="post">
                        <div class="content_right_title">
                            <h2 class="title_log">Новый пользователь</h2>
                        </div>
                        <div class="login">
                            <input class="text-field__input" type="text" required name="login" placeholder="Придумайте логин">
                        </div>
                        <div class="password">
                            <input class="text-field__input" type="password" required name="password" placeholder="Придумайте пароль">
                        </div>                     
                        <div class="button">
                            <button class="sign_button">Зарегистрироваться</button>
                        </div>
                    </form>
                    <div class="sign_descr flex">
                        <p class="descr1">
                            После регистрации вы получите доступ ко всем возможностям социальной сети MONO
                        </p>
                        <a href="" class="descr2">Узнать больше</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer_content">
        <div class="footer_container container flex">
            <div class="content_info flex">
                <div class="contant-rights">
                    All rights reserved (с) 2022
                </div>
                <div class="city_info">
                    гор. Челябинск
                </div>
            </div>
            <div class="days flex">
            </div>
            <div class="footer_logo">
                <img src="images/logo.svg" class="logo" alt="some text">
            </div>
        </div>
    </footer>
</body>
</html>

