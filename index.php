<?php
//require_once("master/config/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Second Street Cottages, Act 2 - Ashland, OR lodging and accomodations</title>
<?php
include("master/includes/meta.inc.php");
?>
<script type="text/javascript" src="master/javascript/thickbox/jquery.js"></script>
<script type="text/javascript" src="master/javascript/thickbox/thickbox.js"></script>
<script src="http://www.google.com/jsapi/?key=ABQIAAAAiDNXDIRiFG2T0EKbxQYLDxT-gtFcaj4RlOGhXYmRUZ6oeAxBShSG7OEk0lbUNx2QwDKJ0GIoAPxvQA"
      type="text/javascript"></script>
<script src="http://www.google.com/uds/solutions/slideshow/gfslideshow.js"
      type="text/javascript"></script>

<!--
<link rel="stylesheet" href="../master/javascript/thickbox/thickbox.css" type="text/css" media="screen" />
-->
</head>

<body>
<div class="normal">
<div class="container">
	<div class="header">
	<?php include("master/includes/header.frontend.php") ?></div>

	<div class="main" style="height: 675px;">
		<div class="main-left"><img src="images/img_garden.jpg" alt="Ashland, OR cottage" />
<div class="main-left-menu">
	<?php include("master/includes/leftmenu.frontend.php") ?>
	  </div></div>
	<div class="main-right">
		  <img src="images/main_hd_charming.gif" alt="Ashlands Most Charming Travelers Accomodations" />
		
		 <p style="font-size:1em; padding-right:15px;"><strong>2nd Street Cottages, Act 2</strong> is located just two blocks from the center of Ashland, including the Shakespeare Festival Theaters, shops and restaurants. Our three spacious suites have all the amenities: living room, dining room, full kitchen (fully-equipped), multiple bedrooms and bathrooms, decks and patio areas.</p>
         <p style="font-size:1em; text-align:center; margin-top: -20px">Visit our suites:</p>
         <div style="margin-top: -20px"><center><a href="heritage-suite.php"><img src="images/heritage_suite.png" alt="Heritage Suite" /></a> <a href="garden-suite.php"><img src="images/garden_suite.png" alt="Garden Suite" /></a> <!--<a href="hideaway_suite.php"><img src="images/btn_hideaway-suite.png" alt="Hideaway Suite" /></a>--></center></div>
      
		 <p style="font-size:1em;">Begin planning your trip by clicking the links below: </p>
		 
          <div style="float:left; width: 200px;"><a href="availability.php"><img src="images/check_avail.jpg" /></a><br/><a href="availability.php"><img src="images/request.jpg" /></a></div>
		 <div style="float:left;"><style type="text/css">
#slideShow8 {
  width : 360px;
  height : 240px;
  padding : 0px;
color: #990000;
border: solid #b8ca97 5px;
}
</style>

 
<script type="text/javascript">
  function LoadSlideShow8() {
    var frankfurt = "http://picasaweb.google.com/data/feed/base/user/PRSolans/albumid/5172161441963708273?alt=rss&kind=photo&authkey=Gv1sRgCKL3oLuf8c_AQg&hl=en_US&thumbsize=800";
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
</p>

</div>



		</div>
    </div>
	<div class="footer"><?php include("master/includes/footer.frontend.php") ?></div>	
</div>
</div>
</body>
</html>