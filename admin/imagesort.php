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
<h1>Change Image Sort Order</h1>
<p class="description">You have changed the sort order for this image:<br/><br/>See Images: <a href="propImages.php?id=3">Second Street</a> || <a href="propImages.php?id=1">Heritage Suite</a> || <a href='propImages.php?id=2'>Garden Suite</a> || <a href='offImages.php'>Disabled</a></p>
<?php
if ($_POST['check'] == "yes") {

$order = $_POST['order'];
$i = 0;
foreach($order as $id => $ord){
  $update[$i] = "UPDATE images SET imgorder='" . $ord . "' WHERE imageid='".$id."';";
  $i++;
}

	foreach ($update as $val) {
		echo "<hr />";
		if (mysql_query($val)) {
			echo "Update Successful.<br />";
		}else {
			echo "Update Failed.<br />";
		}
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