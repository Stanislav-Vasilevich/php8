<?php error_reporting(-1) ?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Урок 7</title>
</head>
<body>
<h1>Строки. </h1>

<?php
	$str = '8(935)354-54-45';
	$str_long = <<<HEREDOC
Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab accusantium, ad aliquam atque cumque ea et exercitationem expedita fugiat iure odio possimus quae <a href="#">$str</a> quisquam ratione sit tempora? Labore libero quis recusandae saepe sint. Accusamus at commodi culpa cumque deleniti deserunt dolor eligendi excepturi hic, in iusto natus nemo optio perspiciatis quam? Aliquid commodi corporis dolores ea earum eius expedita explicabo facilis illo incidunt ipsa labore odit quia, quod, quos repellat rerum vitae voluptas. Aliquam deleniti dolore ea eveniet facilis illum magni molestias porro possimus quidem, quisquam repudiandae sunt suscipit temporibus voluptatem. Commodi cupiditate deserunt, fugiat fugit minus reprehenderit veniam?
Пример использования слеша \ и \\
HEREDOC;

	$str2 = <<<"EOT"
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab accusantium, ad aliquam atque cumque ea et exercitationem expedita fugiat iure odio possimus quae <a href="#">$str</a> quisquam ratione sit tempora? Labore libero quis recusandae saepe sint. Accusamus at commodi culpa cumque deleniti deserunt dolor eligendi excepturi hic, in iusto natus nemo optio perspiciatis quam? Aliquid commodi corporis dolores ea earum eius expedita explicabo facilis illo incidunt ipsa labore odit quia, quod, quos repellat rerum vitae voluptas. Aliquam deleniti dolore ea eveniet facilis illum magni molestias porro possimus quidem, quisquam repudiandae sunt suscipit temporibus voluptatem. Commodi cupiditate deserunt, fugiat fugit minus reprehenderit veniam?<div>
EOT;


	echo "<a href='#'>$str</a>";
	echo PHP_EOL;
	echo "<a href='#'>$str</a>";
	echo PHP_EOL;
	echo "<a href='#'>$str</a>";
	echo PHP_EOL;
	echo "<p>$str_long</p>";
	echo PHP_EOL;
	echo "<p>$str2</p>";
	echo PHP_EOL;
	echo var_dump((string)123);
	echo PHP_EOL;
	echo "<p>Hello \\2</p>"; // Hello \2 (символ экранируется, поэтому ставим два символа \\)
?>

</body>
</html>