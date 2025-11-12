<?php error_reporting(-1) ?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>10 урок.</title>
</head>
<body>
<h1>Операторы сравнения. Операторы инкремента и декримента. Префиксный и постфиксный операторы.</h1>

<?php
	$a = 10;
	$b = '10';
	$c = 2;

	var_dump($a == $b); // bool(true)
	echo '<br>';
	var_dump($a === $b); // bool(false)
	echo '<br>';
	var_dump($a != $b); // bool(false)
	echo '<br>';
	var_dump($a !== $b); // bool(true)
	echo '<br>';
	var_dump($a <> $b); // bool(false) это значит не равно, как и !=
	echo '<br>';
	var_dump(2 > 3); // bool(false)
	echo '<br>';
	var_dump(2 >= 3); // bool(false)
	echo '<br>';
	var_dump(2 < 3); // bool(true)
	echo '<br>';
	var_dump(2 <= 3); // bool(true)
	echo '<br>';
	var_dump(1 <=> 1); // int(0)
	echo '<br>';
	var_dump(2 <=> 3); // int(-1)
	echo '<br>';
	var_dump(3 <=> 2); // int(1)
	echo '<br>';
	var_dump($c++); // int(2)
	var_dump($c); // int(3)
	echo '<br>';
	$c = 2;
	var_dump(++$c); // int(3)
	var_dump($c); // int(3)
	echo '<br>';
	$c = 2;
	var_dump($c--); // int(2)
	var_dump($c); // int(1)
	echo '<br>';
	$c = 2;
	var_dump(--$c); // int(1)
	var_dump($c); // int(1)
	echo '<br>';
?>
</body>
</html>