<?php
require_once($docroot . "master/config/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Heritage Suite - Ashland, OR</title>
<?php
include($docroot . "master/includes/meta.inc.php");
?>

<!-- Code for Picassa slideshow -->
<script src="http://www.google.com/jsapi/?key=ABQIAAAAiDNXDIRiFG2T0EKbxQYLDxT-gtFcaj4RlOGhXYmRUZ6oeAxBShSG7OEk0lbUNx2QwDKJ0GIoAPxvQA"
      type="text/javascript"></script>
<script src="http://www.google.com/uds/solutions/slideshow/gfslideshow.js"
      type="text/javascript"></script>

<style type="text/css">
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
	<div class="main" style="height: 750px;">
	<div class="main-left"><img src="images/img-heritage-exterior-a.png" alt="Ashland, OR cottage" />
	<div class="main-left-menu">
	<?php include("master/includes/leftmenu.frontend.php") ?>
	  </div></div>
	<div class="main-right">
	  <img src="images/hd_heritage.jpg" alt="Heritage Suite - Second Street Cottages, Ashland, OR" />
	  <!--<p> <?php
			
				$directory = "../images/db_images";
				
				// HERITAGE SUITE == 1
				$pid = "1";
				
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
								
?>-->

<!-- This <div> is for Picassa slideshow -->
<div style="float:right; padding-left: 9px; padding-right: 35px; padding-bottom: 15px">
<style type="text/css">
#slideShow8 {
  width : 280px;
  height : 210px;
  padding : 0px;
  color: #990000;
  border: solid #b8ca97 5px;
}
</style>

 
<script type="text/javascript">
  function LoadSlideShow8() {
    var frankfurt = "https://picasaweb.google.com/data/feed/base/user/PRSolans/albumid/5667125612347449921?alt=rss&kind=photo&authkey=Gv1sRgCPSrn86emojXeA&hl=en_US&thumbsize=800";
    var options8 = {displayTime:5000, 
transistionTime:600, 
scaleImages:true, 
fullControlPanel:true, 
fullControlPanelSmallIcons:true, 
pauseOnHover:false,
/*transitionCallback : myTransitionHandler4,*/
thumbnailSize : GFslideShow.THUMBNAILS_LARGE
};
    var ss = new GFslideShow(frankfurt, "slideShow8", options8);
  }
function myTransitionHandler8(entry, transitionTime) {
    imageTitleSpan8.innerHTML = entry.title;
  }
  /**
   * Use google.load() to load the AJAX Feeds API
   * Use google.setOnLoadCallback() to call LoadSlideShow once the page loads
   */
  google.load("feeds", "1");
  google.setOnLoadCallback(LoadSlideShow8);
</script>
<div id="slideShow8">Loading...</div>
 <span style="font-size: .8em"><div id="imageTitleSpan8"><center> Mouse over images to view controls </center></div></span></center> 
</div>

<p style="font-size:1em">Heritage Suite is the original house built in the early 1900's and now updated and completely renovated to provide top quality and comfort. It features four bedrooms, three full bathrooms and accommodates up to eight people.</p>
<p style="font-size:1em; padding-right: 35px;">The main floor has a spacious living room, dining room, and fully equipped kitchen. And there's more: TV, DVD, private washer/dryer, central air, off-street parking and outdoor decks.  
</p>
<!--<p>
Beautifully decorated with period furnishings and fine quality linens. The perfect place to gather with friends and family. A great location – just a short two-block walk to Oregon Shakespeare festival theaters and downtown Ashland.</p>
-->
 <?
//error_reporting (E_ALL ^ E_NOTICE);
//extract($HTTP_POST_VARS);
//extract($HTTP_GET_VARS);
//include //'/homepages/30/d162063315/htdocs/secondstreet/master/cal/cl_files/calendar.php';
?>
<table>
<tr>
<td>
<h1 style="margin-top: -20px">Availability</h1>
<iframe src="https://www.google.com/calendar/embed?showTitle=0&showPrint=0&showTabs=0&showCalendars=0&showTz=0&height=280&wkst=1&src=secondstegan%40gmail.com&amp;color=%232952A3&amp;ctz=Pacific/Apia&gsessionid=OK" width="240" height="280" frameborder="0" allowtransparency="true" scrolling="no"></iframe>
</td>
<td width="15px"></td>
<td style="padding-right: 35px;">To request a reservation, please fill out the form on our <a href="availability.php">suite availability</a> page. 
If you don't see the dates you are looking for, check out our <a href="garden-suite.php">Garden Suite</a> and <a href="hideaway-suite.php">Hideaway Suite</a> for availability.</a>
<div class="notice">Dates shown in white are still available!</div></td>
</tr>
</table></div>
    </div><div class="footer"><?php include("master/includes/footer.frontend.php") ?></div>
	
</div>
</div>

</body>
</html>
