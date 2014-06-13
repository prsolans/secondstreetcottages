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
      <?php include("master/includes/header.frontend.php") ?>
    </div>
    <div class="main">
      <div class="main-left"><img src="images/img_beds.jpg" alt="Ashland, OR cottage" />
        <div class="main-left-menu">
          <?php include("master/includes/leftmenu.frontend.php") ?>
        </div>
      </div>
      <div class="main-right"> <img src="images/hd_suite.jpg" alt="Our Suites - Second Street Cottages, Ashland, OR" />
       
        <h1 style="padding-top: 13px"><img src="images/imgs_heritage.jpg" align="right" /><A href="heritage-suite.php">Heritage Suite</A></h1>
        The Heritage Suite is a charming four bedroom cottage with three full bathrooms that can accommodate up to eight people.

        <h1 style="clear: both; padding-top: 25px"><img src="images/imgs_garden.jpg" align="right" /><A href="garden-suite.php">Garden Suite</A></h1>
        Our Garden Suite features two bedrooms and two full bathrooms and can accommodate up to five people.

      <!--  <h1 style="clear: both; padding-top: 25px"><img src="images/img_hideaway.png" align="right" /><a href="hideaway-suite.php">Hideaway Suite</a></h1>
        The Hideaway Suite has a large master bedroom and full bathroom upstairs as well as a small bedroom and full bath on the main floor. It can accommodate up to three people.-->

      </div>
    </div>
    <div class="footer">
      <?php include("master/includes/footer.frontend.php") ?>
    </div>
  </div>
</div>
</body>
</html>
