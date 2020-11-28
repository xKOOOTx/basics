<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Загадки</title>
	<link rel="stylesheet" href="style.css"> 
	
</head>
<body>

<div class="content">
<?php
	include "menu.php"
?>

	<div class="contentWrap">
	    <div class="content">
	        <div class="center">

				<h1>Игра в загадки</h1>

				<div class="box">

					<?php

						if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])){
							$userAnswer1 = $_GET["userAnswer1"];
							$score = 0;
							if($userAnswer1 == "кузнечик" || $userAnswer1 == "кузнец"){
								$score++;
							}

							$userAnswer2 = $_GET["userAnswer2"];
							if($userAnswer2 == "лиса" || $userAnswer2 == "лисичка"){
								$score++;
							}

							$userAnswer3 = $_GET["userAnswer3"];
							if($userAnswer3 == "кот" || $userAnswer3 == "кошка"){
								$score++;
							}

							echo "Вы угадали " . $score . " загадок.";
						}
						
					?>

					<form method="GET">
						<p>На лугу живет скрипач, носит фрак и ходит вскачь.</p>
						<input type="text" name="userAnswer1">

						<p>Рыжая, с пушистым хвостом, живет в лесу под кустом.</p>
						<input type="text" name="userAnswer2">

						<p>Ночью не спит, мышей сторожит.</p>
						<input type="text" name="userAnswer3">

						<br>
						<input type="submit" value="Ответить" name="">
					</form>
				</div>
	        </div>
	    </div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> KOOOT &copy;So Funny! Vash T.S.
<div>

</body>
</html>