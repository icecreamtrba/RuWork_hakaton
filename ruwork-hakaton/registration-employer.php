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
	<title>Регистрация заказчика</title>
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
						<li><a href="rialto-employer.php">Биржа</a></li>
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
		<div class="registration-container">
			<div class="registration-box">
				<h1>Регистрация <br>заказчика</h1>
				<form action="employer-validation.php" method="post">
					<div class="inputs-container">
						<div class="left-inputs">
							<input type="text" required maxlength="30" placeholder="Фамилия" name="firstname" class="input-fields">
							<input type="text" required maxlength="30" placeholder="Имя" name="name" class="input-fields">
							<input type="text" required maxlength="30" placeholder="Отчество" name="surname" class="input-fields">
						</div>
						<div class="right-inputs">
							<input type="text" required maxlength="30" placeholder="Номер телефона" name="number" class="input-fields" data-mask="phone">
							<input type="text" required maxlength="30" placeholder="e-mail" name="email" class="input-fields">
							<input type="password" required maxlength="30" placeholder="Пароль" name="password" class="input-fields">
						</div>
					</div>
					<div class="input-description">
						<textarea name="user_description" id="message-field" cols="50" rows="5" placeholder="Краткое описание"></textarea>
					</div>
						<div class="registration-buttons">
							<div class="background-button-container"><input type="reset" class="button-red"></div>
							<div class="background-button-container"><input type="submit" class="button-green" value="Зарегистрироваться"></div>
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