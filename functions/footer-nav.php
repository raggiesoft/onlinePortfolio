<?php
	// Write out the beginning of the Footer Nav.  This is the same for evey single page
	function openFooterNav()
	{
		?>
                <!-- Two -->
					<section class="wrapper style1 container special">
						<div class="row">
							
		<?php
	}
	
	// These building blocks create the Footer Navigation objects
	
	function writeFooterNav($footerItem)
	{
		switch(strtolower($footerItem))
		{
			case "old-projects":
?>
							<div class="4u">
                                <section>
									<header>
										<h3>Old Projects</h3>
									</header>
									<p>My older projects, kept here for archival reasons</p>
									<footer>
										<ul class="buttons">
											<li><a href="projects.php?age=old" class="button small">Old Projects</a></li>
										</ul>
									</footer>
								</section>
							
							</div>
                     <?php
				break;
			case "new-projects":
?>
							<div class="4u">
                                <section>
									<header>
										<h3>New Projects</h3>
									</header>
									<p>These are projects I'm working on now</p>
									<footer>
										<ul class="buttons">
											<li><a href="projects.php?age=new" class="button small">New Projects</a></li>
										</ul>
									</footer>
								</section>
							
							</div>
                     <?php
				break;
			case "old-portfolio":
?>
							<div class="4u">
                                <section>
									<header>
										<h3>Old Portfolio</h3>
									</header>
									<p>View the older version of this Portfolio</p>
									<footer>
										<ul class="buttons">
											<li><a href="projects.php?age=old&name=portfolio" class="button small">Old Portfolio</a></li>
										</ul>
									</footer>
								</section>
							
							</div>
                     <?php
				break;
			case "resume":
?>
							<div class="4u">
                                <section>
									<header>
										<h3>My Resume</h3>
									</header>
									<p>My resume is available in multiple formats.</p>
									<footer>
										<ul class="buttons">
											<li><a href="about.php?view=resume" class="button small">View Resume</a></li>
										</ul>
									</footer>
								</section>
							
							</div>
                     <?php
				break;
			case "contact":
			?>	
							
							<div class="4u">
							
								<section>
									<header>
										<h3>Contact Me</h3>
									</header>
									<p>The best way to reach me is via email</p>
									<footer>
										<ul class="buttons">
											<li><a href="about.php?view=contact" class="button small">Email Me</a></li>
										</ul>
									</footer>
								</section>
							
							</div>
		<?php
			break;
		case "license":
?>					
							<div class="4u">
							
								<section>
									<header>
										<h3>Licenses</h3>
									</header>
									<p>View the Licenses for this work</p>
									<footer>
										<ul class="buttons">
											<li><a href="about.php?view=license" class="button small">Licenses</a></li>
										</ul>
									</footer>
								</section>
							
							</div>
                    <?php
                    break;
					case "web-porject":
?>
							<div class="4u">
                                <section>
									<header>
										<h3>Web Projects</h3>
									</header>
									<p>View my website projects</p>
									<footer>
										<ul class="buttons">
											<li><a href="languages.php?type=web" class="button small">View Web Projects</a></li>
										</ul>
									</footer>
								</section>
							
							</div>
                     <?php
				break;
									case "desktop-porject":
?>
							<div class="4u">
                                <section>
									<header>
										<h3>Desktop Projects</h3>
									</header>
									<p>View my desktop projects</p>
									<footer>
										<ul class="buttons">
											<li><a href="languages.php?type=desktop" class="button small">View Desktop Projects</a></li>
										</ul>
									</footer>
								</section>
							
							</div>
                     <?php
				break;
		}
	}
	function closeFooterNav()
	{
		echo "					</div>\n";
		echo "				</section>\n";
	}
?>