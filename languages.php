<!DOCTYPE HTML>
<!--
	Twenty 1.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
	<?php
		// Include the Header functions
		include("functions/html_head.php");
		
		// Include the Footer Nav functions
		include("functions/footer-nav.php");
		
		// We need to write the page title
		// By default...
		if (!isset($_GET['type']))
		{
			setTitle("My Skills");
		}
		
		// If the user is looking at one of the pages
		// Just in case, let's lowercase everything
		else
		{
			switch(strtolower($_GET['type']))
			{
				case "desktop":
					setTitle("Desktop Languages - My Skills");
					break;
				case "web":
					setTitle("Web Languages - My Skills");
					break;
				default:
					setTitle("My Skills");
			}
		}
		
		// Write the rest of the Page Header
		writeHeader();
		
		// Write the Navigation Menu
		include("functions/navigation.php");
	?>
	<body class="no-sidebar loading">
	
		
		<!-- Main -->
			<article id="main">
					
				<!-- One -->
					<section class="wrapper style4 container">
					
						<!-- Content -->
							<div class="content">
								<?php
									// The user does not have a specific item to view
									// Let's show the generic page
									if (!isset($_GET['type']))
									{
										include("programming-skills/index.php");
									}
									
									// Let's show the Other pages
									else
									{
										switch(strtolower($_GET['type']))
										{
											case "desktop":
												include("programming-skills/desktop.php");
												break;
											case "web":
												include("programming-skills/web.php");
												break;
											default:
												include("programming-skills/index.php");
										}
									}
								?>
							</div>

					</section>
                    <?php
						openFooterNav();
						writeFooterNav("old-projects");
						writeFooterNav("new-projects");
						writeFooterNav("old-portfolio");
						closeFooterNav();
					?>

				
					
			</article>

		<?php
		include("functions/footer.php");
		?>

	</body>
</html>