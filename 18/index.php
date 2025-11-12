<?php error_reporting(-1) ?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Switch</title>
</head>
<body>
<?php
	$i = 800;

	switch ($i) {
		case 'f':
			echo '<h1>mobile XS</h1>';
			break;
		case 600:
			echo '<h1>mobile L</h1>';
			break;
		case 800:
			echo '<h1>tablet + mobile XL</h1>';
			break;
		case 1024:
			echo '<h1>tablet</h1>';
			break;
		case 1280:
			echo '<h1>notebook</h1>';
			break;
		default:
			echo '<h1>desktop</h1>';
	}

	if ($i < 414) {
		echo '<h1>mobile XS</h1>';
	} elseif ($i >= 414 && $i < 600) {
		echo '<h1>mobile L</h1>';
	} elseif ($i >= 600 && $i < 800) {
		echo '<h1>tablet + mobile XL</h1>';
	} elseif ($i >= 800 && $i < 1024) {
		echo '<h1>tablet</h1>';
	} elseif ($i >= 1024 && $i < 1280) {
		echo '<h1>notebook</h1>';
	} else {
		echo '<h1>desktop</h1>';
	}
?>
</body>
</html>
