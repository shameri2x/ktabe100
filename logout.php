<?php
if (session_status() == PHP_SESSION_NONE) {
ini_set('session.cookie_httponly', true);
ini_set('session.cookie_secure', true);
session_name('__Secure-PHPSESSID');
	session_start();
}

if(isset($_SESSION['memberId:rpg'])){

	session_unset();
	session_destroy();
	exit(header("Refresh:0; url=index.php"));

}else{
	exit(header("Refresh:0; url=index.php"));
}






?>
