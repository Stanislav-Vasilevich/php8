<?php error_reporting(-1) ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Урок 9</title>
</head>
<body>
	<h1>Оператор присваивания. Приоритет оператора. Присваивание по значение. Присваивание по ссылке.</h1>

<?php
$a = 2 + 3 * 5;
$b = 2;
$c = 2;
$v = 2;
$h = 4;
$g = 2;
$j = 3;

echo $a; // 17
echo '<br>';
var_dump($a); // int(17)

echo '<br>';
$b = $b + 3;
echo $b; // 5

echo '<br>';
echo $b += 2; // 7

echo '<br>';
$c += 3 * 5;
echo $c;

echo '<br>';
$h = $v;
var_dump($v, $h); // int(2) int(2)

echo '<br>';
$v = 5;
var_dump($v, $h); // int(2) int(2)

echo '<br>';
$g =& $j;
var_dump($g, $j); // int(3) int(3)
?>
</body>
</html>