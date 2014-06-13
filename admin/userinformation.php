<?php
require_once("../master/config/config.php");
?>
<?php
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
<h1>User Information Panel</h1>
<p>The link's below are various links that will allow you to work with all information regarding administrative access.  There is not currently a permission system, none was requested.  From your panel all you can do is add new administrator's.  You cannot see the information on all current administrator's or mess with there information in any way, all you can do is setup there initial account at that point they will be able to come in and edit as they like from there account menu.</p>
<ul>
<li><a href="editmyinfo.php" title="Edit My Info">Edit My Information</a></li>
<li><a href="addadmin.php" title="Add New Administrator">Add New Administrator</a></li>
</ul>
</div>
</body>
</html>
<?php
}else {
header("Location: login.php");
}
?>