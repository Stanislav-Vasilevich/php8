<?php error_reporting(-1) ?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Урок 13</title>
</head>
<body>
<h1>Управляющие конструкции if else</h1>

<?php
$time = 0;

if($time > 0 && $time <= 7) {
	echo 'dark';
} elseif($time > 7 && $time <= 18) {
	echo 'light';
} else {
	echo 'dark';
}
?>
</body>
</html>
