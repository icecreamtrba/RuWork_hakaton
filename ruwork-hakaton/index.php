<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Roboto+Serif:wght@500&display=swap" rel="stylesheet">
	<title>Главная</title>
</head>
<body>
	<header>
		<div class="header-logo"><a href="index.php">RuWork</a></div>
			<nav>
				<ul>
					<?php if(!isset($_COOKIE['username'])){ ?>
					<li><a href="login.php">Вход</a></li>
					<?php } else { ?>
						<li><a href="exit.php">Выход</a></li>
					<?php  ?> 

						<?php switch($_COOKIE['user_role']) {
						case "employer": ?>
						<li><a href="profile-employer.php">Привет, <?php echo $_COOKIE['username']?>!</a></li>
						
					<?php break; case "worker": ?>
						<li><a href="rialto-worker.php">Биржа</a></li>
						<li><a href="profile-worker.php">Привет, <?php echo $_COOKIE['username']?>!</a></li>
					<?php break; } ?>

					<?php }?>
					
					
				</ul>
			</nav>
	</header>
	<main>
		<div class="container">


			<div class="aside">
				<div class="image-container"><img src="img/shield.png" alt="shield"></div>
				<span><h2>Гарантия выплаты</h2></span>
				<span><p>100% оплата работы, если работа выполнена качественно и в срок</p></span>
				<div class="image-container"><img src="img/wallet.png" alt="shield"></div>
				<span><h2>Удобные способы оплаты</h2></span>
				<span><p>Мы поддерживаем такие способы оплаты, как: карты, банковские переводы</p></span>
			</div>


			<div class="center">
				<span><h1>Миллионы<br>сотрудников<br>готовы помочь Вам</h1></span>
				<div class="button-container"><div class="button"><a href="registration-employer.php">Я - заказчик</a></div></div>
				<div class="button-container"><div class="button-frilance"><a href="registration-worker.php">Я - фрилансер!</a></div></div>
			</div>


			<div class="aside">
				<div class="image-container"><img src="img/shakinghands.png" alt="hands"></div>
				<span><h2>Доверие заказчиков</h2></span>
				<span><p>Заказчики больше доверяют фрилансерам, которые работают через безопасную сделку</p></span>
				<div class="image-container"><img src="img/tax.png" alt="tax"></div>
				<span><h2>Без комиссий</h2></span>
				<span><p>С заказчиков больше не берётся процент от сделок</p></span>
			</div>

		
		</div>
		
	</main>
	<footer>
		Команда Аегис <br>
		2023г
	</footer>
</body>
</html>