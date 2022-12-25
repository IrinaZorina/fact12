<?php
$file = 'profile.php';
$str = file_exists($file) ? file_get_contents($file) : '';
$patt = '~(?<vowels>[аеёиоуыэюя])~iu';

function letters($file, $str, $patt) {
    preg_match_all($patt, $str, $a);
    $vowels = count(array_filter($a['vowels']));    
    echo 'Гласных букв: '. $vowels;    
    echo "<br>";
}

letters($file, $str, $patt);


function words($str) {
    $words = str_word_count($str);
    echo 'Количество слов: '. $words;
}

words($str);
