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
$year = 1990;

echo "<select>";

while($year <= 2024) {
	echo "<option>" . $year;

	$year++;

    echo "</option>";
}

echo "</select>";
?>

<?php
$tr = 1;

echo "<table>";

while($tr <= 10) {
	$td = 1;

    echo "<tr>";

    while($td <= 10) {
        echo "<td>" . $tr * $td . "</td>";
        $td++;
    }

    echo "</tr>";

	$tr++;
}

echo "</table>";
?>
</body>
</html>