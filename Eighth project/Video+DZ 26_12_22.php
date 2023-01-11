
<h1>PHP. Работа с данными от клиента</h1>

<h2> Тема: Работа с файлами </h2>

<h3>РАБОТА С ФАЙЛАМИ</h3>


<?php
$str = fopen('read.txt', 'r');
//$str2=fread($str,1);
while ($str2 = fread($str, 1)) {
    echo $str2 . '<br>';
}
?>
<!--альтернатива-->
<?php
//$str = fopen('read.txt', 'r');
//$str2 = fread($str,1);
//while ($str2 != Null){
//echo $str2 . '<br>';
//$str2 = fread($str,1);
//}
?>

<h3>ПРАКИТКА</h3>
<h4>Заменим h на H</h4>
<?php
$str1 = fopen('read.txt', 'r+');

while ($str3 = fread($str1, 1)) {
    echo str_replace('h', 'H', $str3) . '<br>' ;
}

?>
<h4>Убрать пробел</h4>
<?php
$str = fopen('read.txt', 'r');
$str2 = fread($str, 1);

while ($str2 != NULL) {
    if ($str2 == 'h') {
        echo mb_strtoupper($str2) . '<br>';
    }

    $str2 = fread($str, 1);
    if (($str2 == "\r") || ($str2 == "\n")) { /*игнорирует пробелы*/
        $str2 = fread($str, 1);
    } else {
        echo $str2 . '<br>';
    }

}
?>
<!--альтернатива-->

<!--$str = fopen('read.txt', 'r');
$str2 = fread($str,1);
while ($str2 != Null){
if ($str2 == "h"){
echo str_replace("h", "H", $str2) . '<br>';
$str2 = fread($str,1);
}else if ($str2 == "\n" || $str2 == "\r"){
continue;
} else{
echo $str2 . '<br>';
$str2 = fread($str,1);
}
}-->


<h3>file_get_contents - преобразует в строку </h3>
<!--проверь не получилсоь-->
<?php
$arr=file('read.txt');
echo "<pre>";
print_r($arr);
echo "</pre>";
$str=file_get_contents('read.txt');
echo $str;
echo '<br>';
echo mb_strlen($str);

?>

<h2>СЛАЙД 12</h2>
<h3>Задача 1</h3>
<!--Создайте файл hello.txt и сохраните в него текст 'Hello, world! I'm Name'.-->
<?php
$str10 = 'hello.txt';
$current = file_get_contents($str10);
$current = "Hello, world! I'm Name";
file_put_contents($str10, $current);
echo $current
?>

<h3>Задача 2</h3>
<!--Создайте папку 'test'.-->
<?php
$str12='test.txt';
$test=file_get_contents($str12);
$test="";
file_put_contents($str12,$test);
echo $test;
?>
<h3>Задача 3</h3>
<!--Дан текстовый документ, в котором есть: имя, фамилия, обратная связь. Вывести на экран только имя и фамилию. -->
<?php
$str20='info.txt';
$name="Yury";
$surname="Belyanin";
$tel="+8 800 555 45";
file_put_contents($str20,[$name,$surname,$tel]);
echo $name . '<br>';
echo $surname . '<br>';
?>
<h3>Задача 4</h3>
<!--Даны два файла, состоящие из предложений. Создать третий файл, содержащий все предложения,
которые есть хотя бы в одном из файлов. Повторы не добавлять в третий файл.-->
<?php
$str30=file('info1.txt');
$str31=file('info2.txt');
$str32='info3.txt';
$arr21=implode(array_diff($str30,$str31));
file_put_contents($str32,$arr21);
?>

<h3>Задача 5</h3>
<!--Даны два файла, состоящие из предложений. Создать третий файл, содержащий все повторяющиеся предложения.-->
<?php
$str33=file('info1.txt');
$str34=file('info2.txt');
$str35='info4.txt';
$arr22=implode(array_intersect($str33,$str34));
file_put_contents($str35,$arr22);
?>
