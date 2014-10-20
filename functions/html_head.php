<?php

	
	// This simply returns the base Page Title
	// It is usually a suffix for a page
	function getTitleSuffix()
	{
		return "Michael Ragsdale's Online Portfolio";
	}
	
	// Let's get tme primary part of the
	// page title.
	function setTitle($pageTitle)
	{
		if ($pageTitle == "")
		{
			echo "		<title>" . getTitleSuffix() . "</title>\n";
		}
		else
		{
			echo "		<title>" . $pageTitle . " - " . getTitleSuffix() . "</title>\n";
		}
	}

	// Let's write the rest of the Header
	function writeHeader()
	{
		?>		
		<!-- iOS Web App Code -->
		<meta name="apple-mobile-web-app-capable"
			content="yes">
		<meta name="apple-mobile-web-app-title"
			content="Portfolio">
		
		<!-- SpringBoard Icons -->
		<!-- iPad, iOS 7, retina -->
		<link href="images/webapp/icon/apple-touch-icon-152x152.png"
			  sizes="152x152"
			  rel="apple-touch-icon">
		<!-- iPad, iOS 6, retina -->
		<link href="images/webapp/icon/apple-touch-icon-144x144.png"
			  sizes="144x144"
			  rel="apple-touch-icon">
		<!-- iPhone, iOS 7, retina -->
		<link href="images/webapp/icon/apple-touch-icon-120x120.png"
			  sizes="120x120"
			  rel="apple-touch-icon">
		<!-- iPhone ,iOS 6, retina -->
		<link href="images/webapp/icon/apple-touch-icon-114x114.png"
			  sizes="114x114"
			  rel="apple-touch-icon">
		<!-- iPad, iOS 7 -->
		<link href="images/webapp/icon/apple-touch-icon-76x76.png"
			  sizes="76x76"
			  rel="apple-touch-icon">
		<!-- iPad, iOS 6 -->
		<link href="images/webapp/icon/apple-touch-icon-72x72.png"
			  sizes="72x72"
			  rel="apple-touch-icon">
		<!-- iPhone, iOS 7 -->
		<link href="images/webapp/icon/apple-touch-icon-60x60.png"
			  sizes="60x60"
			  rel="apple-touch-icon">
		<!-- iPhone, iOS 6 -->
		<link href="images/webapp/icon/apple-touch-icon-57x57.png"
			  sizes="57x57"
			  rel="apple-touch-icon">
			  
		<!-- Splash Screen -->
		<!-- iPad, retina, portrait -->
		<link href="apple-touch-startup-image-1536x2008.png"
			  media="(device-width: 768px) and (device-height: 1024px)
				 and (orientation: portrait)
				 and (-webkit-device-pixel-ratio: 2)"
			  rel="apple-touch-startup-image">
		<!-- iPad, retina, landscape -->
		<link href="apple-touch-startup-image-1496x2048.png"
			  media="(device-width: 768px) and (device-height: 1024px)
				 and (orientation: landscape)
				 and (-webkit-device-pixel-ratio: 2)"
			  rel="apple-touch-startup-image">
		<!-- iPad, portrait -->
		<link href="apple-touch-startup-image-768x1004.png"
			  media="(device-width: 768px) and (device-height: 1024px)
				 and (orientation: portrait)
				 and (-webkit-device-pixel-ratio: 1)"
			  rel="apple-touch-startup-image">
		<!-- iPad, landscape -->
		<link href="apple-touch-startup-image-748x1024.png"
			  media="(device-width: 768px) and (device-height: 1024px)
				 and (orientation: landscape)
				 and (-webkit-device-pixel-ratio: 1)"
			  rel="apple-touch-startup-image">
		<!-- iPhone 5 -->
		<link href="apple-touch-startup-image-640x1096.png"
			  media="(device-width: 320px) and (device-height: 568px)
				 and (-webkit-device-pixel-ratio: 2)"
			  rel="apple-touch-startup-image">
		<!-- iPhone, retina -->
		<link href="apple-touch-startup-image-640x920.png"
			  media="(device-width: 320px) and (device-height: 480px)
				 and (-webkit-device-pixel-ratio: 2)"
			  rel="apple-touch-startup-image">
		<!-- iPhone -->
		<link href="apple-touch-startup-image-320x460.png"
			  media="(device-width: 320px) and (device-height: 480px)
				 and (-webkit-device-pixel-ratio: 1)"
			  rel="apple-touch-startup-image">
			  
		<!-- Customize the Status Bar -->
		<meta name="apple-mobile-web-app-status-bar-style"
			content="black">
		
		<!-- Viewport for compatability with older iOS devices -->
		<meta name="viewport"
			content="initial-scale=1">
		
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
        <link rel="stylesheet" href="css/icons.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<?php
	// Let's close off the Header
	}
	?>