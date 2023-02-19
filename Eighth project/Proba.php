<?php
echo '<pre>';
print_r($_FILES['myfile']);
/*используем суперглобальный массив он двумерный получать доступ можно по ключам*/
/*добавили NAME ($_FILES['myfile']['name']) для конкретизации ключа*/
echo '</pre>';
$current_path=$_FILES['myfile'] ['tmp_name'];
$new_path= __DIR__ ."/proba_images/" . $_FILES['myfile'] ['name'];
move_uploaded_file($current_path,$new_path);
?>
<!--альтернатива с проверкой-->
$current_path = $_FILES['myfile']['tmp_name'];
$file_name = $_FILES['myfile']['name'];
$new_path = DIR . '/img/' . $file_name;
if (move_uploaded_file($current_path, $new_path)){
echo 'Файл успешно загружен';
}else{
echo 'Что-то пошло не так';
}

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <!--добавляем кроме method="post надо добавить enctype="multipart/form-data"-->
    <input type="text" name="name">
<!--<input type="hidden" name="MAX_FILE_SIZE" value="1500000"> ограничиваем размер загружаемого файла, ограничение параметр HIDDEN для скрытия
его от пользователя-->
    <input type="file" name="myfile">
    <input type="submit">
</form>


</body>
</html>
