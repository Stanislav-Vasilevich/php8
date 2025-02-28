<?php error_reporting(-1) ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Урок 6</title>
</head>
<body>
<h1>Типы данных: булевы значения, числовые значения integer, дробные числа float</h1>

<?php
/* boolean */
$is_done = true;
$is_falsy = false;
var_dump($is_done); // true
echo '<br>';
echo $is_done; // 1
echo '<br>';
echo $is_falsy; //
echo '<br>';
var_dump($is_falsy); // false
echo '<br>';
var_dump((bool)0); // false
echo '<br>';
var_dump((bool)123); // true
echo '<br>';
var_dump((bool)'hello'); // true
echo '<br>';
?>

<?php
/* integer */
$int1 = 0;
$int2 = 1;

var_dump($int1); // 0
echo '<br>';
var_dump($int2); // 1
echo '<br>';
var_dump(PHP_INT_MAX); // 9223372036854775807
echo '<br>';
var_dump((int)'hello'); // 0
echo '<br>';
var_dump((int)'10'); // числова строка '10'
echo '<br>';
var_dump((int)'10hello'); // префиксная числовая строка 10
echo '<br>';
var_dump((int)'hello_10'); // постфиксная числовая строка, выдаст результат 0
echo '<br>';
var_dump('10' + 20); // 30
echo '<br>';
var_dump('10str' + 20); // warning 30
echo '<br>';
// var_dump('str10' + 20); // warning
echo '<br>';
?>
<?php
$float = 1.54;
var_dump($float);

echo '<br>';
var_dump((float)123); // 123
echo '<br>';
var_dump(0.1 + 0.2); // 0.30000000000000004
echo '<br>';
var_dump((0.1 * 10 + 0.2 * 10) / 10); // 0.3
echo '<br>';
?>
</body>
</html>