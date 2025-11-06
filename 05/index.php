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
  echo '<br>';
  echo PI;
  echo '<br>';
  echo NAME;
  echo '<br>';
  echo "Hello " . NAME;
  echo '<br>';
  // define('PI', 3.2); // выдаст error при компиляции
  echo '<pre>' . print_r(get_defined_constants(true), 1) . '</pre>'; // получить все константы (лучше читать в исходном коде в виде списка)
?>
</body>
</html>