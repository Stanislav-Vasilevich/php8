<?php error_reporting(-1) ?>

	<!doctype html>
	<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>3 урок. Комментарии в PHP</title>
	</head>
	<body>
	<a href="/">Перейти на главную</a>
	<?php echo '<p>Стандартный вывод текста в php</p>' ?>
	<?= '<p>Вывод без echo</p>' ?>
	<?php // echo 'Однострочный комментарий'; ?>
	<?php # echo 'Комментарий в стиле Unix'; ?>
	<?php
		/*
			echo 'Многострочный';
			echo 'комментарий';
		*/
	?>
	</body>
	</html>

<?php echo 'Hi';
