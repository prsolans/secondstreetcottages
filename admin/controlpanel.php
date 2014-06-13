<?php
require_once("../master/config/config.php");
?>
<?php
if ($_SESSION['controller'] == true) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="../master/css/admin.css" type="text/css" media="screen" />
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
<h1>Welcome to control panel</h1>
<p>Welcome to the administrative panel. 
<ul><li><a href="adminreserves.php">Reservation Calendars</a></li><li><a href="editimageinfo.php">Image Reviewer</a></li></ul></p>
</div>
</body>
</html>
<?php
}else {
header("Location: login.php");
}
?>