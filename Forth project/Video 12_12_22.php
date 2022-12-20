<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
<head>
    <!-- Заголовок страницы в браузере -->
    <title>Повторение за видеоуроком</title>
    <!-- Подключаем CSS -->
    <link rel="stylesheet" href="../Forth%20project/style.css"
    <meta charset="UTF-8"
</head>
<!-- Отображаемое тело страницы -->
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding('UTF-8');
?>

<h1>СТРОКИ</h1>

<h2> Переобразование строки</h2>

<p>
    <?php
    $var = '10';
    var_dump($var);
    ?>
</p>

<!--неявное преобразование типов строка перешла в числовой тип-->

<p>
    <?php
    $var = '10' + '10';
    var_dump($var);
    ?>
</p>

<!--будет тип float так как поставили точку -->

<p>
    <?php
    $var = '10.5' + '10.5';
    var_dump($var);
    ?>
</p>

<h2>примеры </h2>
<!--1-->
<p>
    <?php
    $int_var = 10;
    $var = $int_var = '10';
    var_dump($var);
    ?>
</p>
<!--2-->
<p>
    <?php
    $int_var = 10;
    $var = $int_var = '10.5';
    var_dump($var);
    ?>
</p>
<!--3-->
<p>
    <?php
    $int_var = 10;
    $var = $int_var = '1.2e3'; /* 10**3экспонента, экспотенциальный тип записи*/
    var_dump($var);
    ?>
</p>
<!--4-->
<p>
    <?php
    $int_var = 10;
    $var = $int_var = '1E-3'; /*10**-3*/
    var_dump($var);
    ?>
</p>


<p>
    <?php
    $a = 100;//int
    $b = "$a";//string
    $c = (string)$b;//явное преобразование, string
    if ($c === $b) {//если $a то знак плюс не появиться сравнение типов, а вот если $b то типы одинаковые и появиться +
        echo "+";
    }
    /*  var_dump($c);*/
    ?>
</p>


<p>
    <?php
    $a = 100.5;//float
    $b = (int)$a;//integer явеное преобразование
    $c = (string)$b;//явное преобразование string
    if ($c === $b) {
        echo "+";
    }
    var_dump($b);
    ?>
</p>

<h2> Функции для работы со строкой</h2>

<h3>Implode и Explode</h3>


<p>
    <?php
    $arr = ["blue", "red", "green"];
    print_r($arr);
    echo '<br>';
    /*    <!--Implode преобразует массив строку-->*/
    $str = implode(', ', $arr); /*разделитель separator будет использован для раделения значений массива*/
    echo $str;
    /*  <!--Explode преобразует строку в массив-->*/
    $arr2 = explode(' ', $str, 2); /* limit поставили 2 теперь наш массив содержит всего 2 элемента и во второй элемент ушел остаток строки массива */
    echo '<br>';
    print_r($arr2);
    $arr2 = explode(' ', $str, -1);  /*если лимит принимает отрицательное значение то будут возвращены все элементы кроме последних*/
    echo '<br>';
    print_r($arr2);
    ?>
</p>

<h3>mb_substr</h3>
<!--возвращает подстроку-->
<p>
    <?php
    $str = "НАДЕЖНЫЙ ВЕБ-ИНТЕГРАТОР ФАКТ!";
    echo mb_substr($str, 9, 3);
    /*(строка, с какого символа начинается отсчет, длина вырезаемой подстроки)*/
    /*если start отрицательное число то считаем с конца строки */
    /*если длина положительная то считаем в лева на прпаво, если отрицатеная то справа на лево*/
    echo '<br>';
    ?>
    <!--выывели без нзнака "!"-->
    <?php
    $str = "НАДЕЖНЫЙ ВЕБ-ИНТЕГРАТОР ФАКТ!";
    echo mb_substr($str, 0, 28);
    echo '<br>';
    echo mb_strlen($str);
    echo '<br>';
    ?>
</p>

<p>
    <!--выывели только ФАКТ-->

    <?php
    $str = "НАДЕЖНЫЙ ВЕБ-ИНТЕГРАТОР ФАКТ!";
    echo mb_substr($str, -5, -1);
    echo '<br>';
    echo mb_strlen($str);
    ?>
</p>

<h3>substr</h3>
<!-- при использовании этой функции на один русский символ прихлиться 2 байта
как следствие надо количество букв умножать на 2, англиский текст один в один -->
<p>
    <?php
    $str = "надежный веб-интегратор факт!";
    echo substr($str, 0, 23);
    echo '<br>';
    echo mb_strlen($str);
    echo '<br>';
    $str1 = "hello";
    echo substr($str1, 0, 3);
    ?>
</p>

<!-- выведем только " веб-интегратор "-->
<p>
    <?php
    $str = "надежный веб-интегратор факт!";
    echo substr($str, 17, 27);
    echo '<br>';
    ?>
</p>

<h3>mb_strlen</h3>
<!--  выводит количество символов в строке-->
<p>
    <?php
    $str = "надежный веб-интегратор факт!";
    echo mb_substr($str, 0, 29);
    echo '<br>';
    echo mb_strlen($str);
    echo '<br>';
    ?>
</p>

<h3>strpos</h3>
<!--возвращает позицию первого вхождения подстроки-->
<p>
    <?php
    $str = "надежный веб-интегратор факт!";
    echo strpos($str, 'а');/*needle чуствительна к регистру символа*/
    /* (строка в которой идет поиск, искомая строка(что ищем), offset указа то с того количества сиволов(если отрицательное значение то с конца строки поиск)  */
    echo '<br>';
    ?>
</p>

<h3>mb_strpos</h3>
<p>
    <?php
    $str = "надежный веб-интегратор факт!";
    echo mb_strpos($str, 'а');/*needle чуствительна к регистру символа*/
    /*mb_strpos выведет 1, т.е найдет и выведет первый попавшийся символ а*/
    echo '<br>';
    ?>
</p>


<h3>str_replace</h3>
<p>
    <?php
    $str = "надежный веб-интегратор факт!";
    echo str_replace('веб', 'web', $str);
    /*( то что будем менять, на что будем менять, в какой строке*/
    echo '<br>';
    echo str_replace(array("надежный", "веб-интегратор", "факт"),
        array("reliable", "web-integrator", "fact"), $str);
    ?>
</p>
<h3>strtolower/strtoupper</h3>
<!--lower- нижний регистр букв upper верхний регистр-->
<p>
    <?php
    $str = "надежный веб-интегратор факт!";
    $str2 = "HELLO";
    echo strtolower($str2);
    echo '<br>';
    echo mb_strtoupper($str); /*опять же для русской раскладки mb_strtorupper/lower*/
    echo '<br>';
    ?>
</p>
<h3>str_split</h3>
<!--преобразует строку в массив-->
<p>
    <?php
    $str = "надежный веб-интегратор факт!";
    $str2 = "HELLO";
    $arr1 = str_split($str2);
    $arr2 = str_split($str2, 2); /*length 2, длинна каждого элемента 2 символа*/
    print_r($arr1);
    echo '<br>';
    print_r($arr2);
    echo '<br>';
    ?>
</p>
<h3>MD5</h3>
<!--Шифрование-->
<p>
    <?php
    $strpass = 'qwerty';
    echo md5($strpass); /*32 значное 16-ричное*/
    echo '<br>';
    echo sha1($strpass);/*более современен*/
    echo '<br>';
    echo password_hash($strpass, PASSWORD_BCRYPT);/*64 символа 16-го разряда*/
    echo '<br>';
    ?>
</p>

<h3>TRIM</h3>
<!--удоляет пробелы с начала и конца строки-->
<p>
    <?php
    $strpass = '   --qwerty--   ';
    echo trim($strpass);
    ?>
</p>

<h3>HTMLSPECIALCHARS</h3>
<!--преобразует спец сиволы в HTML сущности-->
<p>
    <?php
    $str = '<b>HELLO</b>';
    echo ($str);
    echo '<br>';
    $a= htmlspecialchars($str);/*преобразует некоторые специальные символы*/
    echo $a;
    echo '<br>';
    $b=htmlentities($str); /*преобразует всевозможные символы в HTML сущности*/
    echo $b;
    echo '<br>';
    ?>

<h3>STRIP_TAGS</h3>
<!--удаляет HTML теги из строки-->
<p>
    <?php
    $fruit='<b>apple</b>';
    echo '<br>';
    echo $fruit;
    echo '<br>';
    echo strip_tags($fruit);
    ?>
</p>


<h2>ПРАКТИКА</h2>
<!--Задание 1-->
<p>
    <?php

    ?>
</p>







</body>
</html>
