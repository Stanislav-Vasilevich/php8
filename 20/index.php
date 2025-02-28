<?php error_reporting(-1) ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Выражение match</title>
</head>
<body>
<?php
$i = 7;

$result = match ($i) {
	0, 1 => 'One',
	2 => 'Two',
	3 => 'Three',
	4 => 'Four',
	5 => 'Five',
	default => 'All'
};

echo $result . '<br>';

$grade = 9;

$res = match (true) {
	($grade >= 10) => 'excellent',
	($grade >= 7) => 'good',
	($grade >= 4) => 'bad',
	default => 'very bad',
};

echo $res;
?>
</body>
</html>
