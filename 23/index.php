<?php error_reporting(-1);

// 1 homeworks
$nums = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for ($i = 0; $i < 10; $i++) {
	if ($nums[$i] % 2 !== 0) {
		continue;
	} else {
		echo $nums[$i] . '<br>';
	}
}

echo '<br>';

for ($i = 0; $i < 10; $i++) {
	if ($nums[$i] % 2 === 0) {
		echo $nums[$i] . '<br>';
	}
}

// 2 homeworks
$goods = [
	[
		'title' => 'Nokia',
		'price' => '100',
		'qty' => '10',
	],
	[
		'title' => 'Sony',
		'price' => '120',
		'qty' => '7',
	],
	[
		'title' => 'LG',
		'price' => '105',
		'qty' => '15',
	],
];

$goods2 = [
	[
		'title' => 'Nokia',
		'price' => '100',
		'qty' => '10',
	],
	[
		'title' => 'Sony',
		'price' => '120',
		'qty' => '7',
	],
	[
		'title' => 'LG',
		'price' => '105',
		'qty' => '15',
	],
];

for ($i = 0; $i < count($goods); $i++) {
	if ($goods[$i]['price'] < 120) {
		$goods[$i]['price'] += 15;

		echo '<pre>' . print_r($goods[$i], 1) . '</pre>';
	}
}

echo '<hr>';

foreach ($goods2 as $good) {
	if ($good['price'] < 120) {
		$good['price'] += 15;

		echo '<pre>' . print_r($good, 1) . '</pre>';
	}
}
