<?php
//Дан одномерный массив из 1000 элементов, состоящий из случайных целых чисел в диапазоне от 0 до 50.
// Найти сумму элементов массива, с начала массива, до первого элемента равного нулю.
$array = array();
$sum = 0;
for ($i = 0; ++$i <= 1000;) {
    $array[$i] = mt_rand(0, 50);
}
//print_r($array);
foreach ($array as $key => $value) {
    $sum += $value;
    if ($value == 0) break;
}
echo '<br>';
echo "сумма чисел до первого 0 = $sum";
echo '</br>';
echo '</br>';

/*хочу вывести ключ => значение, при $value = 0*/
foreach ($array as $key => $value) {
    if ($value == 0) {
        echo "ключ => значение  ";
        print_r("[$key]=>$value" . '</br>');
    }
}

/* найти произведение элементов с конца и до первого, равного нулю */
//foreach ($array1 as $key => $value) {
//    $sum *= $value;
//    if ($value == 0) break;
//}
//echo '<br>';
//echo "произведение чисел до первого 0 = $sum";
//echo '</br>';
//echo '</br>';
