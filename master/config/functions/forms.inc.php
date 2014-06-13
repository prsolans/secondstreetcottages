<?php
##################################################################
#          Joyel Puryear / Master Configuration System           #
#                   The Freelance Businessman                    #
#              http://www.freelancebusinessman.com               #
#                 Copyright Joyel Puryear 2006                   #
#                     &copy;Master Framework                     # 
##################################################################

// File Information: This file contain's a list of functions pertaining to
// validation and forms

// BASIC FUNCTIONS: These are a list of basic validation related functions
// used only, or primarily for basic or advanced validation purposes.

// Function Start:
// Function Name: validateemail()
// Function Parameters: 1
// Function Process: It check's the email for various things
// 1. To find out if it's been filled out.
// 2. To make sure it's got the proper dns name server's
// 3. To make sure it's formatted properly with regular expressions

// Function: 
function validateemail($email) {
	global $errorhandler;
// set regular expression to test email
	if ($email == "") {
		$errorhandler .= "The email address was left blank.<br />";
	}
	$regexemail = 
"^[A-Za-z0-9\._-]+@([A-Za-z0-9][A-Za-z0-9-]{1,62})(\.[A-Za-z][A-Za-z0-9-]{1,62})+$";
	if (!ereg("$regexemail", $email)) {  // test for formatting
		$errorhandler .= "The email address is improperly formatted<br />";

	}
	// test email domain name for existence
	if(!(getmxrr(substr(strstr($email, '@'), 1), $temp)) || checkdnsrr(gethostbyname(substr(strstr($email, '@'), 1)), "ANY")) {
		$errorhandler .= "The Domain name for the email address does not exist<br />";
	}	
}

// End function


// Function Start:
// Function Name: errorhandler()
// Function Parameters: 2
// Function Process: It take's the parameter error handler, and checks to see if it
// was filled out with something, if it has something filled out, it auto-echo's the error
// message that I normally end up using.  I also added a new parameter, this parameter will allow me 
// to pass a url to display to it as well.
function errorhandler($errorhandler, $url) {
	if ($errorhandler != "") {
		echo "<span style=\"color:red\">";
		echo $errorhandler;
	if ($url != "no") {
		echo $url;
	}
		echo "</span>";

	}
}
// End Function

// END BASIC FUNCTIONS



// FORM FUNCTIONS: These are functions that are meant to auto-create various tasks that I end
// up doing rather repetitively throughout my programs.


// Function Start:
// Function Name: text()
// Function Parameters: 4
// Function Process: This function automatically created a form field of the text type.
// It also creates the appropriate label tag and other attributes as well.
function text($name, $dname, $maxlength, $value) {
	echo "<label for=\"{$name}\">{$dname}</label><br />\n";
	echo "<input name=\"{$name}\" id=\"{$name}\" type=\"text\" maxlength=\"{$maxlength}\" 
	value=\"{$value}\" /><br />\n";
}
// End Function

// Function Start:
// Function Name: select()
// Function Parameters:
// Function Process: This takes the parameter's necessary and constructs the 
// select type based on the entered attributes
function select($name, $label, $value) {
	echo "<label for=\"{$name}\">{$label}</label>\n";
	echo "<input name=\"{$name}\" id=\"{$name}\" type=\"checkbox\" value=\"{$value}\" /><br />\n";
}

// End Function


// Function Start:
// Function Name: tempvar()
// Function Parameters: 2
// Function Process: This is used to create the necessary setup to auto-populate select menu's
// I simply pass this function to each option of the select statement, with the first parameter
// being the value of the text field, and hte second one, being the session, or other storage 
// method, to see if it's selected or not.

function tempvar($variable, $testvariable) {
	if ($variable == $testvariable) {
		echo 'selected="selected"';
	}
}

// END FORM FUNCTIONS

?>