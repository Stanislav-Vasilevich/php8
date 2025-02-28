<?php error_reporting(-1) ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Цикл while</title>
</head>
<body>
<h1>Циклы</h1>

<?php
$num = 1;
$tr = 1;

while ($num <= 10) {
    // echo $num . '<br>';
    $num++;
}

echo '<table border="1" width="100%">';

while ($tr <= 10) {
    echo "<tr>";
	$td = 1;

	while ($td <= 20) {
        echo "<td>{$td}</td>";
        $td++;
	}

    echo "</tr>";

	$tr++;
}

echo '</table>';
?>
</body>
</html>