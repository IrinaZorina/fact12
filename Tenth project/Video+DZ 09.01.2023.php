<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
<head>
    <!-- Заголовок страницы в браузере -->
    <title>Повторение за видеоуроком 09.01.23</title>
    <!-- Подключаем CSS -->
    <link rel="stylesheet" href="../Tenth%20project/style.css"
    <meta charset="UTF-8"
</head>
<!-- Отображаемое тело страницы -->
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding('UTF-8');
?>

<h1>PHP. Базы данных</h1>
<h2>SQL-ЗАПРОСЫ. ВЫБОРКА</h2>
<p>
    <?php
    /*Подключение к базе данных (БД)*/
    $hostname = 'localhost';
    $username = 'fact12';
    $password = 'fact12';
    $dbname = 'city';

    $connect = mysqli_connect($hostname, $username, $password, $dbname); /* поместили в переменную "connect" для удобства обращения */
    /*(имя хоста, имя пользователя, пароль от пользователя, база данных к которой подключаемся*/

    //echo '<pre>';
    //var_dump(mysqli_connect($hostname, $username, $password, $dbname)); /* вывели для проверки подключились или нет*/
    //echo '</pre>';

    /*["errno"]=>
    int(0)
    ["error"]=>
    string(0) ""*/
    /*если вышла такая запись то мы успешно соединились с БД и нет ошибок*/

    mysqli_set_charset($connect, 'utf8');
    /*кодировка таблицы:(наше соединение, кодировка)*/

    mysqli_query($connect, 'Select * From person');
    /*для выполнения любого запроса:(наше соединение, Select запрос)*/

    $arr = mysqli_fetch_all(mysqli_query($connect, 'Select * From person'), MYSQLI_ASSOC);
    /*преобразование в массив*/ /*mysqli_fetch_all(mysqli_query(...,...), вводим второй аргумент, для вываода ассоциативного массива)*/

    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    /*вывод массива*/

    /* 1. Вывести все имена , хранящиееся в таблице person, каждое имя начинается с новой строки */
    $arr = mysqli_fetch_all(mysqli_query($connect, 'Select DISTINCT name From person '), MYSQLI_ASSOC);

    foreach ($arr as $key => $value) {
        foreach ($value as $item) {
            echo $item . '<br>';
        }
    }
    /*вывод массива через foreach*/

    echo '<br>';

    /* 2. Вставить новое значение в таблицу person (запросом)*/
    mysqli_query($connect, "insert into person (name,age) VALUES ('Belyanin','35')");

    echo '<pre>';
    echo "Запись добавлена";
    echo '</pre>';
    ?>
</p>

<p>
<form class="content_form form_sign flex" name="signform" method="post">
    <div class="content_right_title">
        <h2 class="title-log">Новый пользователь</h2>
    </div>
    <div class="login">
        <input type="text field_input" type="text" name="name" placeholder="Ваше имя" value="">
    </div>
    <div class="pass">
        <input type="text field_input" type="text" name="age" placeholder="Ваш возраст" value="">

    </div>
    <div class="button">
        <button class="sign button" type="submit" name="signform" formmethod="post" value=""> Внести в базу данных
        </button>
        <?php
        /*Подключение к базе данных (БД)*/
        $hostname = 'localhost';
        $username = 'fact12';
        $password = 'fact12';
        $dbname = 'city';
        $connect = mysqli_connect($hostname, $username, $password, $dbname); /* поместили в переменную "connect" для удобства обращения */
        /*(имя хоста, имя пользователя, пароль от пользователя, база данных к которой подключаемся*/
        mysqli_set_charset($connect, 'utf8');
        /*кодировка таблицы:(наше соединение, кодировка)*/
        $name = $_POST['name'];
        $age = $_POST['age'];
        if ($_POST != null) {
            mysqli_query($connect, "insert into person (name,age) VALUES ('$name','$age')");
        }

        ?>
    </div>
</form>
</p>

<p>
    <?php
    //ALTER TABLE `person` ADD FOREIGN KEY (`id_city`) REFERENCES `city`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
    ?>
</p>


<h2>Создание таблицы и ее заполнение</h2>

<?php

/*Подключение к базе данных (БД)*/
$hostname = 'localhost';
$username = 'fact12';
$password = 'fact12';
$dbname = 'hobbies';

$connect = mysqli_connect($hostname, $username, $password); /* поместили в переменную "connect" для удобства обращения */

//mysqli_query($connect, "Create database hobbies"); /*выполнил раз для создания базы данных*/
mysqli_select_db($connect, $dbname); /*выбор базы данных*/

//mysqli_query($connect,"
//CREATE TABLE people(/* ЭТУ КОМАНДУ ВЫПОЛНЯЕМ ТОЛЬКО ОДИН РАЗ ДЛЯ СОЗДАНИЯ ТАБЛИЦЫ!!!!в скобка перечисляем поля и тип полей*/
//    id_person int NOT NULL Auto_Increment, /*AUTO_INCREMENT + прописывем что поле NOT NULL указывается для первичного ключа*/
//    name varchar (50), /* если varchar то в скобках указываем размерность */
//    surname varchar(50),
//    age int,
//    PRIMARY KEY (id_person)
//)
//");/* создание таблицы  people*/
echo '<pre>';
echo "Таблица создана people";
echo '</pre>';

//mysqli_query($connect,"
//CREATE TABLE hobbies(/* ЭТУ КОМАНДУ ВЫПОЛНЯЕМ ТОЛЬКО ОДИН РАЗ ДЛЯ СОЗДАНИЯ ТАБЛИЦЫ!!!!в скобка перечисляем поля и тип полей*/
//    id_hobbies int NOT NULL Auto_Increment, /*AUTO_INCREMENT + прописывем что поле NOT NULL указывается для первичного ключа*/
//    name varchar (50), /* если varchar то в скобках указываем размерность */
//    description varchar(100),
//    PRIMARY KEY (id_hobbies)
//)
//");/* создание таблицы  hobbies*/
echo '<pre>';
echo "Таблица создана hobbies";
echo '</pre>';

//mysqli_query($connect, "insert into people (name,surname,age) VALUES (('Yury','Belyanin',35),('Bob','Bold',21),('Tom','Salt',33),('Trash','Can',66))";
/*альтернативный ввод нескольких значений через запятую!!!!!!!!!*/
/* на мой взгляд неинформативно ибо не видно что и зачем*/


//mysqli_query($connect, "insert into people (name,surname,age) VALUES ('Yury','Belyanin','35')");
//mysqli_query($connect, "insert into people (name,surname,age) VALUES ('Bob','Bold','21')");
//mysqli_query($connect, "insert into people (name,surname,age) VALUES ('Tom','Salt','33')");
//mysqli_query($connect, "insert into people (name,surname,age) VALUES ('Trash','Can','66')");
/* ОТПРАВЛЯЕМ ФОРМУ ОДИН РАЗ ЧТОБ ПО СТО РАЗ НЕ ДУБЛИРОВАТЬ!!!!!! вносим запросом в таблицу people данные */

//mysqli_query($connect, "insert into hobbies (name,description) VALUES ('Yury','talking about everything')");
//mysqli_query($connect, "insert into hobbies (name,description) VALUES ('Bob','talking about planes and cranes')");
//mysqli_query($connect, "insert into hobbies (name,description) VALUES ('Tom','baying food')");
//mysqli_query($connect, "insert into hobbies (name,description) VALUES ('Trash','talking about trash')");
/* ОТПРАВЛЯЕМ ФОРМУ ОДИН РАЗ ЧТОБ ПО СТО РАЗ НЕ ДУБЛИРОВАТЬ!!!!!! вносим запросом в таблицу hobbies данные */

//mysqli_query($connect, "
//CREATE TABLE people_hobbies(/* ЭТУ КОМАНДУ ВЫПОЛНЯЕМ ТОЛЬКО ОДИН РАЗ ДЛЯ СОЗДАНИЯ ТАБЛИЦЫ!!!!в скобка перечисляем поля и тип полей*/
//    id_record int NOT NULL Auto_Increment, /*AUTO_INCREMENT + прописывем что поле NOT NULL указывается для первичного ключа*/
//    id_people int NOT NULL, /*задаем такой же ключ как у связующей таблицы*/
//    id_hobbies int NOT NULL,
//    PRIMARY KEY (id_record),
//    FOREIGN KEY (id_people) REFERENCES people(id_person) /* само ограничение->*/on update cascade on delete restrict,/*это первый ключ*/
//    FOREIGN KEY (id_hobbies) REFERENCES hobbies(id_hobbies)/* само ограничение->*/on update cascade on delete restrict/*это второй ключ*/
//    /*можем поставить ограничение внешнего ключа для одного и другого ключа, при удалении или обнавлении записи */
//)
//");/* создание таблицы  people_hobbies*/
echo '<pre>';
echo "Таблица создана people_hobbies";
echo '</pre>';
?>


</body>
</html>