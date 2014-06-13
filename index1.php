<?php
require_once($docroot . "master/config/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Second Street Cottages, Act 2 - Ashland, OR lodging and accomodations</title>
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
		<a HREF="index.php"><img src="images/header_banner4.gif" alt="Second Street Cottages, Act 2 - Bungalow accomodations in Ashland, OR" /></a>
	</div>
	<div class="main" style="padding-top: 0px;">
		<div class="main-left"><img src="images/img_garden.jpg" alt="Ashland, OR cottage" />
			<div class="main-left-menu"><?php include("master/includes/leftmenu.frontend.php") ?></div>
		</div>
		<div class="main-right">
		  <img src="images/main_hd_charming.gif" alt="Ashland's Most Charming Travelers Accomodations" />
		  <?php
				
					$directory = "../images/db_images";
					// Second Street Collection == 3
					$pid = "3";
					
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
		 <div style="float: left; width: 300px; margin-top: -9px;"><p><strong>2nd Street Cottages, Act 2</strong> is located just two blocks from the center of Ashland, including the Oregon Shakespeare Festival Theaters, shops and restaurants, and beautiful Lithia Park.</p>
		 <p>We have two spacious suites &ndash; <a href="heritage-suite.php" title="Heritage Suite">Heritage Suite</a> and <a href="garden-suite.php" title="Garden Suite">Garden Suite</a> &ndash; with all the amenities: comfortable living room, dining room, full kitchen, multiple bedrooms and bathrooms. </p></div>
		  <img src="images/main_hd_exquisite.gif" alt="Our Exquisite Suites" />
          <div style="float:right;"><a href="availability.php"><img src="images/home_button2.gif" border="0"/></a></div>
		  <div style="float: left; width: 300px;"><p>Located in Ashland's historic Railroad District, 2nd Street Cottages, Act 2 offers comfort, convenience and location. </p><p>Early reservations are advised &ndash; <a href="availability.php" title="Check suite availability">check availability</a>. Each suite easily accommodates couples or groups &ndash; with all the advantages of home.</p><p>Book <u><strong>now</strong></u> during our Spring Special and enjoy an exceptional savings.</p>  
		  </div>
		</div>
    </div>
	<div class="footer"><?php include("master/includes/footer.frontend.php") ?></div>	
</div>
</div>
</body>
</html>