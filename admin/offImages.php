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

<script type="text/javascript" src="../master/javascript/thickbox/jquery.js"></script>
<script type="text/javascript" src="../master/javascript/thickbox/thickbox.js"></script>
<link rel="stylesheet" href="../master/javascript/thickbox/thickbox.css" type="text/css" media="screen" />

<link rel="stylesheet" href="../master/css/admin.css" type="text/css" media="screen" />
<?php
include($docroot . "/master/includes/meta.inc.php");
?>
</head>
<body>
<?php
// include administration header
include($docroot . "/master/includes/header.admin.inc.php");
?>
<?php
// include administration left navigation
include($docroot . "/master/includes/leftnav.admin.inc.php");
?>
<div>
<h1>Disabled Images</h1>
<p class="description">See what is off, and turn it back on if you want
<br /><br/><a href='editimageinfo.php'>Back to the images</a> </p>
<hr />
<?php
$id = "3";

$property = "SELECT propName FROM properties WHERE propertynumber = '$id';";
$prop_query = mysql_query($property);


while ($prop_row = mysql_fetch_array($prop_query)) {
	echo "<h2>{$prop_row['propName']}</h2>";	
}

$select = "SELECT * FROM images WHERE propertynumber = '$id' AND enabled = 'no';";
$query = mysql_query($select);
echo "<span class='pictureArea'>";
while ($row = mysql_fetch_array($query)) {
echo "<div class='imageDisplay'>\n";
$height = "";
$width = "";
$directory = "images/db_images";

echo "<a href=\"/{$directory}/{$row[filename]}\" class='thickbox' rel='gallery-{$pid}' title='{$prop_row['propName']}'><img src=\"/{$directory}/{$row[filename]}\" alt=\"{$row[filename]}\" {$height} {$width} name=\"{$row[imageid]}\" id=\"{$row[imageid]}\" /></a>\n";

if ($row['enabled'] == "yes") {
echo "<span class='caption'><a href=\"disableimage.php?id={$row[imageid]}\" title=\"Disable Image\">Disable</a></span>\n";
}elseif ($row['enabled'] == "no") {
echo "<span class='caption'><a href=\"enableimage.php?id={$row[imageid]}&prop={$row[propertynumber]}\" title=\"Enable Image\">Enable</a></span><br/><br/>\n";
}

echo "</div></span>\n";
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