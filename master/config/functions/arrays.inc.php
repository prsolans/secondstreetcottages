<?php
##################################################################
#          Joyel Puryear / Master Configuration System           #
#                   The Freelance Businessman                    #
#              http://www.freelancebusinessman.com               #
#                 Copyright Joyel Puryear 2006                   #
#                     &copy;Master Framework                     # 
##################################################################
// Array related functions functions
// Used with the master framework

// Function Start:
// Function Name: dumparray()
// Function Parameters: 1
// Function Process: Automatically drops out detailed, layed out information about an array
// along with all it's key's and variables
function dumparray($array) {
	echo '<pre style="text-align: left;">' . print_r($array, true) . '</pre>';
}

?>