<?php error_reporting(-1) ?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Урок 8</title>
</head>
<body>
<h1>Арифметические операторы.</h1>

<?php
$num = -32;

echo '-$num: ', -$num;
echo '<br>';
var_dump('10'); // string(2) "10"
echo '<br>';
var_dump(+'-10'); // int(-10)
echo '<br>';
var_dump(-'-10'); // int(10)
echo '<br>';
var_dump(-'10'); // int(-10)
echo '<br>';
var_dump(1 + '2t'); // Warning и вычисление php >= 8.0 версии и Notice php >= 7.0 и php < 8.0 версии будет int(3)
// var_dump(1 + 't2'); // fatal error
echo '<br>';
var_dump(20 % 7); // int(6)
echo '<br>';
var_dump(-20 % 7); // int(-6)
echo '<br>';
var_dump(20 % -7); // int(6), если второе число отрицательное, все равно получаем положительное
echo '<br>';
var_dump(2 ** 3); // int(8)
?>
</body>
</html>