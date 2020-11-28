<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Главная</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
<?php
	include "menu.php"
?>

	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
		<img src="img/photo3.png">
		<div class="box_text">
			<p><b>Добрый день</b>. Меня зовут <i>Гусев Алексей</i>. Я совсем недавно начал программировать, однако уже написал свой первый сайт.</p>

			<p>В этом мне помог IT-портал <a href="https://geekbrains.ru" target="_blank">GeekBrains</a></p>

			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написал: <br>
			<a href="index.php">Главная,</a>
			<a href="puzzle.php">Загадки,</a>
			<a href="guess.php">Угадайка</a>
			<a href="guess2.php">Угадайка мультиплеер</a>
			</p>
		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> KOOOT &copy;So Funny! Vash T.S.
<div>


</body>
</html>