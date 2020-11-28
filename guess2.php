<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Угадайка на двоих</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

var answer = parseInt(Math.random() * 100);
var tryCount = 0;
var maxTryCount = 20;

function readInt(playerAnswer){
    var number = document.getElementById(playerAnswer).value;
    return parseInt(number);
}

function write(text){
    document.getElementById("info").innerHTML = text;
    document.getElementById("info2").innerHTML = "Игрок №2";

}

function hide(id){
    document.getElementById(id).style.display = "none";
}

function guess(){
    tryCount++;

    var userAnswer = readInt("userAnswer");
    var userAnswer2 = readInt("userAnswer2");
    if(userAnswer == answer){
        write("<b>Поздравляю, угадал игрок №1!</b><br>Правильный ответ" + answer);
        hide("button");
        hide("userAnswer");
        hide("info2");
        hide("userAnswer2");
    } else if(userAnswer2 == answer){
        write("<b>Поздравляю, угадал игрок №2!</b><br>Правильный ответ " + answer);
        hide("button");
        hide("userAnswer");
        hide("info2");
        hide("userAnswer2");
    } else if(tryCount >= maxTryCount){
        write("Вы проиграли<br>Правильный ответ: " + answer);
        hide("button");
        hide("userAnswer");
        hide("info2");
        hide("userAnswer2");
    } else if(userAnswer > answer && userAnswer2 > answer){
        write("Вы оба ввели слишком большое число<br>Попробуйте снова. Введите число от 1 до 100<br><br>Игрок №1");
    } else if(userAnswer < answer && userAnswer2 < answer){
        write("Вы оба ввели слишком маленькое число<br>Попробуйте снова. Введите число от 1 до 100<br><br>Игрок №1");             
    } else{
        write("Истина где-то рядом. Если быть точнее, то между вашими ответами. <br>Попробуйте снова<br><br>Игрок №1");
    }
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

				<h1>Игра угадайка для 2х игроков</h1>

				<div class="box">

					<p id="info">Угадайте число от 0 до 100. Игрок №1</p>
	        		<input type="text" id="userAnswer">

	        		<p id="info2">Угадайте число от 0 до 100. Игрок №2</p>
	        		<input type="text" id="userAnswer2">
			        <br>
	        		<a href="#" onClick="guess();" id="button">Начать</a>
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
<div>


</body>
</html>