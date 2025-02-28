<?php error_reporting(-1) ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Цикл for</title>
</head>
<body>
<?php
	for ($i = 1; $i <= 10; $i++) {
		echo $i . '.' . ' Задача №' . $i . '<br>';
	}
?>
</body>
</html>