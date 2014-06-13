<?php 
error_reporting (E_ALL ^ E_NOTICE);
if(is_file('./install_dat.php')){
	header("Location: install.php");
	exit;
}
extract($HTTP_POST_VARS);
extract($HTTP_GET_VARS);
include 'cl_files/calendar.php';
?>
<html>
<head>
	<title>PHP Calendar</title>
	<meta name="description" content="PHP Event Calendar is reusable PHP script extending web site's functilality with event scheduler or news archive. Nice looking calendar is dynamically created on the user's page.">
	<meta name="keywords" content="PHP Event Calendar, scheduler, news archive, server side calendar, netscape, explorer, IE, opera, calendar, date, timestamp">
	<meta name="robots" content="index,follow">
	<!-- please register to get php calendar documentation -->
<style>
	a
		{color: #0000aa; text-decoration: none; font-family: Tahoma, Verdana; font-size: 11px}
	A:hover
		{color: #ff0000;}
	p, tr, td, ul, li
		{color: #000000; font-family: Tahoma, Verdana; font-size: 11px}
	form
		{margin: 5px;}
	.header1, h1
		{color: #ffffff; background: #4682B4; font-weight: bold; font-family: Tahoma, Verdana; font-size: 13px; margin: 0px; padding: 2px;}
	.header2, h2
		{color: #000000; background: #DBEAF5; font-weight: bold; font-family: Tahoma, Verdana; font-size: 12px;}
	.intd
		{color: #000000; font-family: Tahoma, Verdana; font-size: 11px; padding-left: 15px;}
	.Cheader
		{color: #ffffff; font-family: Tahoma, Verdana; font-size: 11px;}
	.Cheader2
		{color: #ffffff; font-family: Tahoma, Verdana; font-size: 11px;}
	.Ccur
		{color: #000000; font-family: Tahoma, Verdana; font-size: 11px;}
	.Cbody
		{color: #000000; font-family: Tahoma, Verdana; font-size: 11px;}
	.Cbodyh
		{color: #606060; font-family: Tahoma, Verdana; font-size: 11px;}
	.Cwe
		{color: #000000; font-family: Tahoma, Verdana; font-size: 11px;}

	.C2header
		{color: #4682B4; font-family: Tahoma, Verdana; font-size: 11px;}
	.C2header2
		{color: #4682B4; font-family: Tahoma, Verdana; font-size: 11px;}
	.C2cur
		{color: #000000; font-family: Tahoma, Verdana; font-size: 11px;}
	.C2body
		{color: #000000; font-family: Tahoma, Verdana; font-size: 11px;}
	.C2bodyh
		{color: #99CCFF; font-family: Tahoma, Verdana; font-size: 11px;}
	.C2we
		{color: #FF33CC; font-family: Tahoma, Verdana; font-size: 11px;}
</style>
</head>
<body bottommargin="15" topmargin="15" leftmargin="15" rightmargin="15" marginheight="15" marginwidth="15" bgcolor="white">

<!-- Header -->
<table cellpadding="0" cellspacing="0" width="100%" border="0">
<tr>
	<td width="350" rowspan="2"><img src="cl_files/img/php_ec.gif" width="350" height="80" border="0" alt="PHP event calendar"></td>
	<td align="right" valign="top"><img src="cl_files/img/logo.gif" width="178" height="30" border="0" alt="Softcomplex logo"></td>
</tr>
<tr>
	<td align="right" valign="bottom" nowrap>
	<b>
	|&nbsp;<a class="a" href="http://www.softcomplex.com/about.html">About&nbsp;Us</a>&nbsp;
	|&nbsp;<a class="a" href="http://www.softcomplex.com/services.html">Services</a>&nbsp;
	|&nbsp;<a class="a" href="http://www.softcomplex.com/download.html">Download</a>&nbsp;
	|&nbsp;<a class="a" href="http://www.softcomplex.com/order.html">Order</a>&nbsp;
	|&nbsp;<a class="a" href="http://www.softcomplex.com/support.html">Support</a>&nbsp;
	|
	</b>
	</td>
</tr>
<tr><td><img src="cl_files/img/pixel.gif" width="1" height="5" border="0"></td></tr>
</table>
<!-- /Header -->

<!-- Body -->

<table cellpadding="0" cellspacing="0" border="0" bgcolor="#4682B4" width="100%"><tr><td>
	<table cellpadding="0" cellspacing="1" width="100%" border="0">
	<tr>
		<td class="header1" valign="top" nowrap>PHP Event Calendar v1.5</td>
		<td class="header1" valign="top" width="100%">&nbsp;</td>
	</tr>
	<tr>
		<td valign="top" bgcolor="#FFFFFF">
		<table cellspacing=1 cellpadding=3 width="100%" border=0>
		<tr>
			<td class=header2>Notes</td></tr>
		<tr>
			<td class=intd>On the right hand side you can see two event calendars the way they can appear on your site. Each calendar can be independently configured via secure control panel. Clicking on the date brings event list for that date. Feel free to experiment with these calendars and control panel.
			</td>
		</tr>
		<tr>
			<td><img height=1 src="cl_files/img/pixel.gif" width=250 border=0></td></tr>
		<tr>
			<td class=header2>Advantages</td></tr>
		<tr>
			<td class=intd>
			<p><b>Easy maintenance</b> -  Application is fully configurable via convenient control panel. No more need to edit any HTML when you want to publish new event on your site.
			<p><b>Cost Saving Component</b> -It takes only minutes to install PHP Event Calendar on your site. Minimal requirements to server features. Improve the way you manage event and news on your site instantly
			<p><b>Professional Look</b> - Simple great looking improvement to the user interface of your web application. Appearance of the calendar and event pages are easily tuned to conform feel and look of your site.</p>
			</td></tr>
		<tr><td><img height=1 src="cl_files/img/pixel.gif" width=1border=0></td></tr>
		<tr><td class="header2">Vote for the script</td></tr>
		<tr>
			<td class="intd">
			If you like the script, please vote for it. We do appreciate this much.
			<form action="http://www.hotscripts.com/cgi-bin/rate.cgi" method="POST" target="_new">
			<input type=hidden name="ID" value="26753"><a href="http://www.hotscripts.com/Detailed/26753.html" target="_blank"><b>HotScripts.com</b></a> :
			<select name="rate" size="1" style="font-size:10px;">
				<option selected value="5">Excellent!</option>
				<option value="4">Very Good</option>
				<option value="3">Good</option>
				<option value="2">Fair</option>
				<option value="1">Poor</option>
			</select>&nbsp;<input type="submit" value="Rate It!" style="font-size:10px;">
			</form>
	
			<form action="http://www.scriptsearch.com/cgi-bin/rateit.cgi" method="post" target="_new">
			<input type="hidden" name="ID" value="9545"><a href="http://www.scriptsearch.com/details/9545.html" target="_blank"><b>ScriptSearch.com</b></a> :
			<select name="rate" size="1" style="font-size:10px;">
				<option value="5" selected>Excellent!</option>
				<option value="4">Very Good</option>
				<option value="3">Good</option>
				<option value="2">Fair</option>
				<option value="1">Poor</option>
			</select>&nbsp;<input type="submit" value="Vote!" style="font-size:10px;">
			</form>
			</td>
		</tr>
		<tr><td class=header2>Links</td></tr><tr>
		<td class=intd><b>
			<ul>
				<li><a href="http://www.softcomplex.com/products/php_event_calendar/">Product page</a>
				<li><a href="http://www.softcomplex.com/forum/forumdisplay.php?fid=55">Product forum</a>
				<li><a href="http://www.softcomplex.com/products/php_event_calendar/docs/index.html">Documentation</a>
				<li><a href="http://www.softcomplex.com/products/php_event_calendar/order.html">Order NOW!</a> 
		</ul></b></td></tr>
		</table>
		</td>
		<td valign="top" bgcolor="#FFFFFF">
		<img src="cl_files/img/pixel.gif" width="1" height="15" border="0"><br>
		<table border="0" cellpadding="0" cellspacing="0" align="center">
		<tr>
			<td class="SectionText">
			<table cellspacing="0" cellpadding="0" width="100%" border="0">
			<tr>
				<td width="50%" align="center" valign="top">
				<?php 
				// for $calendar_name please, use only characters allowed for file names
				new calendar('Demo_horizontal');
				?>
				</td>
				<td><img src="cl_files/img/pixel.gif" width="30" height="1" border="0"></td>
				<td width="50%" align="center" valign="top">
				<?php 
				new calendar('Demo_vertical');
				?>
				</td>
			</tr>
			</table>
			<p align="center">Both calendars are controled from <b><a href="cl_files/index.php">Control panel</a></b> (login: admin password: demo)
<?php 
				$calendar->init('Demo_horizontal');
				$calendar->show_event();
?>
			</td>
		</tr>
		</table>
		<img src="cl_files/img/pixel.gif" width="1" height="15" border="0"><br>
		</td>
	</tr>
	</table>
	</td></tr></table><!-- /Body -->

<!-- Footer -->
<table cellpadding="3" cellspacing="0" width="100%" border="0">
<tr bgcolor="#4682B4">
	<td style="color: #FFFFFF;" nowrap>Copyright &copy;2003 Softcomplex.</td>
	<td align="right"><a href="http://www.softcomplex.com/support.html" style="color: #FFFFFF;">support</a></td>
</tr>
</table>
<!-- /Footer -->
</body>
</html>