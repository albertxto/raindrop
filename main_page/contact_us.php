<!DOCTYPE HTML>

<html>
	<head>
		<title>Contact Us</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper-->
			<div id="wrapper">
				
				<!-- Nav -->
					<nav id="nav">
						<a href="../index.php" class="icon fa-home"><span>Home</span></a>
						<a href="#contact" class="icon fa-question"><span>Contact Us</span></a>
					</nav>

				<!-- Main -->
					<div id="main">
						
						<!-- Me -->
							<article id="me" class="panel">
								<header>
									<h1>Contact Us</h1>
									<p>
										Do you have any question?<br>
										Fell free to contact our customer services.<br>
										Press the message icon<br>
										on the right to continue.
									</p>
								</header>
								<a href="#contact" class="jumplink pic">
									<span class="arrow icon fa-envelope-o"><span>Contact Us</span></span>
									<img src="images/me.jpg" alt="" />
								</a>
							</article>

						<!-- Contact -->
							<article id="contact" class="panel">
								<header>
									<h2>Contact Us</h2>
								</header>
								<form action="#confirmation" method="post">
									<div>
										<div class="row">
											<div class="6u">
												<input type="text" name="name" placeholder="Name" required />
											</div>
											<div class="6u">
												<input type="email" name="email" placeholder="Email" required />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="text" name="subject" placeholder="Subject" required />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<textarea name="message" placeholder="Message" rows="8" required></textarea>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="submit" value="Send Message"  />
											</div>
										</div>
									</div>
								</form>
							</article>

						<!-- Confirmation --> 
							<article id="confirmation" class="panel">
								<header>
									<h2>Thank You!</h2>
								</header>
								<p>
									Your message is successfully sent!
									We will reply your message as soon as possible.
									Press the button below to go back to Home.
								</p>
								<form action="../index.php" method="post">
									<div>
										<div class="row">
											<div class="12u">
												<input type="submit" value="Home"  />
											</div>
										</div>
									</div>
								</form>
							</article>

					</div>
		
				<!-- Footer -->
					<div id="footer">
						<ul class="copyright">
							<li>&copy; 2015</li><li>RainDrop Corporation</li>
						</ul>
					</div>
		
			</div>

	</body>
</html>