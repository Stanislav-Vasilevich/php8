<?php error_reporting(-1) ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foreach</title>
</head>
<body>
<?php
$array = ['one', 'two', 'three'];

$i = 0;

while($i <= 2) {
	echo $array[$i] . '<br>';

	$i++;
}

for($i = 0; $i < 2; $i++) {
	echo $array[$i] . '<br>';
}

echo '<br>';

foreach ($array as $item) {
	echo $item . '<br>';
}

echo '<br>';

foreach ($array as $k => $v) {
    echo 'Key: ' . $k . ', value: ' . $v . '<br>';
}

echo '<br>';

$array_users = [
	[
		'name' => 'Oleg',
		'first_name' => 'Sobolev',
	],
	[
		'name' => 'Stanislav',
		'first_name' => 'Vasilevich',
	],
];

foreach ($array_users as $user) {
    echo "Пользователь: {$user['name']} {$user['first_name']} <br>";
}

echo '<pre>' . print_r($array_users, 1) . '</pre>' . '<br>';

foreach ($array_users as &$user) {
    $user['age'] = '22';

    echo '<pre>' . print_r($array_users, 1) . '</pre>' . '<br>';
}

echo '<pre>' . print_r($array_users, 1) . '</pre>';
?>
</body>
</html>
