<!DOCTYPE HTML>

<html>
	<head>
		<title>Sign-In</title>
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
						<a href="#sign-in" class="icon fa-sign-in"><span>Sign-In</span></a>
						<a href="#sign-up" class="icon fa-file"><span>Sign-Up</span></a>
					</nav>

				<!-- Main -->
					<div id="main">
						
						<!-- Me -->
							<article id="me" class="panel">
								<header>
									<h1>Sign In</h1>
									<p>
										Press the sign-in icon on the right to continue.
									</p>
								</header>
								<a href="#sign-in" class="jumplink pic">
									<span class="arrow icon fa-sign-in"><span>Sign In</span></span>
									<img src="images/me.jpg" alt="" />
								</a>
							</article>

						<!-- Sign-In -->
							<article id="sign-in" class="panel">
								<header>
									<h2>Sign In</h2>
								</header>
								<form action="sign_in_check.php" method="">
									<div>
										<div class="row">
											<div class="6u">
												<input type="email" name="email" placeholder="Email" required />
											</div>
											<div class="6u">
												<input type="password" name="password" placeholder="Password" required />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="submit" value="Sign In" />
											</div>
										</div>
									</div>
								</form>
								<p>
									Don't have RainDrop account?<br>
									Sign-up now, it's free!
								</p>
								<form action="#sign-up" method="get">
									<div>
										<div class="row">
											<div class="12u">
												<input type="submit" value="Sign Up"  />
											</div>
										</div>
									</div>
								</form>
							</article>

						<!-- Sign-Up -->
							<article id="sign-up" class="panel">
								<header>
									<h2>Sign Up</h2>
								</header>
								<form action="sign_up_check.php" method="post">
									<div>
										<div class="row">
											<div class="6u">
												<input type="text" name="first_name" placeholder="First Name" required />
											</div>
											<div class="6u">
												<input type="text" name="last_name" placeholder="Last Name" required />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="text" name="email" placeholder="Email" required />
											</div>
										</div>
										<div class="row">
											<div class="6u">
												<input type="password" name="password" placeholder="Password" required />
											</div>
											<div class="6u">
												<input type="password" name="confirm_password" placeholder="Confirm Password" required />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="submit" value="Sign Up" />
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
									Your account is successfully created!
									Now you have the best cloud storage at your hand.
									Press the Sign In button below to continue,
									or you can explore our features right on the About Us button below.
								</p>                                         


								<table style="align-content:center"">
									<tr>
										<td style=" width:20%">
											<form action="#sign-in" method="get">
												<div>
													<div class="row">
														<div class="12u">
															<input type="submit" value="Sign In" style="width:125px" />
														</div>
													</div>
												</div>
											</form>
										</td>
										<td>
											<form action="about_us.php" method="get">
												<div>
													<div class="row">
														<div class="12u">
															<input type="submit" value="About Us" style="width:125px" />
														</div>
													</div>
												</div>
											</form>
										</td>
									</tr>
								</table>
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