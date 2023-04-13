<?php
	$phonenumber = $_POST['phonenumber'];
	$password = $_POST['password'];

	$connection = mysqli_connect('localhost', 'f0805594_datadb', 'dddddd', 'f0805594_datadb');
	$query = "SELECT * FROM users WHERE phonenumber = '$phonenumber' AND pass = '$password'";
	$query_connect = mysqli_query($connection, $query);

	$user = mysqli_fetch_assoc($query_connect);
	print_r($user);
	if(is_null($user)){
		header('Location: login.php');
	}
	else{
		setcookie( 'username', $user['username'], time() + 3600, "/");
		setcookie( 'pass', $user['pass'], time() + 3600, "/");
		setcookie( 'email', $user['email'], time() + 3600, "/");
		setcookie( 'phonenumber', $user['phonenumber'], time() + 3600, "/");
		setcookie( 'firstname', $user['firstname'], time() + 3600, "/");
		setcookie( 'surname', $user['surname'], time() + 3600, "/");
		setcookie( 'user_desc', $user['user_description'], time() + 3600, "/");
		setcookie( 'user_role', $user['user_role'], time() + 3600, "/");
		header('Location: index.php');
	}

?>