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
<h1>Image Reviewer</h1>
<p class="description">Use this page to turn off any images we do not want to use on the site:<br/><br/>See Images: <a href="propImages.php?id=3">Second Street</a> || <a href="propImages.php?id=1">Heritage Suite</a> || <a href='propImages.php?id=2'>Garden Suite</a> || <a href='offImages.php'>Disabled</a></p>
<hr />
<?php

$propNumber1 = "Heritage Suite";
$prop1 = "1";
$propNumber2 = "Garden Suite";
$prop2 = "2";
$propNumber3 = "Second Street";
$prop3 = "3";

$id = mysql_real_escape_string($_GET['id']);
$property = "SELECT propName FROM properties WHERE propertynumber = '$id';";
$prop_query = mysql_query($property);

while ($prop_row = mysql_fetch_array($prop_query)) {
	echo "<h2>{$prop_row['propName']} - {$id}</h2>";	
}

$propNumb = $id;

if ($propNumb == 3){
	$propName = $propNumber3;
	$moveTo1 = $propNumber2;
	$move1 = $prop2;
	$moveTo2 = $propNumber1;
	$move2 = $prop1;
	}
	elseif ($propNumb == 2){
		$propName = $propNumber2;
		$moveTo1 = $propNumber3;
		$move1 = $prop3;
		$moveTo2 = $propNumber1;
		$move2 = $prop1;
		}
		elseif ($propNumb == 1){
			$propName = $propNumber1;
			$moveTo1 = $propNumber2;
			$move1 = $prop2;
			$moveTo2 = $propNumber3;
			$move2 = $prop3;
			}

$select = "SELECT * FROM images WHERE enabled = 'yes' AND propertynumber = '$id' ORDER BY imgorder;";
$query = mysql_query($select);
echo "<span class='pictureArea'>";
while ($row = mysql_fetch_array($query)) {
echo "<div class='imageDisplay'>\n";
$height = "";
$width = "";
$directory = "images/db_images";

echo "<a href=\"/{$directory}/{$row[filename]}\" class='thickbox' rel='gallery-{$pid}' title='{$prop_row['propName']}'><img src=\"/{$directory}/{$row[filename]}\" alt=\"{$row[filename]}\" {$height} {$width} name=\"{$row[imageid]}\" id=\"{$row[imageid]}\" /></a>\n";

if ($row['enabled'] == "yes") {
echo "<span class='caption'><a href=\"disableimage.php?id={$row[filename]}\" title=\"Disable Image\">Disable</a></span>";
echo "<br/><span class='caption'>Move picture to:</span><br/><span class='caption'><a href='moveimage.php?image={$row[filename]}&amp;prop={$move1}'>{$moveTo1}</a> || <a href='moveimage.php?image={$row[filename]}&amp;prop={$move2}'>{$moveTo2}</a>";
}elseif ($row['enabled'] == "no") {
echo "<span class='caption'><a href=\"enableimage.php?id={$row[imageid]}&prop={$row[propertynumber]}\" title=\"Enable Image\">Enable</a><br/><span class='caption'>{$row[propertynumber]}<br/>\n";
}
echo '<form name="form1" id="form1" action="imagesort.php" method="post" />';
echo "<input name=\"order[$row[imageid]]\" type=\"text\" value=\"{$row[imgorder]}\" size=\"5\" />\n";
echo '<input name="check" id="check" type="hidden" value="yes" />' . "\n";
echo "<input name=\"submit\" id=\"submit\" type=\"submit\" value=\"change sort order\" />";
echo "</form>\n";
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