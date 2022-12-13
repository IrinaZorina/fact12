<?php

$all = [];
$max = 0;

$tempt = [

    'сентябрь' => [
     'куба' => 45,
     'тринидад' => 32,
     'ямайка' => 28,
     'гаити' => 15,
 ],

  'октябрь' => [
     'куба' => 60,
    'тринидад' => 17,
    'ямайка' => 19,
    'гаити' => 20
],

  'ноябрь' => [
     'куба' => 65,
     'тринидад' => 44,
     'ямайка' => 31,
     'гаити' => 50
 ],

];
  $sept = $tempt['сентябрь'];
 
  foreach($sept as $value) {
  if($value > $max)
  {
      $max = $value;
  }
};

$all['сентябрь'] = $max;


  $octob = $tempt['октябрь'];
 
  foreach($octob as $value) {
  if($value > $max)
  {
      $max = $value;
  }
 
};

$all['октябрь'] = $max;


$nov = $tempt['ноябрь'];
 
  foreach($nov as $value) {
  if($value > $max)
  {
      $max = $value;
  }
 
};

$all['ноябрь'] = $max;

var_dump($all);

      


