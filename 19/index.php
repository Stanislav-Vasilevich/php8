<?php error_reporting(-1) ?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Операторы Continue и Break</title>
</head>
<body>
<?php
	for ($i = 1; $i <= 100; $i++) {
		if ($i === 5) continue;
		if ($i > 8) break;
		echo "<h1>{$i}</h1>";
	}

	$item = 1;

	while (true) {
		echo "$item<br>";

		if ($item === 20) {
			echo 'Число найдено!';
			break;
		}

		$item++;
	}
?>
</body>
</html>
