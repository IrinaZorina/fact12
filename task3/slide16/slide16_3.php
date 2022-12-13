<?php
/* Дан двумерный массив из 5 строк и 6 столбцов. 
Определить для каждого четного столбца максимальный элемент. 
Найти произведение этих элементов.  */

$array = [];

for ($i = 1; $i < 6; $i++) {
    for ($j = 1; $j < 7; $j++) {
      $array[$j][$i] = mt_rand(1, 10);
      echo $array[$j][$i] . ' ';
  }
  echo '<br>';
}
print_r($array);
echo '<br>';
$cols = [];
$maxItems = [];
foreach ($array as $key => $item) {
   if ($key % 2 == 0) {
       $cols[] = $item;
   }
   
}
foreach ($cols as $col) {
   $maxItems[] = max($col);
}
$res = 1;
foreach ($maxItems as $item) {
   $res *= $item;
}
var_dump($res);
    