<?php
session_start();
$_SESSION = NULL;
if(!empty($_COOKIE[session_name()])){
	setcookie(session_name(), "", time() - 42000);
}
session_destroy();
header('Location:../public/login.php');

?>
