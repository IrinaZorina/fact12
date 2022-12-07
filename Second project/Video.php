<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
<head>
    <!-- Заголовок страницы в браузере -->
    <title>Повторение за видеоуроком</title>
    <!-- Адаптив -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <!-- Подключаем CSS -->
    <link rel="stylesheet" href="..//Second project/style.css"
    <meta charset="UTF-8"
</head>
<!-- Отображаемое тело страницы -->
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding('UTF-8');
?>

<h2> Пример 1</h2>
<p>
    <?php
    $a = 7;
    $b = 5;
    if ($a > $b) echo " значение а больше b";
    ?>
</p>
<h2> Пример 2</h2>
<p>
    <?php
    $c = 0;
    if (!$c) echo "значение с истина"; /* ! знак отрицания */
    ?>
</p>

<h2> Пример 3</h2>
<p>
    <?php
    $d = 8;
    $e = 7;
    if ($d > $e) {
        echo "значение d больше e";
        $e = $d;
    }
    ?>
</p>

<h2> Пример 4 сложное логическое условие</h2>
<p>
    <?php
    $age = 14;
    if ($age >= 10 && $age < 18) {
        echo "Ты подросток";
    }
    ?>
</p>

<!--<h2> Пример 5 (пока роль его не понятна) </h2>-->
<!--<p>-->
<!--    --><?php
//    $login = 'admin';
//    $role='admin';
//    if ($login=="admin" || $role=="master") {
//          }
//    ?>
<!--</p>-->

<h2> Пример 6 </h2>
<p>
    <?php
    $f = 8;
    $g = 10;
    if ($f > $g) {
        echo "значение f больше g";
        $g = $f;
    } else {
        echo "значение g больше f";
        $f = $g;
    }
    ?>
</p>

<h2> Пример 7 с функцие mt_rand (1,10)</h2>
<p>
    <?php
    $h = mt_rand(1, 10);
    $i = mt_rand(1, 10);

    if ($h > $i) {
        echo "h = $h";
    } else {
        echo "i = $i";
    }
    ?>
</p>

<h2> Пример 8 elseif неудобна и засоряет код</h2>
<p>
    <?php
    $k = mt_rand(1, 10);
    $l = mt_rand(1, 10);
    if ($k > $l) {
        echo "значение k=$k больше l=$l";
        $l = $k;
    } elseif ($k = $l) {
        echo "значение k=$k равно l=$l";
    } else {
        echo "значение l=$k больше k=$k";
        $k = $l;
    }
    ?>
</p>
<p>
    <?php
    $m = mt_rand(1, 10);
    $n = mt_rand(1, 10);
    //    if ($m < $n) {
    //        $min = $m;
    //    } else {
    //        $min = $n;
    //    }

    $min = ($m < $n) ? $m : $n; /*альтернативная запись*/
    echo "m=$m";
    echo "n=$n";
    echo "min=$min";
    ?>
</p>

<h2> Задание №1</h2>
<p>
    <?php
    $a1 = mt_rand(1, 10);
    $b1 = mt_rand(1, 10);
    $c1 = mt_rand(1, 10);

    $d1 = ($b1 ** 2) - (4 * $a1 * $c1);

    if ($d1 > 0) {
        $x1 = (-$b1 + sqrt($d1)) / (2 * $a1);
        $x2 = (-$b1 - sqrt($d1)) / (2 * $a1);
        echo "Переменная X1=$x1";
        echo "Переменная X2=$x2";
    } elseif ($d1 < 0) {
        echo "Нет корней уравнения";
    } else {
        $x1 = (-$b1 + sqrt($d1)) / (2 * $a1);
        echo "В уравнении один корень X=$x1";
    }

    ?>
</p>

<h2> Пример 9 тернарный оператор</h2>
<p>
    <?php
    $a2 = -mt_rand(1, 100);
    $mod = $a2 >= 0 ? $a2 : -$a2;
    echo ' Модуль числа: ' . $mod, '';
    ?>
</p>

<h2> Пример 10 цикл</h2>
<p>
<h3>Оператор while</h3>
<p>
    <?php
    $x = 0;
    while ($x++ < 10) { /*можно поставить ++ в само условие */
        /* $x++; *//* если поставить после echo то выведет 0..9 если поставить перед echo то выведет 1..10*/
        echo $x;
    }
    ?>
</p>
<p>
    <?php
    $i1 = 1;
    while ($i1 < 18) {
        $i1++;
    }
    echo 'Ура! мне 18';
    ?>
</p>
</p>

<h3>Оператор do while</h3>
<p>
    <?php
    $x3 = 0;
    do {
        echo $x3;
    } while ($x3++ < 10);
    ?>
</p>
<p>
    <?php
    $x4 = mt_rand(5, 22); /*заменил постоянную переменную на рандом*/
    do {
        echo " Пока ты еще мал + $x4" . "</br>";
        $x4++;
    } while ($x4 < 18);
    echo 'Ура! Мне 18';
    ?>
</p>

<h3>Оператор for</h3>
<p>
    <?php
    /*  for ($u = 0; $u < 10;$u++)*/ /* полная запись*/
    for ($u = 0; $u++ < 10;) {  /* альтарнативная запись сократили условие*/
        echo $u;
    }
    ?>
</p>

<p>
    <?php
    for ($u = 0, $y = 0; $u < 10; $u++, $y += 2) {
        echo "u=$u" . ' ';
        echo "y=$y" . '<br/>';
    }
    ?>
</p>

<p>
    <?php
    for ($w = 1, $w1 = "слоник <br/>"; $w < 20; $w++) {
        $str = $w . $w1;
        echo $str;
    }
    ?>
</p>

<h3>Конструкция Break</h3>
<p>
    <?php
    $z1 = 0;
    while ($z1++ < 10) {
        if ($z1 == 7) break;
        echo "Итерация $z1 <br>";
    }
    ?>
</p>

<h3>Конструкция continue</h3>
<p>
    <?php
    $z2 = 0;
    while ($z2++ < 10) {
        if ($z2 == 7) continue;
        echo "Итерация $z2 <br>";
    }
    ?>
</p>

<p>
    <?php
    $z3 = 1;
    for (; ;) {
        if ($z3 > 10) {
            break;
        }
        echo $z3;
        $z3++;
    }
    ?>
</p>


<h2>Оператор switch</h2>
<p>
    <?php
    $user = 'Клиент'; /* регистр имеет значение*/
    switch ($user){
        case 'Клиент':
            echo 'Привет клиент!';
            break;
        case 'Админ':
            echo 'Привет админ!';
            break;
        default:
            echo 'Я тебя не знаю';
    }
    ?>



<h2>Оператор include and require </h2>
<p>
    <?php

    ?>
</p>


</body>
</html>
