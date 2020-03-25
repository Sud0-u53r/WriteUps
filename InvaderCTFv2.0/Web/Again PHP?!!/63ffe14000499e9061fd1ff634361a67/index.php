<?php 
error_reporting(0);
include "./config.php";

$_ = $_SERVER['QUERY_STRING'];
if(isset($_GET['give_me']) && $_GET['give_me'] === 'FLAG') {
	if(substr_count($_, 'give_me') === 0) echo $flag1;
	else die("GTFO");
}

class U {
	public $n, $t = 'u', $f;
	function __construct($uname) {
		$this -> n = $uname;
	}
	function getFlag() {
		global $flag2;
		$this -> f = $flag2;
		if ($this -> t === 'a') echo $this -> n;
		else die("Naah! Try again.");
	}
}

if(isset($_GET['object']) && strlen($_GET['object'] < _MAX_LENGTH_)) { // Just a random length limit for safety >_<
	$current_user = @unserialize($_GET['object']);
	if ($current_user) $current_user -> getFlag();
}

echo "<br>";
if (isset($_GET['source'])) highlight_file(__FILE__);
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Everywhere!</title>
</head>
<body>
	<!-- /?source -->
	<h2>Nothing here!</h2>
</body>
</html>