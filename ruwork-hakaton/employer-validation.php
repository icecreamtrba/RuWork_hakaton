<?php
$firstname = $_POST['firstname'];
$username = $_POST['name'];
$surname = $_POST['surname'];
$phonenumber = $_POST['number'];
$email = $_POST['email'];
$pass = $_POST['password'];
$user_description = $_POST['user_description'];

$db = mysqli_connect('localhost', 'f0805594_datadb', 'dddddd', 'f0805594_datadb');
mysqli_set_charset($db, "utf-8");

if(mysqli_connect_error()){
	echo "ПРОИЗОШЛА ОШИБКА" . mysqli_connect_error();
} else {
	echo "бд подключена!";
}

$query = "INSERT INTO users (firstname, username, surname, phonenumber, email, pass, user_description, user_role) VALUE ('$firstname', '$username', '$surname', '$phonenumber', '$email', '$pass','$user_description','employer')";
$query_connect = mysqli_query($db, $query);
header('Location: login.php');
?>