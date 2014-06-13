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
//$id = mysql_real_escape_string($_GET['id']);
//$propid = mysql_real_escape_string($_GET['prop']);
$id = "3";
$propid = "3";

// build query to change all featured to no non-featured
$unfeature = "UPDATE images SET featured = 'no' WHERE featured = 'yes' AND propertynumber = $propid;";
// run query
if (!mysql_query($unfeature)) {
	// throw out quick error if it doesn't work, but don't kill the application
	echo "There was some sort of problem unfeaturing the previously featured image.<br />";
	echo "The process will still continue however.<br />";
	echo "<hr />";
}
// find query that need's to be changed to featured.			
$update = "UPDATE oak_images SET featured = 'yes' WHERE imageid = '$id';";
	if (mysql_query($update)) { // if it updates give congratulations
		echo "The image was changed to the featured image.<br /><a href=\"editimageinfo.php?id={$propid}\">Back to images</a>"; // link here if you wanted
	}else { // if not
		echo "There was a Problem changing this image to featured.<br />"; // give them an error.
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