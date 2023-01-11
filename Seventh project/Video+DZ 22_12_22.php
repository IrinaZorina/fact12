<!--////*setcookie('name', 'Tom', time() + 3600 * 24 * 7);/* обязательно первые две (name название, value само значение,
expire до какого времени будет существовать, path путь к куки рабоатет тока по этому пути,
domain показывает доммен, secure величина куки только через HTTPS защита от XSS атак,
)*/
setcookie('age', '18', time() + 3600 * 24 * 7);
setcookie('surname', 'Smith', time() + 3600 * 24 * 7);
print_r($_COOKIE); /*первое обращение куки устанавливаются, только на второе обращение покажут куки, передает обратно и мы их видим*/
/*должны быть прописаны до HTML кода!!!!*/
*/?>
-->
<?php
//session_start();
//$_SESSION['name'] = 'Kate';
//$_SESSION['pass'] = 123;

//setcookie('name', 'Tom', time()+3600*24*7);
//setcookie('age', '18',  time()+3600*24*7);
//setcookie('surname', 'Smith', time()+3600*24*7);
if (isset($_POST['val'])){
    $nameForm = $_POST['val'];
    setcookie('name', $nameForm, time()+3600*24*7);
    print_r($_COOKIE);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Video+DZ 22_12_22.php</title>
</head>
<body>
<h1>Hello! You are on index</h1>
<form action="about.php" method="post">
    <input type="text" name="val" value="<?php echo isset($_POST['val'])? $_POST['val']: ''?>">
    <input type="submit">
</form>
<!--<a href="about.php">перейти</a>-->  <!--так как добавили в  fom action можно это убрать-->
</body>
</html>