<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
<head>
    <!-- Заголовок страницы в браузере -->
    <title>Повторение за видеоуроком 16.01.23 (OOP)</title>
    <!-- Подключаем CSS -->
    <link rel="stylesheet" href="../OOP/style.css"
    <meta charset="UTF-8"
</head>
<!-- Отображаемое тело страницы -->
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding('UTF-8');
?>

<h1>ООП(объектно ориентированное программирование) </h1>

<?php
include 'People.php';/* подключили People класс*/

$tom = new People(); /*Создаем экземпляр нашего класса и присваиваем соотвествующие переменные*/
$tom->name = "Tom";/*прописываем свойства (поля) и и инициализируем их*/
$tom->hello(); /*вызываем методы*/
/*в данном случае обращаемся к классу через экземпляр*/
People::$age = 20;/*смотри People, обращемся к классу People, данное свойство static $age
распростарняется на весь класс и можем его изменить у ВСЕГО класса!!!*/
$bob = new People();
$bob->name = "Bob";
People::hello(); /*вызов в случае присвоения параметра static*/
/* Созадть клас математика, определить 4 статических метода (+,-,/,*)*/
/*Определить статическое поле - число ПИ*/
?>
<h2>/* Созадть клас математика, определить 4 статических метода (+,-,/,*)*/
    /*Определить статическое поле - число ПИ*/
</h2>

<?php
include 'Mathematics.php';

$addition = Mathematics::addition(5, 5);
echo 'Сложение ' . $addition . "\n";
$subtraction = Mathematics::subtraction(5, 5);
echo 'Сложение ' . $subtraction . "\n";
$multiplication = Mathematics::multiplication(5, 5);
echo 'Сложение ' . $multiplication . "\n";
$splitting = Mathematics::splitting(5, 5);
echo 'Сложение ' . $splitting . "\n";

/*
$operation = new Mathematics;

$addition = $operation::addition(5, 5);
echo 'Сложение ' . $addition . "\n";
$subtraction = $operation::subtraction(5, 5);
echo 'Вычитание  ' . $subtraction . "\n";
$multiplication = $operation::multiplication(5, 5);
echo 'Умножение ' . $multiplication . "\n";
$splitting = $operation::splitting(5, 5);
echo 'Деление ' . $splitting . "\n";


$addition = $operation->addition(5, 5);
echo 'Сложение ' . $addition . "\n";
$subtraction = $operation->subtraction(5, 5);
echo 'Вычитание  ' . $subtraction . "\n";
$multiplication = $operation->multiplication(5, 5);
echo 'Умножение ' . $multiplication . "\n";
$splitting = $operation->splitting(5, 5);
echo 'Деление ' . $splitting . "\n";
*
 *
 */
?>


<h2>Интерфейсы</h2>

<?php
include_once "People.php";
$c = new B();
$c->hello();
echo"<br>";
$d=new D();
$d->hello();
?>
<h2>Создать класс геометрических фигур, в котором раелизовать поле -длина и два метода -подсчета периметра и площади.
Создат три наследника. в каждом из наследниковреализовать методы подсчета периметра и площади.
* задачу решит через наследников и через интерфейсы</h2>

<?php
include_once "Geo.php";

$square = new Square;
$square->lengh = 5;
$result = $square->perimeter();
echo $result;
echo"<br>";
$circle = new Circle();
$circle->lengh =4;
$per = $circle->perimeter();
echo $per;
echo '<br>';
$area = $circle->acreage();
echo $area;

?>


</body>
</html>