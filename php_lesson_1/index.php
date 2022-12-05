<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Слайд 23</title>
</head>

<body>

    <?php
    $name = 'Николай'; // Имя
    $age = 41; // Возраст
    define("PI", pi()); // Число Пи
    ?>

    <p>Моё имя: <?= $name ?></p>
    <p>Мой возраст: <?= $age ?></p>
    <p>Число Пи: <?= PI ?></p>

    <?php
    $time = date("H");
    $time_of_day = ($time >= 8 && $time < 20) ? 'day' : 'night';
    ?>

    <p><img src="http://<?= $_SERVER['HTTP_HOST'] . '/img/' . $time_of_day ?>.jpg" alt=""></p>


</body>

</html>