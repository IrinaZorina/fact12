<?php
/* Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива. Запишите ее в переменную $result. */

$array = [50, 45, 40, 35, 30];
$result = 0;

foreach ($array as $value) {
    $result += $value;
}

echo $result;
?>