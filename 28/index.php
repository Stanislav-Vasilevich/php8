<?php
	$list = [
					'Пройти урок по php',
					'Пройти лекцию в it-incubator',
					'Посмотреть видео Николая Мрачковского',
	];
?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Урок 28</title>
</head>
<body>
<h2>Сегодня необходимо:</h2>
<ul style="list-style-type: none; padding: 0 0 0 20px;">
	<?php foreach ($list as $li): ?>
		<?php echo "<li><input type='checkbox'>$li</li>"; ?>
	<?php endforeach; ?>
</ul>
</body>
</html>
