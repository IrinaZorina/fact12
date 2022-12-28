<?php
/* Даны два файла, состоящие из предложений. Создать третий файл, содержащий все предложения, 
которые есть хотя бы в одном из файлов. 
Повторы не добавлять в третий файл. */

$arr = file('text1.txt');
print_r($arr);

$arr2 = file('text2.txt');
print_r($arr2);

$str = array_intersect($arr, $arr2); // находит одинаковые элементы
file_put_contents('text3.txt', $str);

$str2 = array_diff($arr, $arr2); // находит разные элементы
file_put_contents('text3.txt', $str2);