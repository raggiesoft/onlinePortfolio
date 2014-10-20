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
		if (!isset($_GET['age']))
		{
			setTitle("My Projects");
		}
		
		// If the user is looking at one of the pages
		// Just in case, let's lowercase everything
		else
		{
			switch(strtolower($_GET['age']))
			{
				case "old":
					if (!isset($_GET['name']))
					{
						setTitle("Older Projects - My Projects");
					}
					else
					{
						// Older projects that I no longer maintain
						switch(strtolower($_GET['name']))
						{
							case "openttd":
								setTitle("OpenTTD Installer - Older Projects - My Projects");
								break;
							default:
								setTitle("Older Projects - My Projects");
						}
					}
				case "new":
					if (!isset($_GET['name']))
					{
						setTitle("Newer Projects - My Projects");
					}
					else
					{
						switch(strtolower($_GET['name']))
						{
							case "presentation":
								setTitle("Presentation Viewer - Newer Projects - My Projects");
								break;
							default:
								setTitle("Newer Projects - My Projects");
						}
					}
					break;
				default:
					setTitle("My Projects");
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
									if (!isset($_GET['age']))
									{
										include("projects/index.php");
									}
									
									// Let's show the Other pages
									else
									{
										switch(strtolower($_GET['age']))
										{
											case "old":
												if (!isset($_GET['name']))
												{
													include("projects/old/index.php");
												}
												else
												{
													switch(strtolower($_GET['name']))
													{
														case "openttd":
															include("projects/old/openttd.php");
															break;
														default:
															include("projects/old/index.php");
													}
												}
												break;
											case "new":
												if (!isset($_GET['name']))
												{
													include("projects/new/index.php");
												}
												else
												{
													switch(strtolower($_GET['name']))
													{
														case "presentation":
															include("projects/new/presentation.php");
															break;
													}
												}
												break;
											default:
												include("projects/index.php");
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