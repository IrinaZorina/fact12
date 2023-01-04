<?php
/* Даны два файла, состоящие из предложений. 
Создать третий файл, содержащий все повторяющиеся предложения. */

$file = file('text1.txt');
$file1 = file('text2.txt');

$result = array_intersect($file, $file1);
file_put_contents('text3.txt', $result);