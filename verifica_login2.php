<?php
session_start();
if(!$_SESSION['usuario_adm']) {
	header('Location: login_adm.php');
	exit();
}
?>
