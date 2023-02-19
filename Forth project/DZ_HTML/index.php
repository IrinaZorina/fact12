<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
<head>
    <!-- Заголовок страницы в браузере -->
    <title>Домашнее задание№1</title>
    <!-- Адаптив -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <!-- Подключаем CSS -->
    <link rel="stylesheet" href="css/style.css"/>
    <!-- Кодировка страницы -->
    <meta charset="UTF-8">
</head>
<!-- Отображаемое тело страницы -->
<body>

<div class="block">

    <div class="content1">
        <div class="content_text_1"><img src="img/smiling cookie.png" height="50px" width="50px" alt=""
                                         class="imagecookie">
            <p>Выполнение домашнего задания №1 </p></div>
        <div class="navigation_panel">
            <nav>
                <a href="index2.html" target="_blanck">Таблица Менделеева</a>
                <a href=""></a>
                <a href=""></a>
                <a href=""></a>
            </nav>
        </div>
    </div>
    <!-- Вся страница -->
    <div class="main_body">

        <div class="content content_main_body">

            <div class="content2">
                <div class="content_text"><img src="img/IMG_7975.jpg" width="300px" height="400px" alt="Упс!"
                                               class="scale"></div>
            </div>
            <div class="content3">
                <div class="content31">
                    <div class="content_text">Белянин Юрий</div>
                </div>
                <div class="conten32">
                    <div class="content_text">
                        <h2>Информация о себе </h2>
                        <?php
                        $firstSentence = "<p>Меня зовут, Юра, мне 35лет. Работаю на ММК ООО МРК плавильщиком 
металлов и сплавов, так как закончил МаГТУ по специальности металлургия черных металлов и нашел себя на этом трудном 
поприще, тем не менее нет предела совершенству и на данный момент прохожу курсы в компании ФАКТ. Из хобби люблю 
путешетвовать, заниматься сваркой, как бы это не казалось возможно странным,в общем все крутится возле металла, люблю 
читать книги из последнего начал читать Граф Монте-Кристо (А. Дюма), когда получается люблю проводить время активно и с пользой.</p>";
                        $a = 'Меня зовут, Юра, мне 35лет.';
                        $b = '<span class="red"> Меня зовут, Юра, мне 35лет.</span>';
                        echo str_replace($a, $b, $firstSentence);

                        ?>
                    </div>
                </div>
                <div class="content33">
                    <div class="content_text">
                        <h2> Понравилось, предложения и тд.</h2>
                        <?php
                        $color = "<ol>
								<li>Во-первых, хотелось бы отметить доманшюю, дружественную атмосферу на самом занятии.</li>
								<li>Во-вторых качественная подача информации и вовлечение группы в решение поставленной задачи, что показывает профессионализм преподавателя Регины.</li>
								<li>В-третьих своевремменное реагирование преподавателя на возникающие вопросы как во время занятия, так молниеносная ответная реакция при возникновении вопросов вне занятий и помощь в решении вопросов.  </li>
							</ol>";
                        $strip = strip_tags($color, ['<ol>', '<li>']);/*выставил теги которые не нужно удалятьб но они все равно красяться в цвет*/
                        $array_color = explode(' ', $strip);
                        foreach ($array_color as $key => $value) {

                            if ($key % 2 != 00) {
                                echo "<span class='purple'>" . $value . "</span>";
                            } else {
                                echo "<span class='green'>" . $value . "</span>";
                            }
                            echo " ";
                        }
                        $array_color = implode("' '", $array_color);

                        ?>
                    </div>
                </div>
            </div>
        </div>


        <!-- Домашние задание #3 часть 1 -->


        <div class="homework_3_1">

            <div class="homework">
                <div class="homework_row">
                    <div class="homework_row1 row_1">
                        <div class="homework_content"><img src="img/Aston_Martin10.jpg" width="100%" alt=""></div>
                    </div>
                    <div class="homework_row2 row_2">
                        <div class="homework_content">ASTON MARTIN</div>
                    </div>
                </div>
            </div>

            <div class="homework">
                <div class="homework_row">
                    <div class="homework_row1 row_1">
                        <div class="homework_content"><img src="img/Alpina.jpg" width="100%" alt=""></div>
                    </div>
                    <div class="homework_row2 row_2">
                        <div class="homework_content">ALPINA</div>
                    </div>
                </div>
            </div>

            <div class="homework">
                <div class="homework_row">
                    <div class="homework_row1 row_1">
                        <div class="homework_content"><img src="img/Audi.jpg" width="100%" alt=""></div>
                    </div>
                    <div class="homework_row2 row_2">
                        <div class="homework_content">AUDI</div>
                    </div>
                </div>
            </div>

            <div class="homework">
                <div class="homework_row">
                    <div class="homework_row1 row_1">
                        <div class="homework_content"><img src="img/Brabus_11.jpg" width="100%" alt=""></div>
                    </div>
                    <div class="homework_row2 row_2">
                        <div class="homework_content">BRABUS</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Домашние задание #3 часть 2 -->

        <div class="homework_3_2">

            <div class="homework2">
                <div class="homework_row2_2">
                    <div class="yctal">
                        <div class="homework_row2_1 row_2_2_1">
                            <div class="homework_content"><img src="img/1.jpg" alt="" class="photo"></div>
                        </div>
                        <div class="homework_row2_2_9 row_2_2_2">
                            <div class="homework_content">ASTON MARTIN</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="homework2">
                <div class="homework_row2_2">
                    <div class="yctal">
                        <div class="homework_row2_1 row_2_2_1">
                            <div class="homework_content"><img src="img/2.jpg" alt="" class="photo"></div>
                        </div>
                        <div class="homework_row2_2_9 row_2_2_2">
                            <div class="homework_content">ASTON MARTIN</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="homework2">
                <div class="homework_row2_2">
                    <div class="yctal">
                        <div class="homework_row2_1 row_2_2_1">
                            <div class="homework_content"><img src="img/3.jpg" alt="" class="photo"></div>
                        </div>
                        <div class="homework_row2_2_9 row_2_2_2">
                            <div class="homework_content">ASTON MARTIN</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="homework2">
                <div class="homework_row2_2">
                    <div class="yctal">
                        <div class="homework_row2_1 row_2_2_1">
                            <div class="homework_content"><img src="img/4.jpg" alt="" class="photo"></div>
                        </div>
                        <div class="homework_row2_2_9 row_2_2_2">
                            <div class="homework_content">ASTON MARTIN</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="class_DZ">

    <?php
    $file = 'index.php';
    $str = file_exists($file) ? file_get_contents($file) : ''; /* делаем через тернарный оператор*/
    $patt = '~(?<galsnye>[аеёиоуыэюя])~iu';/* параметры поиска, то есть сами галсные буквы*/
    preg_match_all($patt, $str, $a);/* ищет буквы от последнего вхождения в строку*/
    $galsnye = count(array_filter($a['galsnye']));

    echo 'Гласных букв: '. $galsnye;

    echo "<br>";

    $str = file_exists($file) ? file_get_contents($file) : '';/* делаем через тернарный оператор*/
    $slova = str_word_count($str);
    echo "<br>";
    echo 'Количество слов: '. $slova;

    ?>
    <?php
    $date = date('d.m.Y');
    $myBirthDay = "20.06.1987";
    echo "Сегодня: " .  $date . "<br>";
    echo "Мой День Рождения: " .  $myBirthDay . "<br>";
    echo "Прошло дней: " . $dateDiff = date_diff(new DateTime(), new DateTime('1987-06-20')) -> days;
    ?>

</div>
    <!-- Footer -->

    <div class="footer">
        <div class="container">
            <div class="footer__row">
                <div class="footer__text"><a href="http://google.ru" target="_blank" class="link"> Copyright all rights
                        reservd by yury's company 16/11/22</a></div>
            </div>
        </div>
    </div>
</div>

</body>
</html>


