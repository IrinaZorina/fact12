<?php
/* Для группы учащихся известны годовые оценки по следующим предметам: 
математика, физика, химия, информатика. Найти среднюю в группе оценку по каждому из предметов. 
Суммирование оценок по каждому предмету. */

$result_math = 0;
$result_physics = 0;
$result_chemistry = 0;
$result_informatics = 0;

$log = [

    'math' => [
      'Иванов' => 5,
      'Петров' => 5,
      'Сидоров' => 5,
      'Агеева' => 5,
      'Сергеева' => 5,
      'Матроскина' => 5
  ],

  'physics' => [
      'Иванов' => 4,
      'Петров' => 4,
      'Сидоров' => 4,
      'Агеева' => 4,
      'Сергеева' => 4,
      'Матроскина' => 4
  ],
 
  'chemistry' => [
       'Иванов' => 5,
       'Петров' => 5,
       'Сидоров' => 5,
       'Агеева' => 3,
       'Сергеева' => 2,
       'Матроскина' => 4
   ],
   
   'informatics' => [
       'Иванов' => 2,
       'Петров' => 3,
       'Сидоров' => 4,
       'Агеева' => 5,
       'Сергеева' => 2,
       'Матроскина' => 4
   ],
];



   $math = $log['math'];
   foreach ($math as $value) {
   $result_math += $value;        
}

$result_math = $result_math / (count($math));
echo ($result_math);
echo "<br>";
   $physics = $log['physics'];
   foreach ($physics as $value) {
   $result_physics += $value;
   }
   
$result_physics = $result_physics / (count($physics));
echo ($result_physics);

echo "<br>";

   $chemistry = $log['chemistry'];
   foreach ($chemistry as $value) {
   $result_chemistry += $value;
   }
   
$result_chemistry = $result_chemistry / (count($chemistry));
echo ($result_chemistry);
echo "<br>";

   $informatics = $log['informatics'];
   foreach ($informatics as $value) {
   $result_informatics += $value;
   }
   
$result_informatics = $result_informatics / (count($informatics));
echo ($result_informatics);

echo "<br>";





