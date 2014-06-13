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
<h1>Edit Image Information</h1>
<hr />
<?php
$id = mysql_real_escape_string($_GET['id']);
$propid = mysql_real_escape_string($_GET['prop']);
$select = "SELECT * FROM properties WHERE propertynumber = '$propid';";
$query = mysql_query($select);
if ($row = mysql_fetch_array($query)) {
	//if ($row['enabled'] == "yes") {
		$update = "UPDATE images SET enabled = 'yes' WHERE imageid = '$id';";
		if (mysql_query($update)) {
			echo "The image was changed from disabled to enabled.<br /><br /><a href='editimageinfo.php'>Back to the images</a>";
		}else {
			echo "There was a Problem changing the image from disabled to enabled.<br />";
		}
	/*}else {
		echo "You cannot set an image to enabled when the property is disabled.<br />";
		echo "Please go and enable the property, which will also automatically enable all the <br />";
		echo "images, then you can come back and individually disabled/re-enable images as <br />";
		echo "needed.<br />";
	}*/
}else {
	echo "There was a problem locating this property.<br />";
	echo mysql_error();
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