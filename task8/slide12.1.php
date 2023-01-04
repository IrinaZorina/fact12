<?php

/* Создайте файл hello.txt и сохраните в него текст 'Hello, world! I'm Name'. */
$str = $_POST['name'];
file_put_contents('hello.txt', $str);

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="name">
        <input type="submit">
    </form>
</body>
</html>

