<?php
//require_once($docroot . "master/config/config.php");
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
	<div class="main" style="height: 1050px;">
	<div class="main-left"><img src="images/img_garden.jpg" alt="Ashland, OR cottage" />
	<div class="main-left-menu"><?php include("master/includes/leftmenu.frontend.php") ?>
	  </div></div>
	<div class="main-right">
	  <img src="images/hd_availability.jpg" alt="Suite Availability - Second Street Cottages, Ashland, OR" />
	<p> You can use this page to see when our suites are available and to request a reservation. Please be aware that though we strive to keep the calendars up to date, they are subject to change.</p> 
    
<table style="margin-left: -17px">
<tbody>
<tr>
<td style="padding: 0 0px 3px 7px;"><h2><a href="heritage-suite.php">Heritage Suite</a></h2>
<iframe src="https://www.google.com/calendar/embed?showTitle=0&showPrint=0&showTabs=0&showCalendars=0&showTz=0&height=280&wkst=1&src=secondstegan%40gmail.com&amp;color=%232952A3&amp;ctz=Pacific/Apia&gsessionid=OK" width="200" height="280" frameborder="0" allowtransparency="true" scrolling="no"></iframe>
</td>

<td style="padding: 0 0px 3px 7px;"><h2><a href="garden-suite.php">Garden Suite</a></h2>
<iframe src="https://www.google.com/calendar/embed?showTitle=0&showPrint=0&showTabs=0&showCalendars=0&showTz=0&height=280&wkst=1&src=e225ul9huuac3r7mqsgegiqakk@group.calendar.google.com&color=%237A367A&ctz=Pacific/Apia&gsessionid=OK" style=" border-width:0 " width="200" height="280" frameborder="0" allowtransparency="true" scrolling="no"></iframe>
</td>
<!--
<td style="padding: 0 0px 3px 7px;"><h2><a href="garden-suite.php">Hideaway Suite</a></h2>
<iframe src="https://www.google.com/calendar/embed?showTitle=0&showPrint=0&&showTabs=0&showCalendars=0&showTz=0&height=280&wkst=1&src=f26eicmt5udgu8jebpi118hha4%40group.calendar.google.com&color=%237A367A&ctz=Pacific/Apia&gsessionid=OK" style=" border-width:0 " width="200" height="280" frameborder="0" allowtransparency="true" scrolling="no"></iframe>

</td>-->
</tr>
<tr><td colspan="2"><center><b>White</b> dates are still available!<!--<img src="images/dates_shown.gif" alt="Dates shown in purple are currently unavailable" />--></center></td></tr>
</tbody>
</table>
 <form name="form1" method="post" action="master/forms/contact_res.php">
										  <table align="left" border="0">
										  <tr><td colspan="2"><span class="style1">Request a reservation</span></td>
										  </tr>
                        <tr>
                          <td width="161" >Name:</td>
                          <td width="553"><input type="text" name="name" size="32"></td>
                        </tr>
                        <tr>
                          <td >Email:</td>
                          <td><input type="text" name="email" size="32"></td>
                        </tr>
						   <tr>
                          <td >Phone:</td>
                          <td><input type="text" name="phone" size="32"></td>
                        </tr>
                        <tr>
                        	<td>Address:</td>
                        	<td><input type="text" name="address1" size="32" /></td>
                        </tr>
                        <tr>
                        	<td>Apt/Unit/Suite:</td>
                            <td><input type="text" name="address2" size="32" /></td>
                        </tr>
                        <tr>
                        	<td>City:</td>
                            <td><input type="text" name="city" size="32" /></td>
                        </tr>
                        <tr>
                        	<td>State:</td>
                        	<td><input type="text" name="state" size="32" /></td>
                        </tr>
                        <tr>
                        	<td>Zip:</td>
                            <td><input type="text" name="zip" size="32" /></td>
                        </tr>
                        <tr>
                        	<td colspan="2">&nbsp;</td>
                        </tr>        						
                        <tr>
						<td>Suite:</td>
						<td><select name="suite">
						  <option selected>Select suite...</option>
						  <option value="Heritage">Heritage Suite</option>
						  <option value="Garden">Garden Suite</option>
                         <!-- <option value="Hideaway">Hideaway Suite</option> -->
						  </select></td>
						  </tr>
						     <tr>
							 
                          <td >Number of Guests:</td>
                          <td><input type="text" name="guests" size="3"></td>
                        </tr>
						<tr>
							 
                          <td >Arrival Date:</td>
                          <td><input type="text" name="arrives" size="32"></td>
                        </tr>
						   <tr>
                          <td >Departure Date:</td>
                          <td><input type="text" name="departs" size="32"></td>
                        </tr>
						  <tr>
                          <td >Comments/Questions:</td>
                          <td><textarea name="comments" cols="35" rows="5"></textarea></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><input type="submit" name="Submit" value="Submit"></td>
                        </tr>
                      </table>
	    </form>

	  </div>
    </div><div class="footer"><?php include("master/includes/footer.frontend.php") ?></div>
	
</div>
</div>
</body>
</html>
