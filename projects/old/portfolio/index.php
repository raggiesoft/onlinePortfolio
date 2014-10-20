


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Recreations  
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20110503

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	// For accessing Functions
	
	// Playing with CSV
	include ("functions/file_reader.php");
	// Resize Images
	include("functions/SimpleImage.php");
	?>	
	
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" />
<title>Michael Ragsdale's Online Portfolio</title>
<?php
// Non-mobile site gets the nicely done stylesheet
// IE 6 Detection
include("functions/ie6_detect.php");

?>
</head>
<body>
<?php
	// This little beauty shows an ugly red bar if you're running
	// Internet Explorer 6.0
	if ($ie6alert == TRUE) {
		displayIE6Error();
	}
	?>
<div id="wrapper">
	<div id="header">
	<?php
	include("pages/head_logo.php");
	?>
	</div>
	<!-- end #header -->
	<div id="menu">
	<?php
	// Show the Menu Bar
	include("pages/menu.php");
	?>
	</div>
	<!-- end #menu -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<?php
			
			if (!isset($_GET['page'])) {
				// No URL token.  Show home page
				include("pages/home.php");
			}
			else {
				// User wants to go somewhere else.  Let's take them there!!
				if (!file_exists("pages/" . $_GET['page'] . ".php")) {
					// The requested page isn't found!!
					include("pages/404.php");
				}
				else {
					// The requested page does exist.  Let's take the user there.
					// We do need to be careful that certain pages aren't accessed.
					// The Sidebar, Header, etc.
					
					// This array contains pages you DON'T want to show in the main contents section
					$doNotShow = array("404",
					"copyright",
					"head_logo",
					"menu",
					"sidebar");
					if (in_array($_GET['page'], $doNotShow)) {
						// The user asked for a page that shouldn't be shown.  Throw up the Error 404 Page.
						include("pages/do_not_show.php");
					}
					else {
						// The file exists that the user wants to go to, and it's allowed.
						// Include() it here
						include("pages/" . $_GET['page'] . ".php");
					}
				}
			}
			?>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<?php
			// Shows the sidebar.  Currently, it's just the Chapter Listing
			if (file_exists("pages/sidebar.php")) {
				// Display the sidebar
				include("pages/sidebar.php");
			}
			else {
				//Sidebar can't be found
				echo("			<ul>\n");
				echo("				<li>\n");
				echo("					<h2>Sidebar Error</h2>\n");
				echo("					<p>Unable to load Sidebar</p>\n");
				echo("				</li>\n");
				echo("			<u/ul>\n");
			}
			?>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
</div>
	<div id="footer">
		<?php
		include("pages/copyright.php");
		?>
	</div>
	<!-- end #footer -->
</body>
</html>
