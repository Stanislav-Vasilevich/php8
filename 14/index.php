<?php error_reporting(-1) ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тернарные операторы</title>
</head>
<body>
<h1>Тернарные операторы</h1>

<?php
$width = 1280;

if($width > 800) {
    echo 'desktop';
} else {
    echo 'mobile';
}

echo '<br>';

echo $width > 800 ? 'desktop' : 'mobile';
?>
</body>
</html>