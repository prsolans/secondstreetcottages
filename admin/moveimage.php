<?php
require_once("../master/config/config.php");
?>
<?php
// This page below get's a little hairy
if ($_SESSION['controller'] == true) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include($docroot . "/master/includes/meta.inc.php");
?>
<link rel="stylesheet" href="../master/css/admin.css" type="text/css" media="screen" />
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
<h1>Edit Image Information</h1>
<hr />
<?php
$image = mysql_real_escape_string($_GET['image']);
$property = mysql_real_escape_string($_GET['prop']);

$update = "UPDATE images SET propertynumber = '$property' WHERE filename = '$image';";
if (mysql_query($update)) {
	echo "$image<br/>$property<br/>The image was moved.<br /><br/><a href='editimageinfo.php'>Back to the images</a>";
}else {
	echo "";
	echo "There was a Problem changing the image from enabled to disabled.<br />";
}
?>
<hr />
</div>
</body>
</html>
<?php
}else {
header("Location: login.php");
}
?>