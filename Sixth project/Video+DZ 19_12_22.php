<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
<head>
    <!-- Заголовок страницы в браузере -->
    <title>Повторение за видеоуроком 20.12.2022</title>
    <!-- Подключаем CSS -->
    <link rel="stylesheet" href="../Sixth%20project/style.css"
    <meta charset="UTF-8"
</head>
<!-- Отображаемое тело страницы -->
<>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding('UTF-8');
?>

<h1>PHP. Работа с данными от клиента</h1>

<h2> GET/POST </h2>

<h3>Метод GET</h3>

<p>
    <?php /* пользователь этого не видит*/
    print_r($_POST); /*глобальный масси*/ /* заменили метожд на POSt вместо GET*/
    /*http://fact12/Sixth%20project/Video+DZ%2019_12_22.php/?id=2&img=2 в конце строки поставили id и img */
    ?>
</p>

<!--запрос с помощью формы--> <!-- то что видит пользователь-->

<p>
<form action="" method="post">
    Login <input type="text" name="login"> <br>
    Password <input type="password" name="password"> <br>
    <input type="submit">
</form>
</p>


</h3>Пример вывод картинки в виде галереи</h3>
<p>
    <?php
    $image = isset($_GET['id']) ? $_GET['id'] : 1; /*если данные есть то будут выдаваться данные массива*/
    echo $image;/* выдает ошибку и еще оджну запись альтернативную*/
    ?>
    <img src="images/image<?= /*php echo*/
    $image ?>.jpg" alt="" width="300" heigth="300">
    <!-- вместо echo ставим равно-->

    <a href="Video+DZ%2019_12_22.php?id=<?php echo ($image > 1) ? ($image - 1) : 4; ?>">Назад</a>
    <a href="Video+DZ%2019_12_22.php?id=<?php echo ($image < 4) ? ($image + 1) : 1; ?>">Вперед</a>

</p>
<p>
    <?php
    print_r($_GET);
    echo '<br>';
    print_r($_POST);
    echo '<br>';
    print_r($_REQUEST);
    echo '<br>';
    ?>
<form action="" method="request">
    Login <input type="text" name="login"> <br>
    Password <input type="password" name="password"> <br>
    <input type="submit">
</form>
</p>

<h2>СЛАЙД №15</h2>

<h2>Задание 1</h2>

<!--Создайте форму, состоящую из текстового поля, многострочного поля, группы выключателей, группы переключателей.
Выведите на экран значения, которые ввел/выбрал пользователь.-->

<p>
    <?php
    echo '<pre>';
    print_r($_POST);
    echo '<pre>';
    ?>
<form action="" method="post">
    <p>Имя : <input type="text" name="name"></p>
    <p>
        Комментарий : <textarea name="comment" id="" cols="30" rows="10"></textarea>
    </p>
    <p>
        <input type="radio" name="method" value="get">GET
        <input type="radio" name="method" value="post">POST
    </p>
    <p>
        <input type="checkbox" name="lang[]" value="php">PHP
        <input type="checkbox" name="lang[]" value="html">HTML
        <input type="checkbox" name="lang[]" value="css">CSS
    </p>
    <input type="submit">
</form>
</p>

<h2>Задание 2</h2>

<!--Дана форма для ввода логина и пароля. Необходимо вывести на экран имя пользователя,
а пароль захешировать и сохранить его в массив $_POST-->

<p>
    <?php
    $_POST['password'] = md5($_POST['password']);
    print_r($_POST);
    echo md5($_POST['password']);
    ?>
<form action="" method="post">
    Login <input type="text" name="login"> <br>
    Password <input type="text" name="password"> <br>
    <input type="submit">
</form>
</p>

<h2>Задание 3</h2> <!--делать счерез if/else-->

<!--Создать страницу для ввода имени пользователя (login) и пароля (passwd).
Если пользователь вводит правильную пару (login/passwd), то сервер выдает страницу с сообщением,
что доступ к секретным страницам открыт. Login предлагается выбирать из списка.-->

<p>
    <?php
    $_POST['password'] = md5($_POST['password']);
    print_r($_POST);
    echo md5($_POST['password']);
    ?>
<form action="" method="post">
    Login <input type="text" name="login"> <br>
    Password <input type="text" name="password"> <br>
    <input type="submit">
</form>
</p>






</body>
</html>