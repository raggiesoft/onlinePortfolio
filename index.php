<!DOCTYPE HTML>
<!--
	Twenty 1.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
	<?php
		include("functions/html_head.php");
		setTitle("");
		writeHeader();
	?>
	<body class="left-sidebar loading">
	
		<?php 
		
		include("functions/navigation.php");
		
		?>
		
		<!-- Main -->
			<article id="main">
					
				<!-- One -->
					<section class="wrapper style4 container">
					
						<div class="row oneandhalf">
							<div class="4u">
								
								<!-- Sidebar -->
									<div class="sidebar">
										<section>
											<header>
												<h3>My Resume</h3>
											</header>
											<p>My resume is available in multiple file formats using whatever is easiest for you!</p>
											<footer>
												<ul class="buttons">
													<li><a href="about.php?view=resume" class="button small">My Resume</a></li>
												</ul>
											</footer>
										</section>

										<section>
											<header>
												<h3>Contact Me</h3>
											</header>
											<p></p>
											<footer>
												<ul class="buttons">
													<li><a href="about.php?view=contact" class="button small">Send an Email</a></li>
												</ul>
											</footer>
										</section>
									</div>

							</div>
							<div class="8u skel-cell-important">
								
								<!-- Content -->
									<div class="content">
										<section>
											<header>
												<h3>All New Online Portfolio</h3>
											</header>
											<p><img src="images/template/mobile_site.png"
                                            alt="Mobile Site on iPhone 5C" align="left" />Welcome to my all-new online
                                            portfolio This website is rebuilt
                                            from the ground up using a responsive HTML5 template that gladly self-adapts
                                            to the width of your device's screen.</p>
                                            <p>For the technical: Using a template, this portfolio website was rebuilt
                                            using CSS3 media queries which allow it to self-adapt to your device's size.
                                            If you are on a desktop browser, try it out by simply resizing your window
                                            and watch this website change on-the-fly between desktop, tablet, and phone
                                            versions.</p>
                                            <p>Unlike some websites that would redirect you to a special mobile-friendly
                                            version, I instead take advantage of CSS3 media queries and simply ask "how
                                            wide is your screen" which means that content can be written just one time
                                            and the end-user can see it no matter how they are viewing it.</p>
										</section>
									</div>
	
							</div>
						</div>					
					</section>

				
			</article>

		<?php
		include("functions/footer.php");
		?>

	</body>
</html>