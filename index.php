<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
<head>
    <!-- Заголовок страницы в браузере -->
    <title>Домашнее задание №2</title>
    <!-- Адаптив -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <!-- Подключаем CSS -->
    <link rel="stylesheet" href="/style.css"/>
    <!-- Кодировка страницы -->
    <meta charset="UTF-8"
</head>
<!-- Отображаемое тело страницы -->
<body>

<div class="block">
    <div class="block_row">
        <div class="block_element block_element_1">
            <div class="block_content">
                <h1> Мой первый проект</h1>
            </div>
        </div>
        <div class="block_element block_element_2">
            <div class="block_content">
                <p> мое имя
                    <?php
                    $name = "Yury";
                    echo $name;
                    ?>
                </p>
                <p> мой возраст
                    <?php
                    $age = "35";
                    echo $age;
                    ?>
                </p>
                <?php
                $PI = pi();
                echo "ПИ=" . $PI;
                ?>
                </p>
                <?php
                $a = date('H:m:s');/*пробовал функцию времени*/
                echo $a;
                ?>
                <!--первый способ через переменные-->
                <p>
                    <?php
                    $image1 = '<img src="PHP_icons/sun.png" width="300" height="300">';
                    $image2 = '<img src="PHP_icons/night.jpg"  width="300" height="300">';

                    $time = date('H');
                    if ($time >= 8 && $time < 20) {
                        echo $image1 /*= 'fact12/PHP_icons/sun.png'*/
                        ;
                    } else {
                        echo $image2/* = 'fact12/PHP_icons/night.jpg'*/
                        ;
                    }
                    ?>
                </p>
                <!--Второй споссоб через просто вывод-->
                <p>
                    <?php
                    $time = date('H');

                    if ($time >= 8 && $time < 20) {
                        echo '<img src="PHP_icons/sun.png" width="300" height="300">';
                    } else {
                        echo '<img src="PHP_icons/night.jpg"  width="300" height="300">';
                    }
                    ?>
                </p>

            </div>
        </div>
        <div class="block_element block_element_3">
            <div class="block_content">
                <p>COPYRIGHT BY MY</p>
            </div>
        </div>
    </div>
</div>


</body>
</html>
