<?php
##################################################################
#          Joyel Puryear / Master Configuration System           #
#                   The Freelance Businessman                    #
#              http://www.freelancebusinessman.com               #
#                 Copyright Joyel Puryear 2006                   #
#                     &copy;Master Framework                     # 
##################################################################
// Basic Security Functions (called on config.php page)
// Used with master framework

// The following function set's the level of error display.  
function error($elevel) {
switch ($elevel) {
	case 0:
	error_reporting(0); // off
	ini_set('display_errors', 'Off');
    ini_set('log_errors', 'On');
	case 1: 
	error_reporting(E_ALL | E_STRICT); // all with strict
	ini_set('display_errors', 'On');
	ini_set('log_errors', 'Off');
	case 2:
	error_reporting(E_ALL ^ E_NOTICE);
	ini_set('display_errors', 'On');
	ini_set('log_errors', 'Off');
	}
}
?>