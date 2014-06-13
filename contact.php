<?php
require_once($docroot . "master/config/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Home of Second Street Cottages, Act 2</title>
<?php
include($docroot . "master/includes/meta.inc.php");
?>

</head>

<body>
<div class="normal">
<div class="container">
	<div class="header">
	<?php include("master/includes/header.frontend.php") ?></div>
	<div class="main">
	<div class="main-left"><img src="images/img_garden.jpg" alt="Ashland, OR cottage" />
	<div class="main-left-menu">
	<?php include("master/includes/leftmenu.frontend.php") ?>
	  </div></div>
	<div class="main-right">
	  <img src="images/hd_contact.jpg" alt="Contact Us - Second Street Cottages, Ashland, OR" />
	  <p>
	  <strong>By mail:</strong><br />
  2nd Street Cottages, Act 2<br />
144 North Second Street<br />
Ashland, OR 97520 | <a href="ashland-maps.php">see local map</a> </p>
	  <p><strong>By phone:</strong> 1-541-488-0888 or 1-877-541-4880 <em>(toll-free)</em></p>
	  <p>For reservations, visit our <a href="availability.php">Availabiliy & Reservations</a> page.</p>
    
	  <p><strong>By email:</strong> </p>
	  <form name="form1" method="post" action="master/forms/contact_prs.php">
										  <table align="left" border="0">
                        <tr>
                          <td width="161" >Your Name:</td>
                          <td width="553"><input type="text" name="name" size="32"></td>
                        </tr>
                        <tr>
                          <td >Your Email:</td>
                          <td><input type="text" name="email" size="32"></td>
                        </tr>
						   <tr>
                          <td >Your Phone:</td>
                          <td><input type="text" name="phone" size="32"></td>
                        </tr>
                        <tr>
                          <td >Comments/Questions:</td>
                          <td><textarea name="comments" cols="45" rows="10"></textarea></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><input type="submit" name="Submit" value="Submit"></td>
                        </tr>
                      </table>
	    </form>
					</p>
	  </div>
    </div><div class="footer"><?php include("master/includes/footer.frontend.php") ?></div>
	
</div>
</div>

</body>
</html>
