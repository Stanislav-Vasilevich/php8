<?php error_reporting(-1) ?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Пользовательские функции часть 2</title>
</head>
<body>
<?php
function sum(...$nums): void
{
	static $res = 0;

    foreach ($nums as $num) {
        $res += $num;
    }

    echo $res . '<br>';
}

sum(1, 2, 3, 4, 5);

function test(): void
{
    static $a = 0;
    echo $a . '<br>';
    $a++;
}

test();
test();
test();

function sum_int(int $a, int $b, int $c): void
{
    echo $a + $b + $c . '<br>';
}

sum_int(2, 3.5, 5);

function sum_hi(int $a, int $b, int $c): int
{
    $res = $a + $b + $c;
    echo $res;
	return $res;
}

sum_hi(3, 3, 5);

echo '<br>';

function name_argument($text, $name) {
    return $text . ' ' . $name . '!';
}

echo name_argument(name: 'Stanislav', text: 'Hello');
?>
</body>
</html>
