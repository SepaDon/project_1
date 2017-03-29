<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Личный сайт</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	
	<header>
		<a href="#" class="link">Главная</a>
		<a href="#" class="link">Фото</a>
		<a href="#" class="link">Информация</a>
	</header>
	
	
	<div class="content">
		<h1>Личный сайт</h1>
		<img src="photo.jpg" alt="Фотография пользователя">

		<p class="inf">Добрый день. <br>Меня зовут <b>Ященко Сергей</b>. <br><i>Начинающий программист.</i> Начал путь совсем недавно, но полон амбиций и желания работать.</p>
		
	</div>
		

	<footer>
		<?php 
			echo date("d.m.Y");
		?>
	</footer>
	
</body>

</html>

