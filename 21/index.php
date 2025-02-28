<?php error_reporting(-1) ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Массивы</title>
</head>
<body>
<?php
$array = [
	1 => 'one',
	'two',
	'three'
];

$arr = array('Masha', 'Viktoria', 'Aleksey');

var_dump($array);

echo '<br>';
echo '<pre>' . print_r($arr[0], true) . '</pre>';
echo '<pre>' . var_dump($arr[1]) . '</pre>';
echo($arr[2]);
echo '<pre>' . print_r($arr, 1) . '</pre>';

$arr[] = 'Egor';

echo '<pre>' . print_r($arr, 1) . '</pre>';
echo '<pre>' . print_r($array, 1) . '</pre>';

$array_users = [
	[
            'name' => 'Oleg',
            'first_name' => 'Sobolev'
    ],
	[
            'name' => 'Stanislav',
            'first_name' => 'Vasilevich'
    ],
];

echo '<pre>' . print_r($array_users, 1) . '</pre>';
?>
</body>
</html>
