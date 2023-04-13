<?php
switch($_COOKIE['user_role']){

	case 'employer':
		echo "employer";
	break;
	
	case 'worker':
		echo "worker";
	break;

}