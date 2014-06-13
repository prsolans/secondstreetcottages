<?php
require_once("../master/config/config.php");
?>
<?php
if (isset($_POST['submit'])) {
	$errorhandler = "";
	if ($username == "") {
	$errorhandler .= "Username was left blank.<br />";
	}
	if ($password == "") {
	$errorhandler .= "Password was left blank.<br />";	
	}
	if ($errorhandler != "") {
	echo "<span style=\"color:red\">";
	echo $errorhandler;
	echo "</span>";
	}
	if ($errorhandler == "") {
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string(md5($_POST['password']));
		$select = "SELECT * FROM admin WHERE username = '$username' AND password = '$password';";
		$query = mysql_query($select);
		if ($row = mysql_fetch_array($query)) {
		$_SESSION['controller'] = true;
		$_SESSION['username'] = $username;
			header("Location: /admin/controlpanel.php");
		}else {
			echo "You are not correctly logged in please try again.<br />";;
		}
	}
}
?>
