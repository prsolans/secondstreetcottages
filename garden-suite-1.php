<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Garden Suite - Ashland, OR</title>
<?php
include("master/includes/meta.inc.php");
?>

<!-- Code for Picassa slideshow -->
<script src="http://www.google.com/jsapi/?key=ABQIAAAAiDNXDIRiFG2T0EKbxQYLDxT-gtFcaj4RlOGhXYmRUZ6oeAxBShSG7OEk0lbUNx2QwDKJ0GIoAPxvQA"
      type="text/javascript"></script>
<script src="http://www.google.com/uds/solutions/slideshow/gfslideshow.js"
      type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
  $(document).ready(function() {
    $('#prs_vrbo').css('border', '15px solid red');
  });

</script>
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
	<div class="main" style="height: 700px;">
	<div class="main-left"><img src="images/img_flower_mirror.jpg" alt="Ashland, OR cottage" />
	<div class="main-left-menu">
	<?php include("master/includes/leftmenu.frontend.php") ?>
	  </div></div>
	<div class="main-right">
	  <img src="images/hd_garden.jpg" alt="Garden Suite - Second Street Cottages, Ashland, OR" />



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
    var frankfurt = "https://picasaweb.google.com/data/feed/base/user/PRSolans/albumid/5667120570172954353?alt=rss&kind=photo&authkey=Gv1sRgCJmwo4vG3-_2QA&hl=en_US&thumbsize=800";
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


<p>
Garden Suite offers quiet, style and comfort. It has two bedrooms, each with its own full bathroom, and accommodates up to five people.
</p>
<p>
Garden Suite has a <strong>living/dining room</strong>, fully equipped kitchen, TV, DVD, private washer/dryer, central air, off-street parking and an outdoor deck.  
</p>

<table>
<tr>
<td>
<h1 style="margin-top: -25px">Availability</h1>
<div id="_vrbo_cal_widget_610049">
<div id="_vrbo_cal_link_610049">
<a href="http://www.vrbo.com/610049" target="_blank" rel="nofollow">View all dates</a></div>
<script type="text/javascript">
var _vrbo_widget = "true";
var _vrbo_base_url = "http://www.vrbo.com";
var _vrbo_listing_id = 610049;
var _vrbo_months = 1;
var _vrbo_orientation = "vertical";
var _vrbo_bg_color = "#E5DAAD";
</script>
<script type="text/javascript" src="http://www.vrbo.com/resources/current/scripts/calendarwidget.js"></script></div>

</td>
<td width="15px"></td>
<td style="padding-right: 35px;">To request a reservation or for additional details, <a href="http://www.vrbo.com/610049" target="_blank">visit our page on VRBO</a>. 
If you don't see the dates you are looking for, check out our <a href="heritage-suite.php">Heritage Suite</a> for availability.
<div class="notice">Dates shown in white are still available!</div></td>
</tr>
</table>
</div>
    </div><div class="footer"><?php include("master/includes/footer.frontend.php") ?></div>
	
</div>
</div>

<iframe src="http://www.vrbo.com/402580" id="prs_vrbo" style="width: 960px;"></iframe>


</body>
</html>
