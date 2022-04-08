<?php
// DATA SNACK 1
$array_partite = [
	[
		'casa' => [
			'nome' => 'Olimpia Milano',
			'punteggio' => 148
		],
		'ospite' => [
			'nome' => 'Reyer Venezia',
			'punteggio' => 145
		],
	],
	[
		'casa' => [
			'nome' => 'Dinamo Sassari',
			'punteggio' => 121
		],
		'ospite' => [
			'nome' => 'Virtus Bologna',
			'punteggio' => 118
		],
	],
];
?>
<!DOCTYPE html>
<html lang="it">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Snacks b1</title>
	<!-- Link css -->
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<section id="snack_1">
		<h1>Snack 1</h1>
		<div class="subtitle">
			Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
		</div>

		<?php
		for ($_i = 0; $_i < count($array_partite); $_i++) { ?>
			<div class="text">
				<span><?= $array_partite[$_i]['casa']['nome'] ?></span> -
				<span><?= $array_partite[$_i]['ospite']['nome'] ?></span>
				<span><?= $array_partite[$_i]['casa']['punteggio'] ?></span> -
				<span><?= $array_partite[$_i]['ospite']['punteggio'] ?></span>
			</div>
		<?php
		}
		?>
	</section>

	<section id="snack_2">
		<h1>Snack 2</h1>
		<div class="subtitle">
			Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.
		</div>

		<form action="" method="GET">
			<label for="inp_name">Nome</label>
			<input type="text" name="name" id="inp_name">
			<label for="inp_email">Email</label>
			<input type="text" name="email" id="inp_email">
			<label for="inp_age">Età</label>
			<input type="text" name="age" id="inp_age">
			<button>Verifica</button>
		</form>

		<?php
		if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])) {

			$name = $_GET['name'];
			$email = $_GET['email'];
			$age = $_GET['age'];
			$snail_pos = strpos($email, '@');

			if ((strlen($name) > 3) && ($snail_pos !== false && strpos($email, '.', $snail_pos) !== false) && (is_numeric($age))) {
				echo '<div class="red">Accesso acconsentito</div>';
			} else {
				echo '<div class="red">Accesso negato</div>';
			}
		}
		?>
	</section>

	<section id="snack_4">
		<h1>Snack 4</h1>
		<div class="subtitle">
			Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
		</div>
		<?php
		$arr_numbers = [];
		while (count($arr_numbers) <= 15) {
			$rand_numb = rand(1, 20);
			if (!in_array($rand_numb, $arr_numbers)) {
				$arr_numbers[] = $rand_numb;
			}
		};
		var_dump($arr_numbers);
		?>
	</section>

	<section id="snack_5">
		<h1>Snack 5</h1>
		<div class="subtitle">
			Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
		</div>

		<?php
		$text = 'Sed gravida sapien sit amet turpis volutpat feugiat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent posuere massa metus, ac mattis purus semper et. Quisque non turpis a enim fringilla varius. Ut dictum, turpis sed scelerisque malesuada, velit nulla auctor ante, nec blandit libero nisl quis justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque vestibulum luctus turpis, nec ornare eros semper bibendum. Quisque a commodo odio, at semper dolor. Morbi nec rhoncus ligula, et euismod ante. Fusce eget elit vel felis lobortis mattis nec sed est. Fusce in nulla eget massa scelerisque ultrices. Aliquam dignissim elit non placerat gravida. Morbi fringilla ipsum vitae metus sodales, at sollicitudin erat tempor.';

		echo "<div class=\"text\">$text</div>";

		$arr_paragraphs = explode('.', $text);
		var_dump($arr_paragraphs);
		?>

	</section>
</body>

</html>