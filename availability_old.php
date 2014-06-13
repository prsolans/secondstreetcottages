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

<link type="text/css" href="master/css/custom-theme/jquery-ui-1.7.2.custom.css" rel="stylesheet" />	
<link type="text/css" href="master/css/custom-theme-2/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
<script type="text/javascript" src="master/javascript/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="master/javascript/jquery-ui-1.7.2.custom.min.js"></script>
<style type="text/css">

Cheader {color: #000000; font-size: 24px; }

.style1 {
	font-size: larger;
	font-weight: bold;
}

h2 {
	color: #963A70;

}

.notice {

	margin: 22px;
	padding: 9px;
	background: #8a9672;
	border: white 4px solid;
	font-size: 1.3em;
	text-align: center;
}
</style>

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


<iframe src="https://www.google.com/calendar/embed?showTitle=1&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=280&amp;wkst=1&amp;src=e225ul9huuac3r7mqsgegiqakk%40group.calendar.google.com&amp;color=%237A367A&amp;ctz=Pacific%2FApia" style=" border-width:0 " width="240" height="280" frameborder="0" allowtransparency="true" scrolling="no"></iframe>

<iframe src="https://www.google.com/calendar/embed?showTitle=1&showPrint=0&showTabs=0&showCalendars=0&showTz=0&height=280&wkst=1&src=google@2ndstreetcottages.com&color=%236E6E41&ctz=Pacific/Apia&gsessionid=OK" style=" border-width:0 " width="240" height="280" frameborder="0" allowtransparency="true" scrolling="no"></iframe>



<table>
<tr>
<td><h2><a href="heritage-suite.php">Heritage Suite</a></h2>

<script type="text/javascript" src="cal/swfobject.js"></script><div id="CC6526226">Form Object</div><script type="text/javascript">var so = new SWFObject("cal/heritage_suite.swf", "cal/heritage_suite.xml", "250", "280", "7,0,0,0", "#AFBE92");so.addParam("classid", "clsid:d27cdb6e-ae6d-11cf-96b8-444553540000");so.addParam("quality", "high");so.addParam("salign", "lt");so.addParam("FlashVars", "ww=250&hh=280");so.write("CC6526226");</script> 
</td><td>
<h2><a href="garden-suite.php">Garden Suite</a></h2>


<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
 codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0"
 width="250" height="280" id="CC2145579" align="middle">
<param name="movie" value="cal/garden_suite.swf"/>
<param name="quality" value="high" />
<param name="FlashVars" VALUE="ww=250&hh=280"/>
<param name="salign" value="lt" />
<param name="bgcolor" value="AFBE92" />
<embed src="cal/garden_suite.swf" quality="high" bgcolor="AFBE92" width="250" height="280"
 FlashVars="ww=250&hh=280" name="CC2145579"  salign="lt" align="middle" type="application/x-shockwave-flash"
 pluginspage="http://www.macromedia.com/go/getflashplayer" /></object>




</td>
</tr>
<tr><td colspan="3"><div class="notice">Dates shown in white are still available!</div></td></tr>
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
						<td>Suite:</td>
						<td><select name="suite">
						  <option selected>Select suite...</option>
						  <option value="Heritage">Heritage Suite</option>
						  <option value="Garden">Garden Suite</option>
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


<script type="text/javascript">

	$(document).ready(function(){

		// Datepicker
				$('#datepickerHeritage').datepicker({
					inline: true,
					 minDate:'0', 
    					maxDate: '+12M',
					beforeShowDay : reservedDaysHeritage,
					onSelect   : selectedDay
				});
				
				// Datepicker
				$('#datepickerGarden').datepicker({
					inline: true,
					 minDate:'0', 
    					maxDate: '+12M',
					beforeShowDay : reservedDaysGarden,
					onSelect   : selectedDay
				});
				
				
				
		//hover states on the static widgets
		$('#dialog_link, ul#icons li').hover(
			function() { $(this).addClass('ui-state-hover'); }, 
			function() { $(this).removeClass('ui-state-hover'); }
		);
		
	});
		
	

	function reservedDaysHeritage(date)
	{
	   return reservedDays(date,heritageReservedDays);
	}

	function reservedDaysGarden(date)
	{
	   return reservedDays(date,gardenReservedDays);
	}

	function reservedDays(date, natDays)
	{
	
	   if(natDays != null && natDays.length > 0 )
	   {
	   	var theDate = (date.getMonth()+1).toString() + "/" + date.getDate().toString() + "/" + date.getFullYear().toString(); 
	   	
		for (i = 0; i < natDays.length; i++) 
		{ 
		      if ($.inArray(theDate, natDays) != -1)
		      { 
		        return [false, "","reserved"]; 
		      } 
		 } 
	   } 
	   
	   return [true, '']; 
	}
	
	
	function selectedDay (dateText, inst)
	{
	
	
	}			
</script>
</body>
</html>
