<?php error_reporting(-1) ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Урок 11</title>
</head>
<body>
<h1>Логические операторы. Оператор конкатенации</h1>

<?php
$a = 3 == 3 && 3 < 2; // true && false
$b = 3 == 3 and 3 < 2; // true далее and 3 < 2 не выполняется (потому что приоритет and меньше, чем у =)
$c = 3 == 3 || 3 < 2; // true
$d = 2 == 3 or 3 > 2; // false далее or 3 > 2 не выполняется (потому что приоритет or меньше, чем у =)
$e = 'Мир';

echo '<br>';
var_dump($a); // false

echo '<br>';
var_dump($b); // true

echo '<br>';
var_dump($c); // true

echo '<br>';
var_dump($d); // false

echo '<br>';
var_dump(2 > 3); // false
var_dump(!(2 > 3)); // true, потому что инвертируем результат

echo '<br>';
var_dump(!'hello'); // false
var_dump(!!'hello'); // true

echo '<br>';
echo 'Привет ' . $e . '!' . PHP_EOL . 'Hello World!';

echo '<br>';
echo "Привет {$e}! Hello World!";

echo '<br>';
$h = 'Привет ';

echo $h .= $e . '!';
?>
</body>
</html>