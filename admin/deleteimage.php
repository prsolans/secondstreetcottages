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
<h1>Delete Image</h1>
<?php
if (!isset($_GET['delete'])) {
echo "<p>Confirmation: Are you sure you want to permanently delete this image</p>";
echo "<a href=\"deleteimage.php?id={$_GET[id]}&delete=yes\" title=\"Yes\">Yes</a>";
echo " ";
echo "<a href=\"controlpanel.php\" title=\"No\">No</a>";
}

if ($_GET['delete'] == "yes") {
	$id = mysql_real_escape_string($_GET['id']);
	$select = "SELECT * FROM images WHERE imageid = '$id';";
	$queryselect = mysql_query($select);
	if ($row = mysql_fetch_array($queryselect)) {
		if (unlink($docroot . $row['pathtofile'] . $row['filename'])) {
			$delete = "DELETE FROM images WHERE imageid = '$id';";
				if (mysql_query($delete)) {
					echo "The entire deletion/removal process was successful.<br />";
				}else {
					echo "The file was deleted from the directory successfully, but for some reason ";
					echo "It was unable to be removed from the database.<br />";
				}
			}else {
				echo "The image itself cound not be removed from the directory.<br />";
			}
		
	}else {
		echo "There was no image associated with this id.<br />";
	}
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