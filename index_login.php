<?php
  session_start();
  if(empty($_SESSION['useremail'])){
  header("location:enter.php#sign-in");
}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>RainDrop</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="loading">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1><img src="css/images/logo.png" height="200" /></h1>
						<p>The Best &nbsp;&bull;&nbsp; Cloud Storage &nbsp;&bull;&nbsp; Ever</p>
						<nav>
							<ul>
								<li><a href="main_page/sign_out.php#sign-out" class="icon fa-power-off"><span class="label">Sign Out</span></a></li>
							  <li><a href="main_page/contact_us.php" class="icon fa-question"><span class="label">Contact Us</span></a></li>
							  <li><a href="main_page/about_us.php" class="icon fa-info"><span class="label">About Us</span></a></li>
							  <li><a href="main_page/sign_in.php" class="icon fa-sign-in"><span class="label">Sign In</span></a></li>
						  </ul>
						</nav>
					</header>

				<!-- Footer -->
					<footer id="footer">
						<span class="copyright">&copy; 2015 - RainDrop Corporation</span>
					</footer>
				
			</div>
		</div>
	</body>
</html>