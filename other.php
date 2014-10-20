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
		if (!isset($_GET['skill']))
		{
			setTitle("Other Skills");
		}
		
		// If the user is looking at one of the pages
		// Just in case, let's lowercase everything
		else
		{
			switch(strtolower($_GET['skill']))
			{
				case "bus":
					setTitle("Public Transit Policy - Other Skills");
					break;
				default:
					setTitle("Other Skills");
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
									// Let's show the generic About page
									if (!isset($_GET['skill']))
									{
										include("other-skills/index.php");
									}
									
									// Let's show the Other pages
									else
									{
										switch(strtolower($_GET['skill']))
										{
											case "bus":
												include("other-skills/bus.php");
												break;
											default:
												include("other-skills/index.php");
										}	
									}
								?>
							</div>

					</section>
                    <?php
						openFooterNav();
						writeFooterNav("resume");
						writeFooterNav("contact");
						writeFooterNav("license");
						closeFooterNav();
					?>

				
					
			</article>

		<?php
		include("functions/footer.php");
		?>

	</body>
</html>