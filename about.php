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
		if (!isset($_GET['view']))
		{
			setTitle("About the Portfolio");
		}
		
		// If the user is looking at one of the pages
		// Just in case, let's lowercase everything
		else
		{
			switch(strtolower($_GET['view']))
			{
				case "contact":
					setTitle("Contact Me");
					break;
				case "license":
					setTitle("Licenses");
					break;
				case "resume":
					setTitle("My Resume");
					break;
				default:
					setTitle("About the Portfolio");
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
									if (!isset($_GET['view']))
									{
										include("pages/about/about.php");
									}
									
									// Let's show the Other pages
									else
									{
										switch(strtolower($_GET['view']))
										{
											case "contact":
												include("pages/about/contact.php");
												break;
											case "license":
												include("pages/about/license.php");
												break;
											case "resume":
												include("pages/about/resume.php");
												break;
											default:
												include("pages/about/about.php");
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