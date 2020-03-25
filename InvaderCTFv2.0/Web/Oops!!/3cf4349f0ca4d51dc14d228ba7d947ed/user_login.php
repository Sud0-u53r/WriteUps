<?php

session_start();
if(!isset($_SESSION['loggedin'])) {
	if (isset($_POST['username']) && isset($_POST['password'])) {
		if($_POST['username'] === 'user001' && $_POST['password'] === 'a8%&)E]G0q') {
		   	$_SESSION['loggedin'] = 'failure';
			header("Location: ./");
		} else {
			$_SESSION['wrong'] = "<script>alert('Invalid Credentials');</script>";
		}
	}
} else {
	session_unset();
	session_destroy();
}
header('Location: ./');

?>