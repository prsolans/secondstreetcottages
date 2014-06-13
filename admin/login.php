<?php
require_once("../master/config/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="../master/css/admin.css" type="text/css" media="screen" />
<?php
include($docroot . "/master/includes/meta.inc.php");
?>
</head>
<body>
<div id="wrapper">
	<h1>Control Panel Administrative Access</h1>
	<p>Thank you for coming.  Please sign in to access the administrative options.</p>
	<div id="style">
	<form name="login" id="login" action="/admin/admin.php" 
	method="post">
	<label for="username">Username:</label>
	<input name="username" id="username" type="text" maxlength="25" />
	<label for="password">Password:</label>
	<input name="password" id="password" type="password" maxlength="75" />
	<input name="submit" id="submit" type="submit" value="Login" />
	</form>
	</div>
</div>
</body>
</html>