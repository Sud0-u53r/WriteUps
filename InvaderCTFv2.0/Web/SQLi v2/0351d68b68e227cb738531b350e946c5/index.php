<?php

error_reporting(0);
include "./config.php";
/*  FLAG is somewhere in the backend!  */

function EXOR($str1, $str2) {		// Just a normal XOR, cause I know you know some tools ;)
	$res = '';
	for ($i=0; $i < strlen($str1); $i++) { 
		$res .= chr( ord($str1[$i]) ^ ord($str2[$i % strlen($str2)]) );
	}
	return $res;
}
$key = $_SERVER['SERVER_NAME'];

if(isset($_GET['name'])) $uname = $_GET['name'];
else $uname = EXOR('guest', $key);

if(isset($_GET['pass'])) $pass = $_GET['pass'];
else $pass = '';

$enc_uname = EXOR($uname, $key);

$query = "SELECT username, password FROM users WHERE username = '$enc_uname'";
echo '<h3>'.$query.'</h3>';
$res = mysqli_query($conn, $query);
// print_r($conn);
if ($res && mysqli_num_rows($res) === 1) {
	$arr = @mysqli_fetch_array($res, MYSQLI_ASSOC);
	if ($arr['password'] === md5($pass)) {
		echo '<h1>Welcome User!</h1>';
	}
}

highlight_file(__FILE__);

?>
