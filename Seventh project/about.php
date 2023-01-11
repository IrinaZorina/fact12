<?php
setcookie('name',$_POST['val'],time()+3600*24*7);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>about.php</title>
</head>
<body>
<h1>Hello,
    <?php
    echo $_COOKIE['name'];
    ?>
</h1>
</body>
</html>