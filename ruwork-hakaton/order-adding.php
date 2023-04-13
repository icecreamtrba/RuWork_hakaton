<?php
$employer = $_COOKIE['username'];
$header = $_POST['header'];
$order_desc = $_POST['order_desc'];
$price = $_POST['price'];
$duration = $_POST['duration'];
$place = $_POST['place'];

$db = mysqli_connect('localhost', 'f0805594_datadb', 'dddddd', 'f0805594_datadb');


if(mysqli_connect_error()){
	echo "ПРОИЗОШЛА ОШИБКА" . mysqli_connect_error();
} else {
	echo "бд подключена!";
}

$query = "INSERT INTO `orders` (employer, header, order_desc, price, duration, place) VALUE ('$employer', '$header', '$order_desc', '$price', '$duration', '$place')";
$query_connect = mysqli_query($db, $query);
header('Location: profile-employer.php');
?>
