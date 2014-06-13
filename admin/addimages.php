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
<h1>Add New Images</h1>
<p>Note: When entering new images into the system, please do not have any special characters in the image name (i.e, commas, asterisks, pound signs, etc.) Periods and hyphens are OK.</p>
<?php
$property = "SELECT propName FROM properties WHERE propertynumber = '$id';";
$prop_query = mysql_query($property);

while ($prop_row = mysql_fetch_array($prop_query)) {
	echo "<h1>{$prop_row['propName']}</h1>";	
}
?>
<form enctype="multipart/form-data" name="addimages" id="addimages" action="/admin/addimages2.php" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="7340032" />
<label for="file1">Image 1</label>
<input name="file1" id="file1" type="file" /><br />
<label for="file2">Image 2</label>
<input name="file2" id="file2" type="file" /><br />
<label for="file3">Image 3</label>
<input name="file3" id="file3" type="file" /><br />
<label for="file4">Image 4</label>
<input name="file4" id="file4" type="file" /><br />
<label for="file5">Image 5</label>
<input name="file5" id="file5" type="file" /><br />
<label for="file6">Image 6</label>
<input name="file6" id="file6" type="file" /><br />
<label for="file7">Image 7</label>
<input name="file7" id="file7" type="file" /><br />
<label for="file8">Image 8</label>
<input name="file8" id="file8" type="file" /><br />
<label for="file9">Image 9</label>
<input name="file9" id="file9" type="file" /><br />
<label for="file10">Image 10</label>
<input name="file10" id="file10" type="file" /><br />
<label for="file11">Image 11</label>
<input name="file11" id="file11" type="file" /><br />
<label for="file12">Image 12</label>
<input name="file12" id="file12" type="file" /><br />
<label for="file13">Image 13</label>
<input name="file13" id="file13" type="file" /><br />
<label for="file14">Image 14</label>
<input name="file14" id="file14" type="file" /><br />
<label for="file15">Image 15</label>
<input name="file15" id="file15" type="file" /><br />
<label for="file16">Image 16</label>
<input name="file16" id="file16" type="file" /><br />
<label for="file17">Image 17</label>
<input name="file17" id="file17" type="file" /><br />
<label for="file18">Image 18</label>
<input name="file18" id="file18" type="file" /><br />
<label for="file19">Image 19</label>
<input name="file19" id="file19" type="file" /><br />
<label for="file20">Image 20</label>
<input name="file20" id="file20" type="file" /><br />
<label for="file21">Image 21</label>
<input name="file21" id="file21" type="file" /><br />
<label for="file22">Image 22</label>
<input name="file22" id="file22" type="file" /><br />
<label for="file23">Image 23</label>
<input name="file23" id="file23" type="file" /><br />
<label for="file24">Image 24</label>
<input name="file24" id="file24" type="file" /><br />
<label for="file25">Image 25</label>
<input name="file25" id="file25" type="file" /><br />
<label for="file26">Image 26</label>
<input name="file26" id="file26" type="file" /><br />
<label for="file27">Image 27</label>
<input name="file27" id="file27" type="file" /><br />
<label for="file28">Image 28</label>
<input name="file28" id="file28" type="file" /><br />
<label for="file29">Image 29</label>
<input name="file29" id="file29" type="file" /><br />
<label for="file30">Image 30</label>
<input name="file30" id="file30" type="file" /><br />
<label for="file31">Image 31</label>
<input name="file31" id="file31" type="file" /><br />
<label for="file32">Image 32</label>
<input name="file32" id="file32" type="file" /><br />
<input name="id" type="hidden" value="<?php echo $_GET['id']; ?>" />
<input name="submit" id="submit" type="submit" value="Upload" />
</form>
</div>
</body>
</html>
<?php
}else {
header("Location: login.php");
}
?>