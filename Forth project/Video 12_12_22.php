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
<!-- при использовании этой функции на один русский символ приходиться 2 байта
как следствие надо количество букв умножать на 2, английский текст один в один -->
<p>
    <?php
    $str = "надежный веб-интегратор факт!";

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
    /* (строка в которой идет поиск, искомая строка(что ищем), offset указа то с того количества сиволов
    (если отрицательное значение то с конца строки поиск)  */
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
    echo($str);
    echo '<br>';
    $a = htmlspecialchars($str);/*преобразует некоторые специальные символы*/
    echo $a;
    echo '<br>';
    $b = htmlentities($str); /*преобразует всевозможные символы в HTML сущности*/
    echo $b;
    echo '<br>';
    ?>

<h3>STRIP_TAGS</h3>
<!--удаляет HTML теги из строки-->
<p>
    <?php
    $fruit = '<b>apple</b>';
    echo '<br>';
    echo $fruit;
    echo '<br>';
    echo strip_tags($fruit);
    ?>
</p>


<h2>ПРАКТИКА слайд 22</h2>

<h3>Задание 1</h3>
<!--Дата строка «fact». Привести строку к виду «Fact».-->

<?php
$string = 'fact';
$arr22 = str_split($string);
print_r($arr22);
echo '<br>';
echo mb_strtoupper($arr22[0]) . "act"; /*решение чрез конкатинацию*/
echo '<br>';
echo str_replace('f', 'F', $string); /* решение через замену буквы*/
?>

<h3>Задание 2</h3>

<!--Дана строка, в которой содержится «фамилия, имя, отчество». Преобразовать строку к виду «имя, фамилия».
Например, исходная строка «Закирова Регина Артуровна», результирующая «Регина Закирова».-->

<?php
$namesuranme = 'Белянин Юрий Олегович';
$short = explode(' ', $namesuranme);
print_r($short);
echo '<br>';
echo $short[0] . ' ' . $short[1];
?>


<h3>Задание 3</h3>

<!--Дана строка «Привет, мир». Найти количество символа «и» в строке (регистр учитывать). -->

<?php
$stroka = 'Привет мир!!! И снова мы встретились ми-ми-мишно';/* 7 буквы и*/
$split = mb_str_split($stroka);
//print_r($split);
function look($char)
{
    return $char == "и";
}

$number = array_filter($split, 'look');
echo count($number);
?>

<h3>Задание 4</h3>

<!--Дана строка ‘html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'. -->

<?php
$stroka1 = 'html css php';
echo mb_substr($stroka1, 0, 4);
echo '<br>';
echo mb_substr($stroka1, 5, 3);
echo '<br>';
echo mb_substr($stroka1, 9, 3);
echo '<br>';
?>
<h3>Задание 5</h3>

<!--Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'. -->

<?php
$stroka2 = 'HTTP.png';
if (str_ends_with($stroka2, '.png')) { /*использовал оператор Str_ends_with*/
    echo "Строка заканчивается на '.png'";
}
else{
    echo "Строка не заканчиваеться на '.png' ";
}
?>


<h2>ПРАКТИКА слайд23</h2>

<h3>Задание 1</h3>

<!--Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте троеточие в конец
и выведите на экран. Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран.-->
<p>
    <?php
    $str3 = " И еще раз привет мир!!!!!";
    $str_arr = mb_str_split($str);
    if (count($str_arr) > 5) {
        $new_str = '"' . mb_substr($str3, 0, 5) . '..."';
    } else $new_str = $str;
    echo $new_str;
    ?>
</p>
<h3>Задание 2 </h3>
<!--Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.-->
<p>
    <?php
    $str4 = 'Hello my name is joe black and i am citizen of this great, i have been sad tremendous city';
    echo str_replace(['a', 'b', 'c'], ['1', '2', '3'], $str4);
    ?>
</p>

<h3>Задание 3 </h3>
<!--Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.-->
<p>
    <?php
    $str5 = 'abc abc abc';
    echo ' Позиция последнней буквы "b":' . strpos($str5, 'b');
    ?>
</p>

<h3>Задание 4 </h3>
<!--Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.
-->
<p>
    <?php
    $str6 = 'html css php';
    $str_arr1 = explode(' ', $str6);
    echo '<pre>';
    print_r($str_arr1);
    echo '</pre>';
    ?>
</p>
<h3>Задание 5 </h3> <!--рассмотреть еще решения-->
<!--В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). Определите количество дней между датами
-->
<p>
    <?php
    echo $dateDiff = date_diff(new DateTime(), new DateTime('2015-02-10 00:00:00'))->days;
                                                                      /*год-месяц-число часы:минуты:секунды*/
                                /* здесь указывем нужню дату*/ /*здесь то же указываем дату*/

    /*гениальное коллосальное упрощение, новая функция в PHP*/
    ?>
</p>



</body>
</html>
