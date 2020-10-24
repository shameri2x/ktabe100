<?php
ini_set('display_errors', 0);

if(!isset($req) || $req == false){
ini_set('session.cookie_httponly', true);
ini_set('session.cookie_secure', true);
session_name('__Secure-PHPSESSID');

session_start();

require_once("db.php");
require_once("data.php");
require_once("functions.php");
if(!isset($withOutProtection)){
require_once("protection.php");
}
}
?>
