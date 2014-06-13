<?php
require_once("../master/config/config.php");
?>
<?php
if ($_SESSION['controller'] == true) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include($docroot . "/master/includes/meta.inc.php");
?>
</head>
<body id="adminbody">
<?php
// include administration header
include($docroot . "/master/includes/header.admin.inc.php");
?>
<?php
// include administration left navigation
include($docroot . "/master/includes/leftnav.admin.inc.php");
?>
<div id="adminrightcolumn">
<?php
// This is testing for the form being submitted
// this entire island of programming is what happen's after they submit the form
// if they username from the form was set
if (isset($_POST['done'])) {
// setup error handler
	$errorhandler = "";
	// test all fields, make sure there filled in
	if ($_POST['username'] == "") {
		$errorhandler .= "Username was left blank.<br />";
	}
	if ($_POST['password'] == "") {
		$errorhandler .= "Password was left blank.<br />";	
	}
	if ($_POST['email'] == "") {
		$errorhandler .= "Email was left blank.<br />";
	}
	// if not return error
	if ($errorhandler != "") {
		echo "<span style=\"color:red\">";
		echo $errorhandler;
		echo "</span>";
	}
	// if error doesn't exist do the updating
	if ($errorhandler == "") {
	// clean variables before entering into db
		$email = mysql_real_escape_string($_POST['email']);
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string(md5($_POST['password']));
		$update = "UPDATE admin SET username = '$username', password = '$password',
		email = '$email';";
		if (mysql_query($update)) {
			echo "The database was successfully update.<br />";	
		}else {
			echo "There was a problem updating your information.<br />";	
		} 
	}
}
?>
<?php
// get user information based on stored session
$selectuser = "SELECT * FROM admin WHERE username = '$_SESSION[username]';";
$queryuser = mysql_query($selectuser);
if ($rowuser = mysql_fetch_array($queryuser)) {
// if record found display there user information for editing
?>
<h1>Welcome to control panel</h1>
<p>The information you put in here will change the information on your account, including the password.  You have to fill in all fields.  If you are not wanting to change one of the field's then just enter the value you already had in it, or it will already be filled in. You either need to enter a new password or old password.</p>
<form name="edit" id="edit" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<label for="email">Email</label><br />
<input name="email" id="email" type="text" value="<?php echo $rowuser['email']; ?>" /><br />
<label for="username">Username:</label><br />
<input name="username" id="username" type="text" value="<?php echo $rowuser['username']; ?>" /><br />
<label for="password">Password:</label><br />
<input name="password" id="password" type="password" value="" /><br />
<?php
// the next form field is simply a hidden value so we can test to make sure the
// form was submitted later on
?>
<input name="done" id="done" type="hidden" value="yes" />
<input name="submit" id="submit" type="submit" value="Update" />
</form>
<?php
// if it was not found spit out some form of error
// possibly have it email someone technical information if you want
}else {
echo "There was an error reading your admin information.";
}
?>
</div>
</body>
</html>
<?php
}else {
header("Location: login.php");
}
?>