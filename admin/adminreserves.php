<?php
require_once($docroot . "../master/config/config.php");

// -- put control of login access here



// 
// Recive and Select if the type of VIEW and VARIABLES is to save new days reserved in the system or remove reserves 
//

 // if recive a selection across the button of the first form named : swapFunction


  $selectOrDeselect = $_POST['selectOrDeselect'];
  
  if (isset($selectOrDeselect) && $selectOrDeselect == "removeReserves") 
  {
     $messageButton =  "Add new reserves";
     $optionInArray = "== -1";
     $messageAction = "remove reserve selected";
  }
  else
  {
     $messageButton =  "Remove reserves";
     $optionInArray = "!= -1";
     $messageAction = "confirm reserve selected";
  
  }


// ------------- this is the part of code that control to INSERT and DELETE data about the reserves.(input from the form of the same page)

if (isset($_POST['suite']) && isset($_POST['date'])) // if recive a selection across the button of the first form named : swapFunction
{

  $iSuite 		= '' . $_POST['suite'];
  $iDate 		= '' . $_POST['date'];
  
 // echo $iSuite;
 // echo $iDate;
  
  
  $iMonth 	= substr($iDate, 0, strpos($iDate, "/"));
  $iDay 	= substr($iDate, strpos($iDate, "/") + 1, strrpos($iDate , "/") -2);
  $iYear 	= substr($iDate, strrpos($iDate, "/") + 1, strlen($iDate));
  
  //echo $iDay 	. " - ";
  //echo $iMonth 	. " - ";
  //echo $iYear 	. " - " ;
  
  
  if (  $_POST['selectOrDeselect'] == "removeReserves") 
  {
  	// remove  an existing reserved date
  	
  	$query = "DELETE FROM reservedDays" . $iSuite . " WHERE day = $iDay AND month = $iMonth  AND year = $iYear;";
  }
  else
  {
  	// insert a new reserved date
  	
  	$query = "INSERT INTO reservedDays" . $iSuite . " (day,month,year) VALUES ($iDay,$iMonth,$iYear);";
  }
  
  // echo $query;
  
  mysql_query($query);
	    
}


// ------------- End of code INSERT & DELETE

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Home of Second Street Cottages, Act 2</title>
<link rel="stylesheet" href="../master/css/admin.css" type="text/css" media="screen" />
<link type="text/css" href="../master/css/custom-theme/jquery-ui-1.7.2.custom.css" rel="stylesheet" />	
<link type="text/css" href="../master/css/custom-theme-2/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
<script type="text/javascript" src="../master/javascript/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../master/javascript/jquery-ui-1.7.2.custom.min.js"></script>
<style type="text/css">

Cheader {color: #000000; font-size: 24px; }

body {
	
	border: 1px solid #cd0a0a; 
	background: #fef1ec url(images/ui-bg_inset-soft_95_fef1ec_1x100.png) 50% bottom repeat-x; 
	color: #000000;
	font-family: Garamond, Georgia, Palatino, serif;
}
</style>


<script>

//
// confirm that exists an election ,set the values into the form fields and submit.
//

function myConfirm(theForm)
{

    var tdate = document.getElementById('contextDate').innerHTML;
    var suite = document.getElementById('contextSuite').innerHTML;

    if (tdate != null && tdate != "")
    {
       theForm.suite.value= suite;
       theForm.date.value= tdate;
       theForm.submit();
    }
    
}


function swapView(theForm)
{
  var sel = theForm.selectOrDeselect;
  
  if ( sel.value == "removeReserves")  sel.value = "inputReserves";
  else sel.value = "removeReserves";
  
  theForm.submit();
}

</script>
</head>

<body id="adminbody">

<center>
<h1>Reservations System</h1>
</br>
</br>


<form name="confirmReserve" id="confirmReserve" method="POST" action="adminreserves.php">


	<input type="hidden" name="suite" id="suite" value=""/>
	<input type="hidden" name="date" id="date" value=""/>
	<input type="hidden" name="selectOrDeselect" id="selectOrDeselect"  value="<? echo $selectOrDeselect ?>"/>


<table>
  <tr>
    <td align="center">
       <h2>Heritage Suite</h2>
       <div id="datepickerHeritage"></div>
    </td>
    <td>&nbsp;&nbsp;</td>
    <td align="center">
	<h2>Garden Suite</h2>
	<div id="datepickerGarden" class="garden"></div>
    </td>
  </tr>
</table>
</br>
</br>
</br>
</br>



	<table with="100%" >
	
	  <tr>
	     <td>Suite selected : [ </td>
	     <td>
	        <div id="contextSuite" /> 
	     </td>
	     <td> ] </td>
	  </tr>
	  <tr>
	     <td>Date selected : [ </td>
	     <td>
	        <div id="contextDate" /> 
	     </td>
	     <td> ] </td>
	  </tr>
	  <tr>
	     <td colspan="3">
	     </br>
	     </br>
	        <input type="button" name="bsubmit" id="bsubmit" disabled value="<? echo $messageAction ?>" onclick="javascript:myConfirm(this.form);" style="font-family: Garamond, Georgia, Palatino, serif;"/>
	     </td>
	  </tr>
	</table>

	<table with="100%" >
	  <tr>
	     <td colspan="3">
	     </br>
	     </br>
	        Go to : <input type="button" id="swapview" value="<? echo $messageButton ?>" onclick="javascript:swapView(this.form);" style="font-family: Garamond, Georgia, Palatino, serif;"/>
	     </td>
	  </tr>
	</table>
</form>

</center>

<script type="text/javascript">
	
	var heritageremoveReserves = [<?
	
	
	//
	// Create the array with the days reserved by HERITAGE SUITE
	//
	
	$result = mysql_query("SELECT day,month,year FROM reservedDaysHeritage;");
	
	$numf=mysql_num_rows($result); 
	
	if ($numf != 0)
	{
		
		$aux = "";
		
		while($t = mysql_fetch_object($result)) {
		
			$day = $t->day;
			$month = $t->month;
			$year = $t->year;
			
			echo $aux . "\"" . $month . "/" . $day ."/" . $year  . "\"";
			
			$aux = ",";
			
		}
	}
	
	?>];


	var gardenremoveReserves = [<?

	//
	// Create the array with the days reserved by GARDEN SUITE
	//
	
	$result = mysql_query("SELECT day,month,year FROM reservedDaysGarden;");
	
	
	$numf=mysql_num_rows($result); 
	
	if ($numf != 0)
	{
	
		while($t = mysql_fetch_object($result)) {
		
			$day = $t->day;
			$month = $t->month;
			$year = $t->year;
			
			echo $aux . "\"" . $month . "/" . $day ."/" . $year  . "\"";
			
			$aux = ",";
			
		}
	}
	
	?>];

	// 
	// This part initialize the Calendars in order to appear into the DIV layers.
	//
	
	$(document).ready(function(){

		// Datepicker
				$('#datepickerHeritage').datepicker({
					inline: true,
					 minDate:'0', 
    					maxDate: '+12M',
					beforeShowDay : removeReservesHeritage,
					onSelect   : selectedDayHeritage
				});
				
				// Datepicker
				$('#datepickerGarden').datepicker({
					inline: true,
					 minDate:'0', 
    					maxDate: '+12M',
					beforeShowDay : removeReservesGarden,
					onSelect   : selectedDayGarden
				});
				
				
				
		//hover states on the static widgets
		$('#dialog_link, ul#icons li').hover(
			function() { $(this).addClass('ui-state-hover'); }, 
			function() { $(this).removeClass('ui-state-hover'); }
		);
		
	});
		
	

	function removeReservesHeritage(date)
	{
	   return removeReserves(date,heritageremoveReserves);
	}

	function removeReservesGarden(date)
	{
	   return removeReserves(date,gardenremoveReserves);
	}

	function removeReserves(date, natDays)
	{
	
	   if(natDays != null && natDays.length > 0 )
	   {
	   	var theDate = (date.getMonth()+1).toString() + "/" + date.getDate().toString() + "/" + date.getFullYear().toString(); 
	   	
		for (i = 0; i < natDays.length; i++) 
		{ 
		      if ($.inArray(theDate, natDays) <? echo $optionInArray; ?>)
		      { 
		        return [false, "","reserved"]; 
		      } 
		 } 
	   }
	   <?
	     //
	     // in this case , not exists data because not exists any reserveed day.
	     //
	     if ($selectOrDeselect == "removeReserves") 
	     {
	     ?>
	     else
	     {
	       return [false, "","reserved"]; 
	     }
	     <?
	     }
	   
	   ?>
	   
	   
	   return [true, '']; 
	}
	
	
	//
	// Functions fired when select a day in the Calendar.
	//
	
	function selectedDayHeritage (dateText, inst)
	{
	  selectedDay (dateText, inst, 'Heritage');
	}
	
	function selectedDayGarden (dateText, inst)
	{
	  selectedDay (dateText, inst, 'Garden');
	}
		
	function selectedDay (dateText, inst, name)
	{
	   var date = new Date(dateText)
	   var theDate = (date.getMonth()+1).toString() + "/" + date.getDate().toString() + "/" + date.getFullYear().toString(); 
	   
	   document.getElementById('contextDate').innerHTML = theDate;
	   document.getElementById('contextSuite').innerHTML = name;
	   document.getElementById('suite').value = name;
	   
	   document.getElementById('bsubmit').disabled = false;
	   
	}			
</script>


</body>
</html>

