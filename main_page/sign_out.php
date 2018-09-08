<?php
  session_start();
  if(empty($_SESSION['useremail'])){
  header("location:enter.php#sign-in");
} else {
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Sign Out</title>
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
				    <a href="#sign-out" class="icon fa-power-off active"><span>Sign Out</span></a>					</nav>

				<!-- Main -->
					<div id="main">
						
						<!-- Me -->
							<article id="me" class="panel">
								<header>
									<h1>Sign Out</h1>
							  </header>
								<a href="#sign-out" class="jumplink pic">
									<span class="arrow icon fa-chevron-right"><span>Sign Out</span></span>
									<img src="images/me.jpg" alt="" />								</a>							</article>

						<!-- Full Speed --> 
							<article id="sign-out" class="panel">
								<header>
									<h2>Sign Out</h2>
								</header>
								<p>
									Are you sure you want to Sign Out?
								</p>
								<table style="align-content:center"">
									<tr>
										<td style=" width:20%">
											<form action="sign_out_check.php" method="post">
												<div>
													<div class="row">
														<div class="12u">
															<input type="submit" value="Yes" style="width:125px" />
														</div>
													</div>
												</div>
											</form>
										</td>
										<td>
											<form action="../index_login.php" method="post">
												<div>
													<div class="row">
														<div class="12u">
															<input type="submit" value="No" style="width:125px" />
														</div>
													</div>
												</div>
											</form>
										</td>
									</tr>
								</table>
							</article>

						<!-- Confirmation --> 
							<article id="confirmation" class="panel">
								<header>
									<h2>See You Later!</h2>
								</header>
								<p>
									You have Sign Out.<br>
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
<?php } ?>