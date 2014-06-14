<?php
//require_once("master/config/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Hideaway Suite - Ashland, OR</title>
<?php
include("master/includes/meta.inc.php");
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
	<div class="main" style="height: 700px;">
    
      <div class="main-left"><img src="images/img_flower.jpg" alt="Ashland, OR cottage" />
      <div class="main-left-menu">
	<?php include("master/includes/leftmenu.frontend.php") ?>
	  </div></div>
      
      <div class="main-right"> <img src="images/hd-hideaway-suite.png" alt="Hideaway Suite - Second Street Cottages, Ashland, OR" />
      
      
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
    var frankfurt = "https://picasaweb.google.com/data/feed/base/user/PRSolans/albumid/5667133206551281537?alt=rss&kind=photo&authkey=Gv1sRgCJbdl7LL-_74RQ&hl=en_US&thumbsize=800";
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

<p>The Hideaway is perfect for relaxing in a fresh, cozy and comfortable two-level suite. Upstairs is a large master bedroom over-looking the Rogue Valley with a spacious full bathroom. A second small bedroom on the first floor has its own full bath. </p>
<p>Hideaway Suite has a living room and dining area, fully-equipped kitchen, TV, DVD,  private washer/dryer, central air, off-street parking and an outdoor deck. </p>

        <?
//error_reporting (E_ALL ^ E_NOTICE);
//extract($HTTP_POST_VARS);
//extract($HTTP_GET_VARS);
//include '/homepages/30/d162063315/htdocs/secondstreet/master/cal/cl_files/calendar.php';
?>
        <table>
          <tr>
            <td>
<h1 style="margin-top: -25px">Availability</h1>
<iframe src="https://www.google.com/calendar/embed?showTitle=0&showPrint=0&&showTabs=0&showCalendars=0&showTz=0&height=280&wkst=1&src=f26eicmt5udgu8jebpi118hha4%40group.calendar.google.com&color=%237A367A&ctz=Pacific/Apia&gsessionid=OK" style=" border-width:0 " width="240" height="280" frameborder="0" allowtransparency="true" scrolling="no"></iframe>
</td>
<td width="15px"></td>
<td style="padding-right: 35px">To request a reservation, please fill out the form on our <a href="availability.php">suite availability</a> page. 
If you don't see the dates you are looking for, check out our <a href="heritage-suite.php">Heritage Suite</a> and <a href="garden-suite.php">Garden Suite</a> for availability.
<div class="notice">Dates shown in white are still available!</div></td>
</tr>
</table>
</div>
    </div><div class="footer"><?php include("master/includes/footer.frontend.php") ?></div>
	
</div>
</div>

</body>
</html>
