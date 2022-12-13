<?php
/* Дано N действительных случайных чисел в диапазоне от -100 до 100. 
Найти минимальное положительное число и максимальное отрицательное число. */

$array = [];

for ($i = 0; $i < 10; $i++) {
    $array[$i] = mt_rand(-100, 100);
    echo $array[$i] . '<br>';    
}

echo '<br>';

$min = $max = $array[0];

foreach ($array as $value) {	

	if ($max < $value) {
		$max = $value;
	} 

	if ($min > $value) {
		$min = $value;
	} 
}
	
echo "Максимальное число массива: " . $max . "<br>";	
echo "Минимальное число массива: " . $min . "<br>";