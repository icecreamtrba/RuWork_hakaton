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
	<script src="https://unpkg.com/imask"></script>
	<title>Вход</title>
</head>

<body>

	<header>
		<div class="header-logo"><a href="index.php">RuWork</a></div>
			<nav>
				<ul>
						<?php if(!isset($_COOKIE['username'])){ ?>
						<li><a href="login.php">Вход</a></li>
						<?php } elseif(isset($_COOKIE['username'])) {?>
							<li><a href="rialto.html">Биржа</a></li>
							<li><a href="profile.php">Привет, <?php echo $_COOKIE['username']?>!</a></li>
							<li><a href="exit.php">Выход</a></li>
						<?php }?>
					</ul>
			</nav>
	</header>


	<main>
		<div class="login-container">
			<div class="login-box">
				<h1>Авторизация</h1>
				<form action="autorization.php" method="POST" class="login-form">
						<input type="text" placeholder="Номер телефона" name="phonenumber" class="input-fields" data-mask="phone">
						<input type="password" placeholder="Пароль" name="password" class="input-fields">
						<div class="registration-buttons">
							<div class="background-button-container"><a class="button-gray" href="index.php">Не зарегистрированы?</a></div>
							<div class="background-button-container"><input type="submit" class="button-green" value="Авторизоваться"></div>
						</div>
				</form>
			</div>
		</div>
	</main>

<script>
	document.addEventListener('DOMContentLoaded', () => {
	const mask = (dataValue, options) => {
	const elements = document.querySelectorAll(`[data-mask="${dataValue}"]`) 
	if (!elements) return 

	elements.forEach(el => { 
		IMask(el, options) 
	})
}

mask('phone', {
	mask: '{7}0000000000'
})
})
</script>

	<footer>
		Команда Аегис <br>
		2023г
	</footer>
</body>
</html>