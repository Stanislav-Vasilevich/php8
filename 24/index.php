<?php error_reporting(-1) ?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Пользовательские функции. Часть 1</title>
</head>
<body>
<?php
	$phone = 10;

	function get_sum($a = 10, $b = 2)
	{
		echo $a + $b;
	}

	get_sum();

	echo '<br>';

	function get_phone($a)
	{
		global $phone;
		echo $phone += 2;
		echo '<br>';
		echo $a;
	}

	get_phone($phone);
?>
</body>
</html>
