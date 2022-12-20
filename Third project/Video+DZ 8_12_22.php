<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
<head>
    <!-- Заголовок страницы в браузере -->
    <title>Повторение за видеоуроком</title>
    <!-- Подключаем CSS -->
    <link rel="stylesheet" href="../Third%20project/style.css"
    <meta charset="UTF-8"
</head>
<!-- Отображаемое тело страницы -->
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding('UTF-8');
?>
<h1> Массивы</h1>

<h2> Индексный массив</h2>

<!--Индексация массива начинается с 0-->

<!--Способ №1-->
<p>
    <?php
    $arr1 = array('яблоко', 'ананас', 'банан');
    print_r($arr1);/* вывод всех элементов массива*/
    ?>
</p>

<!--Способ №2-->

<p>
    <?php
    $arr2[24] = 'помидор';/* Ставим цифры в [], начинем индексацию с этой цифры*/
    $arr2[] = 'огурец';/* ведеться 24 и 25 элемент соотвествено*/
    print_r($arr2);/* вывод всех элементов массива*/
    ?>
</p>

<!--Способ №3-->
<!--Сокращенная форма объявления массива-->
<p>
    <?php
    $arr3 = ['яблоко', 'ананас', 'банан', 'вода'];
    print_r($arr3);/* вывод всех элементов массива*/
    echo '<br>';
    echo $arr3[3]; /* вывод 3-го элемента массива (вода) */
    $arr3[] = 'чай';/* добавили элемент массива*/
    $arr3[] = 'кофе';/* так как мы не знаем сколько элементов массивва то добавлять надо так*/
    echo '<br>';
    print_r($arr3);
    ?>
</p>

<h2> Вывод массива на экран (циклы)</h2>
<p>
    <?php
    $arr3 = ['яблоко', 'ананас', 'банан', 'вода'];
    print_r($arr3);/* вывод всех элементов массива*/
    echo '<br>';
    echo $arr3[3]; /* вывод 3-го элемента массива (вода) */
    $arr3[4] = 'чай';/* добавили элемент массива*/
    $arr3[] = 'кофе';/* так как мы не знаем сколько элементов массивва то добавлять надо так*/
    echo '<br>';
    print_r($arr3);
    echo '<br>';
    echo '<br>';
    /*вывод массива через цикл for  каждый едемент с новой строки*/
    for ($i = 0; $i < 6; $i++) {
        echo $arr3[$i] . '<br>';
    }
    echo '<br>';
    echo '<br>';
    /*вывод через функцию count она высчитывает количестов элементов маситва*/
    for ($i = 0; $i < count($arr3); $i++) {
        echo $arr3[$i] . '<br>';
    }
    echo '<br>';
    echo '<br>';
    /*вывод массива через цикл foreach */
    foreach ($arr3 as $value) {
        echo $value . ' ';
    }
    ?>
</p>

<h2>ПРИМЕР</h2>
<p>
    <?php
    /*определим пеерменную массива из трех значений*/
    /*максимальный индекс - 2*/
    $fav_movies = ["Собачье сердце", "Полет над гнездом кукушки", "Тот самый Менгхаузен"];
    /*добавим элемент но на позицию 4*/
    $fav_movies[] = " Человек с бульвара Капуцинов ";
    $count = count($fav_movies);
    $i = 0;
    while ($i < $count) {
        echo "--" . $fav_movies[$i] . "<br>";
        $i++;
    }
    ?>
</p>

<h2>Генерация случайных чисел в массиве</h2>
<p>
    <?php
    $arr3 = ['яблоко', 'ананас', 'банан', 'вода'];
    $arr3[4] = 'чай';/* добавили элемент массива*/
    $arr3[5] = 'кофе';/* так как мы не знаем сколько элементов массивва то добавлять надо так*/
    $i = mt_rand(0, count($arr3) - 1); /*индекс последнего элемента в массиве на 1 меньше по этому минус 1*/
    echo $arr3[$i];
    ?>
</p>

<h2>Ассоциативный массив</h2>

<p>
    <?php
    $user["name"] = 'Татьяна';
    $user["surname"] = 'Иванова';
    $user["age"] = 30;
    $user["children"] = 1;
    print_r($user);
    echo '<br>';
    echo '<br>';
    ?>
</p>

<p>
    <?php
    $user["name"] = 'Татьяна';
    $user["surname"] = 'Иванова';
    $user["age"] = 30;
    $user["children"] = 1;
    print_r($user);
    echo '<br>';
    echo '<br>';

    $arr4 = array(
        'hello' => 'Привет',
        'bye' => 'Пока'
    );
    echo '<pre>';
    print_r($arr4);
    echo '</pre>';
    ?>
</p>

<p>
    <?php
    $arr5 = array(
        'apple' => 'Яблоко',
        'pineapple' => 'ананас',
        'banana' => 'банан'
    );
    echo '<pre>';
    print_r($arr5);
    echo '</pre>';
    echo '<br>';
    echo '<br>';
    /*Можем использовать только foreach цикл for не используеться*/
    foreach ($arr5 as $key => $value) {
        echo $key . ' = ' . $value . '<br>';
        echo "$key переводится  $value  <br>"; /* В двойных ковычках переменные воспронимаются как переменные, а в одинарных какк текст */
    }
    ?>
</p>

<h2>ПРИМЕР</h2>

<p>
    <?php
    /*$user1=array();*//* инициализируем массив так*/
    $user1 = [];/* либо так */
    $user1["name"] = 'Татьяна';
    $user1["surname"] = 'М.';
    $user1["age"] = 31;
    $user1["email"] = "tat.M@gmail.com";
    $user1["job"] = "Manager";
    $user1["children"] = 9;
    print_r($user1);
    echo '<br>';
    echo "<h3> Hi, Miss {$user1['name']} {$user1['surname']}, вот твои личные данные:</h3>"; /* запись для вывода*/
    echo '<pre>';
    print_r($user1);
    echo '</pre>';
    echo "<h3> Hi, Miss $user1[name] $user1[surname], вот твои личные данные:</h3>";/*альтернативная запись*/
    echo '<pre>';
    print_r($user1);
    echo '</pre>';
    ?>
</p>

<h2>Многомерные Массивы</h2>

<p>
    <?php
    $arr6 = [[10, 11, 12], [21, 22], [31, 32, 33]];
    echo '<pre>';
    print_r($arr6);
    echo '</pre>';
    ?>
</p>

<p>
    <?php
    $arr7 = [
        'fruits' => [
            'apple' => 'яблоко',
            'pineapple' => 'ананас',
            'banana' => 'банан'
        ],
        'vegetables' => [
            'tomato' => 'помидор',
            'cucumber' => 'огурец',
        ],
        'drinks' => [
            'water' => 'вода',
            'coffee' => 'кофе',
            'tea=>' => 'чай'
        ]
    ];
    echo '<pre>';
    print_r($arr7);
    echo '</pre>';
    foreach ($arr7 as $key => $value) {
        foreach ($value as $key_new => $item) {
            echo $item . '<br>';
        }
    }
    ?>
</p>

<h2> ВЫПОЛНЕНИЕ ПРИМЕРА 1:24:40 (первая часть) в видео для вывода конкретной группы в массиве</h2>
<p>
    <?php
    $arr7 = [
        'fruits' => [
            'apple' => 'яблоко',
            'pineapple' => 'ананас',
            'banana' => 'банан'
        ],
        'vegetables' => [
            'tomato' => 'помидор',
            'cucumber' => 'огурец',
        ],
        'drinks' => [
            'water' => 'вода',
            'coffee' => 'кофе',
            'tea=>' => 'чай'
        ]
    ];
    echo '<pre>';
    print_r($arr7);
    echo '</pre>';

    foreach ($arr7 as $key => $value) {
        if ($key == 'drinks') {
            foreach ($value as $key_new => $item) {
                echo $item . '<br>';
            }
        }

    }
    ?>
</p>

<h2> ПРИМЕР </h2>
<p>
    <?php
    $country = [
        ["name" => "Китай", "capital" => "Пекин", "population" => 1.40],
        ["name" => "Индия", "capital" => "Нью-Дели", "population" => 1.37],
        ["name" => "США", "capital" => "Вашингтон", "population" => 0.32],
        ["name" => "Индонезия", "capital" => "Джакарта", "population" => 0.24]
    ];
    echo "<p>
    Страна : " . $country[0]["name"] . ",
    Столица : " . $country[0]["capital"] . ",
    Население : " . $country[0]["population"] . "(млрд.чел.) </p>";

    echo "<p>
    Страна : {$country[0]["name"]},
    Столица :{$country[0]["capital"]},
    Население : {$country[0]["population"]} (млрд.чел.) </p>";
    ?>
</p>

<h2> Решение задач слайд 15 </h2>

<h3>Задчада 1</h3>
<!--Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива.
 Запишите ее в переменную $result.
-->
<p>
    <?php
    $sum = array(50, 45, 40, 35, 30);
    echo "sum(a) = " . array_sum($sum);/* упрощение */
    ?>

</p>

<p>
    <?php
    $array = array(50, 45, 40, 35, 30);
    $total = 0;
    foreach ($array as $key => $value) {
        $total += $value;
    }
    print_r("total = $total");
    ?>
</p>

<h3>Задчада 2</h3>
<!--Дан массив, заполненный случайными числами. Необходимо вывести массив, заполненный случайными числами.
После чего вывести данный массив в противоположном порядке.-->
<p>
    <?php
    $arr8 = array(1, 6, 566546, 45.688, 88634531, 12, 232, 4355, 4554.42, 88,);
    $reversed = array_reverse($arr8);/*колоссальное упрощение!!!!*/
    echo '<pre>';
    print_r($arr8);
    echo '</pre>';

    echo '<pre>';
    print_r($reversed); /*колоссальное упрощение!!!!*/
    echo '</pre>';
    ?>
</p>

<h3>Задчада 3</h3>
<!--Создать массив, заполненный названиями картинок, например, 1.png. Необходимо случайным образом выбирать название
картинки из массива и выводить ее на экран.-->

<!-- Решение через (mt_rand и count — Выбирает один или несколько случайных ключей из массива)-->
<p>
    <?php
    $arr3 = ['1.png', '2.png', '3.png', '4.png', '5.png'];
    $i = mt_rand(0, count($arr3) - 1); /*индекс последнего элемента в массиве на 1 меньше по этому минус 1*/
    echo $arr3[$i];
    ?>
</p>

<!-- Решение через (array_rand — Выбирает один или несколько случайных ключей из массива)-->
<!--Упрощение найденное в сети-->
<p>
    <?php
    $arr9 = ['1.png', '2.png', '3.png', '4.png', '5.png'];
    $choice = array_rand($arr9, 1);
    echo $arr9[$choice];
    ?>
</p>

<h3>Задчада 4</h3>
<!--Дано N действительных случайных чисел в диапазоне от -100 до 100.
Найти минимальное положительное число и максимальное отрицательное число.-->

<p>
    <?php
    $arr10 = array(mt_rand(1, 100));
    $arr11 = array(mt_rand(-100, -1));
    echo "Минимальное значение =" . " " . min($arr10) . ";";
    echo '<br>';
    echo "Максимальное значение =" . " " . max($arr11) . ".";
    ?>
</p>


<h2> Решение задач слайд 16 </h2>

<h3>Задчада 5</h3>
<!--Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика.
Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету.-->

<p>
    <?php
    $group = [
        'ivanov' => ["math" => [mt_rand(1, 5)], "physics" => [mt_rand(1, 5)], "chemistry" => [mt_rand(1, 5)], "informatics" => [mt_rand(1, 5)]],
        'petrov' => ["math" => [mt_rand(1, 5)], "physics" => [mt_rand(1, 5)], "chemistry" => [mt_rand(1, 5)], "informatics" => [mt_rand(1, 5)]],
        'fyodorov' => ["math" => [mt_rand(1, 5)], "physics" => [mt_rand(1, 5)], "chemistry" => [mt_rand(1, 5)], "informatics" => [mt_rand(1, 5)]],
        'fedora' => ["math" => [mt_rand(1, 5)], "physics" => [mt_rand(1, 5)], "chemistry" => [mt_rand(1, 5)], "informatics" => [mt_rand(1, 5)]]
    ];
    /*    echo '<pre>';
        print_r($group);
        echo '</pre>';*/
    echo '<br>';

    foreach ($group as $key => $value) {
        if ($key == 'ivanov') {
            foreach ($value as $key_new => $item) {
                if ($key_new == 'math') {
                    foreach ($item as $grade => $grade1) {
                        echo $grade1 . '<br>';
                    }
                }
            }
        }
    }
    foreach ($group as $key => $value) {
        if ($key == 'petrov') {
            foreach ($value as $key_new => $item) {
                if ($key_new == 'math') {
                    foreach ($item as $grade => $grade2) {
                        echo $grade2 . '<br>';
                    }
                }
            }
        }
    }
    foreach ($group as $key => $value) {
        if ($key == 'fyodorov') {
            foreach ($value as $key_new => $item) {
                if ($key_new == 'math') {
                    foreach ($item as $grade => $grade3) {
                        echo $grade3 . '<br>';
                    }
                }
            }
        }
    }
    foreach ($group as $key => $value) {
        if ($key == 'fedora') {
            foreach ($value as $key_new => $item) {
                if ($key_new == 'math') {
                    foreach ($item as $grade => $grade4) {
                        echo $grade4 . '<br>';
                    }
                }
            }
        }
    }

    $summgrade = $grade1 + $grade2 + $grade3 + $grade4; /* умнее этого чет не придумал если честно, хотелось бы более универсально*/
    echo '<br>';/*посмотреть след задачу для решения этой*/
    echo "сумма = $summgrade";
    echo '<br>';
    $del = $summgrade / count($group);/* хоть какая то оптимизация))*/
    echo "срзнач=$del";
    ?>
</p>

<h3>Задчада 6</h3>
<!--Известна среднемесячная температура воздуха на следующих островах Карибского моря: Куба, Тринидад, Ямайка, Гаити.
Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.-->

<p>
    <?php
    $country = [
        ["name" => "Куба", "month" => "Январь", "temperature" => mt_rand(20, 45)],
        ["name" => "Тринидад", "month" => "Март", "temperature" => mt_rand(20, 45)],
        ["name" => "Ямайка", "month" => "Сентябрь", "temperature" => mt_rand(20, 45)],
        ["name" => "Гаити", "month" => "Июль", "temperature" => mt_rand(20, 45)]
    ];
    echo "<p>
    Остров : " . $country[0]["name"] . ",
    Месяц : " . $country[0]["month"] . ",
    Температура : " . $country[0]["temperature"] . "</p>";
    ?>
</p>

<h3>Задчада 7</h3>
<!--Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного столбца максимальный элемент.
Найти произведение этих элементов.-->

<p>
    <?php
    $arr12 = [
        [mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10)],
        [mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10)],
        [mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10)],
        [mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10)],
        [mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10)],
    ];/*  echo '<pre>';
    print_r($arr12);
    echo '</pre>'*/;
    echo "<p>
    " . $arr12[0]["1"] . ",
    " . $arr12[0]["2"] . ",
     " . $arr12[0]["3"] . ",
    " . $arr12[0]["4"] . ",
   " . $arr12[0]["5"] . "</p>";
    echo '<br>';
    echo "<p>
   " . $arr12[1]["1"] . ",
     " . $arr12[1]["2"] . ",
     " . $arr12[1]["3"] . ",
   " . $arr12[1]["4"] . ",
   " . $arr12[1]["5"] . "</p>";
    echo '<br>';
    echo "<p>
    " . $arr12[2]["1"] . ",
    " . $arr12[2]["2"] . ",
     " . $arr12[2]["3"] . ",
    " . $arr12[2]["4"] . ",
     " . $arr12[2]["5"] . "</p>";
    echo '<br>';
    echo "<p>
   " . $arr12[3]["1"] . ",
 " . $arr12[3]["2"] . ",
 " . $arr12[3]["3"] . ",
 " . $arr12[3]["4"] . ",
 " . $arr12[3]["5"] . "</p>";
    echo '<br>';
    echo "<p>
" . $arr12[4]["1"] . ",
 " . $arr12[4]["2"] . ",
" . $arr12[4]["3"] . ",
 " . $arr12[4]["4"] . ",
 " . $arr12[4]["5"] . "</p>";

    ?>
    решение так и не пришло мне в голову
</p>


<h2> Решение задач слайд 17 </h2>
Решение этих задач на тему 12.12.2022

</body>
</html>
