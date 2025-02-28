<?php
	error_reporting(-1);
	
	$title = 'Урок 4. Переменные';
	$winnie_the_pooh = 'Hello I\'am Winnie';
	$count = 1;
	$fruit = "I have {$count} orange";
	$text = "$winnie_the_pooh. {$fruit}s.";
	$text2 = 'I have $fruit';
	$var = 'test 1';
	$Var = 'test 2';
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <style>div {
        margin: 0 0 20px;
      }</style>
</head>
<body>
<h1>Переменные, вывод переменных, подключение вывода ошибок</h1>
<a href="/">Перейти на главную</a>
<div><?php echo $winnie_the_pooh . '. ' . $fruit . '.' ?></div>
<div><?php echo $text ?></div>
<div><?php echo $text2 ?></div>
<div><?php var_dump($var, $Var); ?></div>
</body>
</html>
