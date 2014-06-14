<?php
//require_once($docroot . "master/config/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include($docroot . "master/includes/meta.inc.php");
?>

<script type="text/javascript" src="master/javascript/thickbox/jquery.js"></script>
<script type="text/javascript" src="master/javascript/thickbox/thickbox.js"></script>
<link rel="stylesheet" href="master/javascript/thickbox/thickbox.css" type="text/css" media="screen" />


</head>
<body class="normal">
<!-- Holds entire visible area-->
<div class="container">

	<!-- Top divs are header graphic banner and bg for the menus, see css1.css for images -->
	<div class="header">
	<?php include("master/includes/header.frontend.inc.php"); ?>
	</div>
	<div class="top-menu">
	<?php include("master/includes/mainmenu.frontend.inc.php"); ?>
	</div>

	<!-- Main holds the page between the top-menu and the footer -->
  <div class="main">

		<!-- Text maintains height of body-copy, controls font, background -->
	  <div class="text">

			<!-- body-copy controls the spacing, scrolling of words in Text area -->
			<div class="property-copy">
						
			<?php
				$pid = mysql_real_escape_string($_GET['pid']);
				$select = "SELECT * FROM oak_properties WHERE propertynumber = $pid;";
				$query = mysql_query($select);			
				
				$images = "SELECT * FROM oak_images WHERE propertynumber = $pid ORDER BY imgorder ASC;";				
				$image_query = mysql_query($images);				
				
				$preferred = "SELECT * FROM oak_images WHERE propertynumber = $pid AND featured = 'yes' LIMIT 1;";
				$preferred_query = mysql_query($preferred);		
				
				echo "<table>";
				echo "<tr>";
				echo "<td valign=\"top\" width=\"285px\" >";
				while  ($pref_row = mysql_fetch_array($preferred_query)) {
					
					$featheight = "";
					$featwidth = "width=\"305px\"";
					$src = "/oakley/{$pref_row[pathtofile]}{$pref_row[filename]}";
					$alt = "{$pref_row[filename]}";
					$name = "featuredimage";
					$id = "toppic";
					echo "<a href=\"{$src}\" class='thickbox' rel='gallery-{$pid}' title='image title'><img src=\"{$src}\" alt=\"{$alt}\" {$featwidth} name=\"{$name}\" id=\"{$id}\" /></a><br />\n";
				}				
				echo "<br /><table border=\"1px\">";
				//counter is used to place 4 images on each table row
				$counter = 0;
				while  ($image_row = mysql_fetch_array($image_query)) {
					if( ($counter % 3) == 0) { 
						echo "<tr>";
						}
					echo "<td align=\"center\">";
					$height = "height=\"70px\"";
					$width = "";
					echo "<a href=\"/oakley/{$image_row[pathtofile]}{$image_row[filename]}\" class='thickbox' rel='gallery-{$pid}'  title='{$row['address1']}'><img src=\"/oakley/{$image_row[pathtofile]}{$image_row[filename]}\" alt=\"{$image_row[filename]}\" {$height} {$width} name=\"{$image_row[imageid]}\" id=\"{$image_row[imageid]}\" /></a>\n";
					echo "</td>";
					if( ($counter % 3) == 2) { 
					echo "</tr>";
						}
					$counter ++;
				}
				echo "</table>";				
				echo "</td><td valign=\"top\" align=\"left\" width=\"475px\" style='padding-left: 11px'>";
				while ($row = mysql_fetch_array($query)) {			
					
					echo "<h2>{$row['address1']}</h2><h3>{$row['city']}, {$row['state']}</h3>";
					echo "Bedrooms: {$row['numbedrooms']}<br />Baths: {$row['numbaths']}<br />";
					echo "<div class=\"proppage_info\">";
					echo stripslashes($row['fulldescription']);
					echo "<br />";
					echo "</div>";
				
				}
								
				echo "</td></tr></table>";
				?>
			
		<?php include("master/includes/propertymenu.frontend.inc.php") ?>

					</div>
	  </div>

  </div>
  	
  <div class="footer"><?php include("master/includes/footer.frontend.inc.php") ?></div>	

</div>
</body>
</html>
