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
	<title>Профиль</title>
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
		<div class="container-profile">
		
			<div class="card-container">
				<div class="card">
				<div class="card-left"><img src="img/photo.png" alt="photo"></div>
					<div class="card-right">
						<p><?php echo $_COOKIE['firstname']?></p>
						<p><?php echo $_COOKIE['username']?></p>
						<p><?php echo $_COOKIE['surname']?></p>
					</div>
				</div>
					<div class="card-bottom">
					<p><?php echo $_COOKIE['phonenumber']?></p>
					<p><?php echo $_COOKIE['email']?></p>
					<p><?php echo $_COOKIE['user_desc']?></p>
					<a href="order.php">Заказать услугу</a>
					</div>
			</div>
			<div class="container-order">

					<div class="orderbutton">
						<h1>Заказанные услуги</h1>
					</div>

					<div class="orderlist">
					<?php $asd = mysqli_connect('localhost', 'f0805594_datadb', 'dddddd', 'f0805594_datadb');
							$employer = $_COOKIE['username'];
							$queryq = "SELECT * FROM orders WHERE employer = '$employer'";
							$result = mysqli_query($asd, $queryq);
							?>
							<div class ="fields">
								<div>Заголовок</div>
								<div>Описание</div>
								<div>Цена (в руб)</div>
								<div>Срок выполнения</div>
								<div>Место</div>
							</div>
							<?php
							while($order = mysqli_fetch_assoc($result)){
							?>
							<div class="orderitem">


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
		
	</main>
	<footer>
		Команда Аегис <br>
		2023г
	</footer>
</body>
</html>