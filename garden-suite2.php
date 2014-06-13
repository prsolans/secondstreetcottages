<?php
require_once($docroot . "master/config/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Garden Suite - Ashland, OR</title>
<?php
include($docroot . "master/includes/meta.inc.php");
?>
<script type="text/javascript" src="../master/javascript/thickbox/jquery.js"></script>
<script type="text/javascript" src="../master/javascript/thickbox/thickbox.js"></script>
<link rel="stylesheet" href="../master/javascript/thickbox/thickbox.css" type="text/css" media="screen" />
</head>

<body>
<div class="normal">
<div class="container">
	<div class="header">
	<?php include("master/includes/header.frontend.php") ?></div>
	<div class="main">
	<div class="main-left"><img src="images/img_flower_mirror.jpg" alt="Ashland, OR cottage" />
	<div class="main-left-menu">
	<?php include("master/includes/leftmenu.frontend.php") ?>
	  </div></div>
	<div class="main-right">
	  <img src="images/hd_garden.jpg" alt="Garden Suite - Second Street Cottages, Ashland, OR" />
	  <p> <?php
			
				$directory = "../images/db_images";
				// GARDEN SUITE == 2
				$pid = "2";
				
				$images = "SELECT * FROM images WHERE enabled = 'yes' AND propertynumber = '$pid' ORDER BY imgorder;";				
				$image_query = mysql_query($images);				
				
				$preferred = "SELECT * FROM images WHERE enabled = 'yes' AND propertynumber = $pid ORDER BY imgorder ASC LIMIT 1;";
				$preferred_query = mysql_query($preferred);		
				
				while  ($pref_row = mysql_fetch_array($preferred_query)) {
					
					$featheight = "";
					$featwidth = "width=\"285px\"";
					$src = "{$directory}/{$pref_row[filename]}";
					$alt = "{$pref_row[filename]}";
					$name = "featuredimage";
					$id = "toppic";
					echo "<div style='float: right; padding: 15px 7px 7px 9px;';><a href=\"{$src}\" class='thickbox' rel='gallery-{$pid}' title='Click to view more pictures'><img src=\"{$src}\" alt=\"{$alt}\" {$featwidth} name=\"{$name}\" id=\"{$id}\" /></a><br/><span class='caption'>Click to view more pictures</span></div>";
				}				
				
					echo "<div style='visibility: hidden;'>";
				while  ($image_row = mysql_fetch_array($image_query)) {
					$height = "height=\"1px\"";
					$width = "";
					echo "<a href=\"{$directory}/{$image_row[filename]}\" class='thickbox' rel='gallery-{$pid}'  title='{$row['address1']}'><img src=\"{$directory}/{$image_row[filename]}\" alt=\"{$image_row[filename]}\" {$height} {$width} name=\"{$image_row[imageid]}\" id=\"{$image_row[imageid]}\" /></a>\n";
					
					}
					
					echo "</div>";
								
?>
	  Garden Suite offers quiet, style and comfort. It has two bedrooms, each with its own full bathroom, and accommodates up to six people.
</p><br/>
	  <p>
Garden Suite has a fully equipped kitchen, TV, DVD, private washer/dryer, central air, off-street parking and an outdoor deck.  
</p><br/>
<!--<p>
Beautifully decorated with period furnishings and fine quality linens. And a great location – a short two-block walk to Oregon Shakespeare Festival theaters and downtown Ashland.
</p>-->	 <?
error_reporting (E_ALL ^ E_NOTICE);
extract($HTTP_POST_VARS);
extract($HTTP_GET_VARS);
include '/homepages/30/d162063315/htdocs/secondstreet/master/cal/cl_files/calendar.php';
?>
<table>
<tr>
<td>
<h1>Availability</h1>
 <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
 codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0"
 width="250" height="280" id="CC5449421" align="middle">
                <param name="movie" value="cal/garden_suite.swf"/>
                <param name="quality" value="high" />
                <param name="FlashVars" VALUE="ww=250&hh=280"/>
                <param name="salign" value="lt" />
                <param name="bgcolor" value="FF99CC" />
                <embed src="cal/garden_suite.swf" quality="high" bgcolor="FF99CC" width="250" height="280"
 FlashVars="ww=250&hh=280" name="CC5449421"  salign="lt" align="middle" type="application/x-shockwave-flash"
 pluginspage="http://www.macromedia.com/go/getflashplayer" />
              </object>
</td>
<td width="15px"></td>
<td>To request a reservation, please fill out the form on our <a href="availability.php">suite availability</a> page. If you don't see the dates you are looking for, check out our <a href="heritage-suite.php">Heritage Suite</a> for availability.<br/><br/><img src="images/dates_shown.gif" alt="Dates shown in purple are currently unavailable" /></td>
</tr>
</table>
</div>
    </div><div class="footer"><?php include("master/includes/footer.frontend.php") ?></div>
	
</div>
</div>

</body>
</html>
