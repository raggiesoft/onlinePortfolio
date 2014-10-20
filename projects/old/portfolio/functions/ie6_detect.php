<?php
include("functions/ie6_display.php");
	//**************************************//  
	//                                      //  
	//  Graceful IE6 Detect Advise w/jQuery //  
	//      by: Joe Watkins                 //  
	//      http://www.thatgrafix.com       //  
	//                                      //  
	//**************************************//  
	  
	// IE6 string from user_agent  
	$ie6 = "MSIE 6.0";  
	  
	// detect browser  
	$browser = $_SERVER['HTTP_USER_AGENT'];  
	  
	// yank the version from the string  
	$browser = substr("$browser", 25, 8);  
	  
	// html for error  
	
	  
	// if IE6 set the $alert   
	if($browser == $ie6){
		$ie6alert = TRUE;
	}  
	?>