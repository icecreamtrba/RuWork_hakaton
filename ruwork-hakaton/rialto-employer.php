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
		<div class="rialto-container">


		
			<div class="rialto-center">

				<div class="rialto-header"><h1>Миллионы<br>сотрудников<br>готовы помочь вам</h1></div>
				
				<div class="rialto-field">

						<div><p>ID</p></div>
						<div><p>Заголовок</p></div>
						<div><p>Описание</p></div>
						<div><p>Цена</p></div>
						<div><p>Срок выполнения</p></div>
						<div><p>Место</p></div>

				</div>

					<div class="rialto-orders">
					
						<?php $asd = mysqli_connect('localhost', 'f0805594_datadb', 'ILe4dEaD', 'f0805594_datadb');
							$employer = $_COOKIE['username'];
							$queryq = "SELECT * FROM orders ";
							$result = mysqli_query($asd, $queryq);
							
							while($order = mysqli_fetch_assoc($result)){
							?>
							<div class ="rialto-order">

								<div><p><?php print_r($order['id']);?>
								</p></div>

								<div><p><?php print_r($order['header']);?>
								</p></div>

								<div><p><?php print_r($order['order_desc']);?>
								</p></div>

								<div><p><?php print_r($order['price']);?>
								</p></div>

								<div><p><?php print_r($order['duration']);?>
								</p></div>

								<div><p><?php print_r($order['place']);?>
								</p></div>


							</div>
				
	
								<?php }	?>
						</div>
			</div>



		</div>

		</div>
		
	</main>
	<footer>
		Команда Аегис <br>
		2023г
	</footer>
</body>
</html>