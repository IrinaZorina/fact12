<?php                        

$username = 'admin';
$hostname = 'localhost';
$password = '123';
$dbname = 'users';
$connect = mysqli_connect($hostname, $username, $password, $dbname);

mysqli_set_charset($connect, 'utf8');

if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['surname'])) {  
    $login = $_POST['login'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];    
    mysqli_query($connect, "INSERT into user (login, password, name, surname) values ('$login', '$password', '$name', '$surname')");
    header("Location: login.php"); 
    exit;
    
}                               
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
             <div class="header_button_main">
                <a href="fact.php" class="log_in1 header_button">Fact</a>      
            </div>  
            <div class="header_button_main">
            <a href="bitrix.php" class="log_in1 header_button">Битрикс</a>
            </div> 
                <div class="about">
                    <a href="" class="nav_link">О проекте</a>
                </div>
                <div class="contacts">
                    <a href="" class="nav_link">Контакты</a>
                    <a href="input.php" class="log_in header_button">Войти</a>
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
                        <h2 class="title_log">Регистрация</h2>
                    </div>
                    <form class="content_form flex" id="loginform">
                    <div class="login">
                        <input class="text-field__input" type="text" name="login" id="login" placeholder="Введите логин" value="">
                    </div>
                    <div class="password">
                        <input class="text-field__input" name="password" id="password" placeholder="Введите пароль" type="password" value=""><br>
                    </div>
                    <div class="login">
                        <input class="text-field__input" type="text" name="name" id="name" placeholder="Введите имя" value="">
                    </div>
                    <div class="login">
                        <input class="text-field__input" type="text" name="surname" id="surname" placeholder="Введите фамилию" value="">
                    </div>
                    <div class="checkbox">
                        <input id="html" type="checkbox">
                        <label for="html">Сохранить данные для входа</label>
                    </div>
                    <div class="button">
                    <button class="sign_button" type='submit' id='loginform' formmethod='post'>Зарегистрироваться</button>
                    
                    </div>
                    </form>                                
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

