<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Генератор паролей</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">
		
		function readInt(){
			var length = document.getElementById("userAnswer").value;
			return parseInt(length);
		}
		
		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function makeid(length){
			var length = readInt();
			var result = "";
			var characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
			var charactersLenght = characters.length;
			for(var i = 0; i < length; i++){
				result += characters.charAt(Math.floor(Math.random() * charactersLenght));
			}
			write("<b>Ваш пароль</b>:\n" + result);
		}
		
	</script>
</head>
<body>

<div class="content">
<?php
	include "menu.php"
?>

	<div class="contentWrap">
		<div class="content">
			<div class="center">
				
				<h1>Генератор паролей</h1>

				<div class="box">
					<p id="info">Введите желаемую длину пароля.</p>
					<input type="text" id="userAnswer">
					<br>
					<a href="#" onClick="makeid();" id="button">Ввод</a>
					<div id="button">
							<a href="#" onClick="history.go(0)" id="button2">Перезагрузить</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> KOOOT &copy;So Funny! Vash T.S.
</div>

</body>
</html>