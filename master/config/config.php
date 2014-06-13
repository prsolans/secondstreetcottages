<?php
session_start(); // starts session automatically
##################################################################
#          Joyel Puryear / Master Configuration System           #
#                   The Freelance Businessman                    #
#              http://www.freelancebusinessman.com               #
#                 Copyright Joyel Puryear 2006                   #
#                    &copy;Master Framework                      # 
##################################################################
/* Config File for the master framework */
// Master Variables
$docroot = $_SERVER['DOCUMENT_ROOT'] . "/";
$contactemail = "paul@prsolans.com";
$elevel = 2; // level of error function (either 0 for off, 1 for on)
$dbactive = "yes"; // either yes or no
$dbhost = "localhost"; // Normally local host
$dbusername = "dbo202727060";
$dbpassword = "q2Y7v759";
$db = "db202727060";

// connection information
if ($dbactive = "yes") { // if yes perform db work
mysql_connect($dbhost, $dbusername, $dbpassword);
mysql_select_db($db);
}


// making my include's work properly

// Handling php security issues
require_once($docroot . 'master/config/functions/security.inc.php'); // security include
error($elevel); // function to set error level, defaulted to all and strict.
ini_set("magic_quotes_gpc", 0);
ini_set("register_globals", 0);

// include master function controller
include($docroot . 'master/config/functions/master.inc.php'); // master include

// side include
// DO NOT touch this include, this set's an include, that allows the fckeditor to be used
// throughout the website were needed.
// include($docroot . 'admin/FCKeditor/fckeditor.php');  // editor include, sitewide incase needed.
?>