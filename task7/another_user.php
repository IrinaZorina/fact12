<?php
session_start();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon"> 
    <link rel="stylesheet" href="styles/style_new_user.css">
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
        <div class="container main_info flex">
            <div class="title_main">
                <h1 class="title">Вы успешно авторизовались!</h1>
            </div>
            <div> 
                <?php 
                foreach ($_SESSION as $value) {
                    echo "Последняя посещенная страница: " . $value;
                 }
                ?>
            </div>
            <div class="profile_message flex">
                <p class="profile_descr">Необходимо заполнить профиль!</p>
                <div class="button">
                    <button class="log_button">Заполнить профиль</button>
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

