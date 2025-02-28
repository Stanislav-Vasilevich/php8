<?php error_reporting(-1) ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>5 урок</title>
</head>
<body>
<h1>Константы</h1>
<?php
define('PI', 3.14);
const NAME = 'Stanislav';
echo PI;
echo '<br>';
echo NAME;
echo '<br>';
echo "Hello " . NAME;
// define('PI', 3.2); error
echo '<br>';
var_dump(get_defined_constants()); // получить все константы(лучше читать в исходном коде в виде списка)
?>
</body>
</html>