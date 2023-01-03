<?php
/* Даны два файла, состоящие из предложений. Создать третий файл, содержащий все предложения, 
которые есть хотя бы в одном из файлов. 
Повторы не добавлять в третий файл. */

$file = file('text1.txt');
$file1 = file('text2.txt');

$result = array_merge($file, $file1);
$result1 = array_diff($result, array_diff_assoc($result, array_unique($result)));


file_put_contents('text3.txt', $result1);