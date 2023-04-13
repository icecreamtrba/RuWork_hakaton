<?php
		setcookie( 'username', $user['username'], time() - 3600, "/");
		header('Location: index.php'); 
?>