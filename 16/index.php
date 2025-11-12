<?php error_reporting(-1) ?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Задача по циклу While</title>
	<style>
    td {
      background: antiquewhite;
    }

    tr {
      background: darkgray;
    }
	</style>
</head>
<body>
<?php
	// 1. Используя цикл while, реализуйте вывод выпадающего списка select с годами от 1900 до 2021 включительно.

	$year = 1990;

	echo "<select>";

	while ($year <= 2025) {
		echo "<option value='{$year}'>{$year}</option>";

		$year++;
	}

	echo "</select>";

	// 2. Используя цикл while, реализуйте таблицу умножения до 9.
	$tr = 1;

	echo "<table>";

	while ($tr < 10) {
		$td = 1;

		echo "<tr>";

		while ($td < 10) {
			echo "<td>$tr * $td = " . $tr * $td . "</td>";
			$td++;
		}

		echo "</tr>";

		$tr++;
	}

	echo "</table>";
?>
</body>
</html>