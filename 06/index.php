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

	var_dump('$is_done: ', $is_done); // bool(true)
	echo '<br>';
	echo '$is_done: ', $is_done; // 1
	echo '<br>';
	echo '$is_falsy: ', $is_falsy; // ''
	echo '<br>';
	var_dump('$is_falsy: ', $is_falsy); // bool(false)
	echo '<br>';
	var_dump('(bool)0: ', (bool)0); // bool(false)
	echo '<br>';
	var_dump('(bool)123: ', (bool)123); // bool(true)
	echo '<br>';
	var_dump("(bool)'hello': ", (bool)'hello'); //  bool(true)
	echo '<br>';

	/* integer */
	$int1 = 0;
	$int2 = 1;

	var_dump('$int1: ', $int1); // int(0)
	echo '<br>';
	var_dump('$int2: ', $int2); // int(1)
	echo '<br>';
	var_dump('PHP_INT_MAX: ', PHP_INT_MAX); // int(9223372036854775807)
	echo '<br>';
	var_dump('9223372036854775808', 9223372036854775808); // float(9.223372036854776E+18)
	echo '<br>';
	var_dump("(int)'hello': ", (int)'hello'); // int(0)
	echo '<br>';
	var_dump("числова строка '10': ", (int)'10'); // числова строка int(10)
	echo '<br>';
	var_dump("(int)'10hello': ", (int)'10hello'); // префиксная числовая строка int(10)
	echo '<br>';
	var_dump("(int)'  10hello': ", (int)'  10hello'); // префиксная числовая строка int(10)
	echo '<br>';
	var_dump("(int)'hello_10': ", (int)'hello_10'); // постфиксная числовая(нечисловая) строка, выдаст результат int(0)
	echo '<br>';
	var_dump("(int)'   hello_10': ", (int)'   hello_10'); // постфиксная числовая(нечисловая) строка, выдаст результат int(0)
	echo '<br>';
	var_dump("'10' + 20: ", '10' + 20); // int(30)
	echo '<br>';
	var_dump("'10str' + 20: ", '10str' + 20); // warning 30
	echo '<br>';
	// var_dump("'str10' + 20: ", 'str10' + 20); // Fatal error
	echo '<br>';

	$float = 1_234.567;
	var_dump('$float: ', $float); // float(1234.567)
	echo '<br>';
	var_dump('(float)123: ', (float)123); // float(123)
	echo '<br>';

	// float
	$float = 1.54;

	var_dump('$float: ', $float); // float(1.54)
	echo '<br>';
	var_dump('(float)123: ', (float)123); // float(123)
	echo '<br>';
	var_dump('0.1 + 0.2: ', 0.1 + 0.2); // float(0.30000000000000004)
	echo '<br>';
	var_dump('(0.1 * 10 + 0.2 * 10) / 10: ', (0.1 * 10 + 0.2 * 10) / 10); // float(0.3)
?>
</body>
</html>