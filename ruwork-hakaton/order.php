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
	<title>Заказ</title>
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
		<div class="order-container">
						

			<div class="center-order">
				<form action="order-adding.php" method="post">

					<h2 class="order-h2">Заголовок заказа</h2>	
					<input required class="order-input" placeholder="Кратко опишите тему задачи" name="header">
					
					<h2 class="order-h2">Описание задачи</h2>	
					<input required class="order-input" placeholder="Опишите задачу" name="order_desc">
					
					<h2 class="order-h2">Оплата</h2>	
					<input required class="order-input" placeholder="Введите цену за выполнение заказа (в рублях)" name="price">

					<h2 class="order-h2">Срок выполнения заказа (дней)</h2>	
					<input required class="order-input" placeholder="Введите срок выполнения" name="duration">
					
					<h2 class="order-h2">Место выполнения заказа</h2>	
					<input required class="order-input" placeholder="Укажите место выполнения" name="place">

					<input type="submit" value="Заказать" class="order-submit-button">
				</form>
			</div>
		</div>
		
	</main>
	<footer>
		Команда Аегис <br>
		2023г
	</footer>
</script>
</body>
</html>