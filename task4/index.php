<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
<?php
    date_default_timezone_set("Asia/Yekaterinburg");
    $time = date("H");
    $html_link = "<link rel='stylesheet' href='styles/style_day.css'>";
        if ($time >= 8 && $time < 20) {
            echo $html_link;
        } else  {
            $html_link = "<link rel='stylesheet' href='styles/style_night.css'>";
        }
        echo $html_link;            
?>    
</head>
<body>
    <header class="header">
        <div class="header_container container flex">
            <nav class="navigation flex">
                <div class="logotype">
                    <img src="images/logo.svg" class="logo" alt="some text">
                </div>
                <div class="nav_items_hidden">
                    <p class="hidden_menu">Меню</p>
                </div>
                <div class="nav_items_header">
                    <ul class="nav_items flex">
                        <li class="nav_item">
                            <a href="" class="nav_link">Главная</a> 
                        </li>
                        <li class="nav_item">
                            <a href="" class="nav_link">О курсе</a>
                        </li>
                        <li class="nav_item">
                            <a href="table.html" class="nav_link" target="_blank">Таблица Менделеева</a>
                        </li>                       
                    </ul>
                </div>       
            </nav>
            <div class="header_button_main flex">
                <button class="header_button"> 
                    <a href="" class="registration">Регистрация</a>
                </button>
                <button class="header_button"> 
                    <a href="" class="log_in">Войти</a>
                </button>
            </div>    
        </div>    
    </header>
    <main class="main">
        <div class="container main_information flex">
            <section class="photo_profile flex">
                <div class="photo_item"></div>
            </section>
            <section class="information flex">
                <h1 class="main_title">Михалёва Елена</h1>
                <div class="section_items flex">
                    <article class="info_personal">
                        <h2 class="title_article">Обо мне</h2>                        
                        <div class="personal_descr">                        
                        <?php
                            $firstSentence = "Начинающий верстальщик с большим желанием вырасти до fullstack-разработчика на базе 1С-Битрикс. 
                            Любознательна и крайне общительна в силу занимаемой должности HR-менеджера. 
                            Ассоциирую себя пирожком с малиной среди пирожков с мясом, но с Фактом чувствую себя в своей тарелке! Любимое хобби - хилить в Overwatch 
                            (я хороший саппорт :D), хоть последнее обновление и крайне меня расстроило. 
                            Искренне верю в то, что справлюсь с курсом, как с It Takes Two, хотя первое станет точно сложнее. 
                            Владею несколькими паттернами разработки, такими как «Должно же работать!», «Да почему так-то!», «ЧТО ЗНАЧИТ ТОЧКА С ЗАПЯТОЙ ПРОПУЩЕНА?!», 
                            а также «Ну почему это происходит именно со мной!», принципами «Сайт не лежит, он отдыхает» и «Stack Overflow всему голова». 
                            Благодарю за прочтение лирики :)";
                            $array = explode('.', $firstSentence);
                            echo str_replace([$array[0]] , ["<b>" . $array[0] . "</b>"], $firstSentence);
                        ?>                          
                        </div>                         
                    </article>
                    <article class="info_course">
                        <h2 class="title_article_second">О курсе</h2>
                        <div class="article_descr">
                        <?php
                            $secondText = "Верно спланированная программа обучения и чётко расставленные организационные моменты - лучший показатель качества курса. Мне крайне важно знать распорядок обучения для того, чтобы хорошо спланировать свою деятельность и я очень рада тому, что этот курс уже прекрасно организован. Отдельную порцию комплиментов стоит выразить Регине и Ирине, которые скрупулезно и хорошо доносят материалы лекций. Надеюсь, что обучение нового материала станет для меня столь же посильной вещью, как и первые наши лекции. С удовольствием продолжаю обучение!";
                            $arraySecond = explode(' ', $secondText);
                            foreach ($arraySecond as $key => $value) {	
                            
                            	if ($key % 2 != 00) {
                            		echo "<b>" . $value . "</b>";
                            	} else {
                                echo "<em>" . $value . "</em>";
                              }
                            echo " ";
                            }
                            $arraySecond = implode("' '", $arraySecond);
                        ?> 
                        </div>
                    </article>
                </div>
            </section>
        </div>
        <section class="container">
            <div class="flex_items flex">
                <div class="flex_item_left flex">
                    <div class="item_title">
                        <h2>Любимые книги</h2>
                    </div>                    
                    <div class="item_content_left flex">
                        <div class="flex_item item_1 flex">
                            <div class="item_image image1">
                                <img src="images/tartt.jpg" width="150px" height="200px" alt="some text">
                            </div>
                            <div class="item_image descr1">
                                <p class="item_description">Блестящая американская писательница Донна Тартт, лауреат Пулитцеровской премии 2014 года, покорила читателей в 1992 году первым же своим романом «Тайная история». Книга сразу стала бестселлером.</p>
                            </div>
                        </div>
                        <div class="flex_item item_2 flex">
                            <div class="item_image image2">
                                <img src="images/krampus.jpg" width="150px" height="200px" alt="some text">
                            </div>
                            <div class="item_image descr2">
                                <p class="item_description">Как-то на Рождество в округе Бун, бард-неудачник становится свидетелем странного происшествия: семеро существ, напоминающих чертей, гонятся человеком в красной шубе, подозрительно похожим на... Санта-Клауса.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex_item_left flex">
                    <div class="item_title">
                        <h2>Любимые фильмы</h2>
                    </div>                    
                    <div class="item_content_left flex">
                        <div class="flex_item item_1 flex">
                            <div class="item_image image1">
                                <img src="images/movie-duna.jpg" width="150px" height="200px" alt="some text">
                            </div>
                            <div class="item_image descr1">
                                <p class="item_description">Атрейдесы прибывают на планету, где им никто не рад. Фантастический эпос Дени Вильнёва с шестью «Оскарами»</p>
                            </div>
                        </div>
                        <div class="flex_item item_2 flex">
                            <div class="item_image image2">
                                <img src="images/movie-inter.jpg" width="150px" height="200px" alt="some text">
                            </div>
                            <div class="item_image descr2">
                                <p class="item_description">Когда засуха приводят человечество к продовольственному кризису, коллектив учёных отправляется сквозь червоточину в путешествие, чтобы найти планету с подходящими для человечества условиями.</p>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </section>
        <section class="container">
            <h2 class="title_grid">Любимые шедевры</h2>
            <div class="grid_items grid">                
                <div class="item_grid card_1 grid">                    
                    <div class="item_descr_grid">
                        <p class="item_description">Nightwish</p>
                    </div>
                </div>
                <div class="item_grid card_2 grid">                    
                    <div class="item_descr_grid">
                        <p class="item_description">Florence and the machine</p>
                    </div>
                </div>
                <div class="item_grid card_3 grid">
                    <div class="item_descr_grid">
                        <p class="item_description">Tomb Raider legend</p>
                    </div>
                </div>
                <div class="item_grid card_4 grid">
                    <div class="item_descr_grid">
                        <p class="item_description">Devil may cry 5</p>
                    </div>
                </div>
            </div>
        </section>
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
            <?php
                $date = date('d.m.Y');
                $myBirthDay = "29.11.1995";
                echo "Сегодня: " .  $date . "<br>";
                echo "Мой День Рождения: " .  $myBirthDay . "<br>";
                echo "Прошло дней: " . $dateDiff = date_diff(new DateTime(), new DateTime('1995-11-29')) -> days;
            ?>
            </div>
            <div class="footer_logo">
                <img src="images/logo.svg" class="logo" alt="some text">
            </div>
        </div>
    </footer>
</body>
</html>

