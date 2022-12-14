<?php

$file = 'index.php';
$str = file_exists($file) ? file_get_contents($file) : '';
$patt = '~(?<vowels>[аеёиоуыэюя])~iu';
preg_match_all($patt, $str, $a);

$vowels = count(array_filter($a['vowels']));

echo 'Гласных букв: '. $vowels;

echo "<br>";

$str = file_exists($file) ? file_get_contents($file) : '';
$words = str_word_count($str);

echo 'Количество слов: '. $words;
