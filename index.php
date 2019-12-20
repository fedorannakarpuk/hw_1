<?php
include "data_type.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework № 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a name="top">  </a>
<div class="wrapper">

    <p> 1) Типы данных 	&#9989; </p>
    <?php echo $a;?>

    <p> 2) Переменные 	&#9989; </p>
    <?php echo $b;?>

    <p> 3) Константы. Магические константы 	&#9989; </p>
    <?php echo $c." ".$d;?>

    <p> 4) Стандарт кодирования 	&#9989; </p>
    <?php echo $e;?>

    <p> 5) Онлайн PHP редактор 	&#9989; </p>
    <img src="1.png" alt="" width=100%">
    <br>

    <p> 6) Строковые функции 	&#9989; </p>
    <span>Ознакомилась со следующими функциями: </span>
    <ul>
        <?php  include "string_function.php"; ?>
    </ul>
    <?php echo $f;?>

    <p> 7) Математические функции 	&#9989; </p>
    <ul>
        <?php  include "math_function.php"; ?>
    </ul>
    <?php echo $f;?>


    <p> 8) Список всех подезных функций 	&#9989; </p>
    <a href="http://php.net/manual/ru/funcref.php"> По ссылке</a>
    <ul>
        <?php  include "function_reference.php"; ?>
    </ul>
    <?php echo $g;?>


    <p> 9) Функции работы с массивами 	&#9989; </p>
    <?php  include "functions_for_working_with_arrays.php";
    echo $i;?>


    <br><br><br>
    <a href="#top" class="top"> &uArr;&uArr;&uArr;  <br> НАВЕРХ </a>
    <br><br>

</div>


</body>
</html>

























