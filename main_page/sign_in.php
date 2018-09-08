<?php
  session_start();
  if(empty($_SESSION['useremail'])){
  header("location:enter.php#sign-in");
} else {
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>RainDrop</title>
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
						<a href="../index_login.php" class="icon fa-home"><span>Home</span></a>
						<a href="#me" class="icon fa-user active"><span>Me</span></a>
						<a href="#upload" class="icon fa-upload"><span>Upload</span></a>
						<a href="#document" class="icon fa-file-o"><span>Document</span></a>
						<a href="#picture" class="icon fa-picture-o"><span>Picture</span></a>
						<a href="#music" class="icon fa-music"><span>Music</span></a>
						<a href="#video" class="icon fa-film"><span>Video</span></a>
						<a href="#search" class="icon fa-search"><span>Search</span></a>
						<a href="#setting" class="icon fa-cog"><span>Setting</span></a>
					</nav>

				<!-- Main -->
					<div id="main">
						
						<!-- Me -->
                        
							<article id="me" class="panel">
								<header>
<?php
include 'config.php';
$user = $_SESSION["useremail"];

// menampilkan data
// lihat perubahannya di bawah ini:
	$sql="SELECT * FROM `tabUser` WHERE `useremail` = '$user'";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <h1><?php echo $row['firstName'] ?> <?php echo $row['lastName'] ?></h1>
        <p>Welcome to Raindrop !<br>        
        <?php echo $row['userStatus'] ?><br><br>
        ~ RainDrop Team </p>
        <?php
	}
?>                                
								</header>
								<a href="#upload" class="jumplink pic">
									<span class="arrow icon fa-upload"><span>Drive</span></span>
									<img src="images/me.jpg" alt="" />
								</a>
							</article>

						<!-- Upload --> 
							<article id="upload" class="panel">
								<header>
									<h2>Upload</h2>
								</header>
								<form enctype="multipart/form-data" action="upload_check.php" method="post">
									<div>
 										<div class="row">
											<div class="12u">
												File Name : <input type="text" name="nama" size="30" required />
											</div>
										</div> 
										<div class="row">
											<div class="12u">
												File Category :	<select name="category">
																	<option value="Document">Document</option>
																	<option value="Picture">Picture</option>
																	<option value="Music">Music</option>
																	<option value="Video">Video</option>
                              									</select>
											</div>
										</div>                                                                          
										<div class="row">
											<div class="12u">
												Choose a file : <input type="file" name="file" required />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="submit" name="upload" value="upload" />
											</div>
										</div>
									</div>
								</form>
							</article>

						<!-- Confirmation Upload --> 
							<article id="confirmation-upload" class="panel">
								<header>
									<h2>Successful</h2>
								</header>
								<p>
									Your file is successfully uploaded!
								</p>
							</article>

						<!-- Confirmation Delete --> 
							<article id="confirmation-delete" class="panel">
								<header>
									<h2>Successful</h2>
								</header>
								<p>
									Your file is successfully deleted!
								</p>
							</article>

						<!-- Document --> 
							<article id="document" class="panel">
								<header>
									<h2>Document</h2>
								</header>
								<table style="width:100%; border:double">
									<tr>
										<th style="font-weight:bold">File Name</th>
                                        <th style="font-weight:bold">File Size (KB)</th>
										<th style="font-weight:bold">Delete</th>
										<th style="font-weight:bold">Download</th>
									</tr>
    <?php
	$user = $_SESSION["useremail"];
	$sql="SELECT * FROM tabfile tf, tabuser tu WHERE tu.userEmail = '$user' AND tu.userID = tf.userID AND `fileCategory` LIKE 'Document'";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>    
									<tr>
             
										<td><?php echo $row['dataName'] ?></td>
                                        <td align="center"><?php echo $row['fileSize'] ?></td>
										<td style="text-align:center"><a href="delete_check.php?fileID=<?php echo $row['fileID'] ?>" style="color:#000000"><span class="arrow icon fa-close"></span></td>
										<td style="text-align:center"><a href="uploads/<?php echo $row['fileName'] ?>" style="color:#000000"><span class="arrow icon fa-file-text-o"></span></a></td>                                     
									</tr>
         <?php
	}
	?>                                      
								</table>
							</article>

						<!-- Picture --> 
							<article id="picture" class="panel">
								<header>
									<h2>Picture</h2>
								</header>
								<table style="width:100%; border:double">
									<tr>
										<th style="font-weight:bold">File Name</th>
                                        <th style="font-weight:bold">File Size (KB)</th>
										<th style="font-weight:bold">Delete</th>
										<th style="font-weight:bold">Download</th>
									</tr>
    <?php
	$user = $_SESSION["useremail"];
	$sql="SELECT * FROM tabfile tf, tabuser tu WHERE tu.userEmail = '$user' AND tu.userID = tf.userID AND `fileCategory` LIKE 'Picture'";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>    
									<tr>
             
										<td><?php echo $row['dataName'] ?></td>
                                        <td align="center"><?php echo $row['fileSize'] ?></td>
										<td style="text-align:center"><a href="delete_check.php?fileID=<?php echo $row['fileID'] ?>" style="color:#000000"><span class="arrow icon fa-close"></span></td>
										<td style="text-align:center"><a href="uploads/<?php echo $row['fileName'] ?>" style="color:#000000" target="_blank"><span class="arrow icon fa-file-image-o"></span></a></td>                                     
									</tr>
         <?php
	}
	?>                                      
								</table>
							</article>

						<!-- Music --> 
							<article id="music" class="panel">
								<header>
									<h2>Music</h2>
								</header>
								<table style="width:100%; border:double">
									<tr>
										<th style="font-weight:bold">File Name</th>
                                        <th style="font-weight:bold">File Size (KB)</th>
										<th style="font-weight:bold">Delete</th>
										<th style="font-weight:bold">Download</th>
									</tr>
    <?php
	$user = $_SESSION["useremail"];
	$sql="SELECT * FROM tabfile tf, tabuser tu WHERE tu.userEmail = '$user' AND tu.userID = tf.userID AND `fileCategory` LIKE 'Music'";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>    
									<tr>
             
										<td><?php echo $row['dataName'] ?></td>
                                        <td align="center"><?php echo $row['fileSize'] ?></td>
										<td style="text-align:center"><a href="delete_check.php?fileID=<?php echo $row['fileID'] ?>" style="color:#000000"><span class="arrow icon fa-close"></span></td>
										<td style="text-align:center"><a href="uploads/<?php echo $row['fileName'] ?>" style="color:#000000" target="_blank"><span class="arrow icon fa-file-audio-o"></span></a></td>                                     
									</tr>
         <?php
	}
	?>                                      
								</table>
							</article>

						<!-- Video --> 
							<article id="video" class="panel">
								<header>
									<h2>Video</h2>
								</header>
								<table style="width:100%; border:double">
									<tr>
										<th style="font-weight:bold">File Name</th>
                                        <th style="font-weight:bold">File Size (KB)</th>
										<th style="font-weight:bold">Delete</th>
										<th style="font-weight:bold">Download</th>
									</tr>
    <?php
	$user = $_SESSION["useremail"];
	$sql="SELECT * FROM tabfile tf, tabuser tu WHERE tu.userEmail = '$user' AND tu.userID = tf.userID AND `fileCategory` LIKE 'Video'";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>    
									<tr>
             
										<td><?php echo $row['dataName'] ?></td>
                                        <td align="center"><?php echo $row['fileSize'] ?></td>
										<td style="text-align:center"><a href="delete_check.php?fileID=<?php echo $row['fileID'] ?>" style="color:#000000"><span class="arrow icon fa-close"></span></td>
										<td style="text-align:center"><a href="uploads/<?php echo $row['fileName'] ?>" style="color:#000000" target="_blank"><span class="arrow icon fa-film"></span></a></td>                                     
									</tr>
         <?php
	}
	?>                                      
								</table>
							</article>

						<!-- Search --> 
							<article id="search" class="panel">
								<header>
									<h2>Search</h2>
								</header>
								<form action="#confirmation-search" method="post">
									<div>
										<div class="row">
											<div class="12u">
												<input type="search" name="search" placeholder="Input file name" style="width:100%" required />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="submit" name="submit" value="Search" />
											</div>
										</div>
									</div>
								</form>
							</article>

						<!-- Confirmation Search --> 
							<article id="confirmation-search" class="panel">
								<header>
									<h2>Search Result</h2>
								</header>
								<table style="width:100%; border:double">
									<tr>
										<th style="font-weight:bold">File Name</th>
                                        <th style="font-weight:bold">File Size (KB)</th>
										<th style="font-weight:bold">Delete</th>
										<th style="font-weight:bold">Download</th>
									</tr>
    <?php
	if (isset ($_POST['search']));
		$searchq = $_POST['search'];
	$dataid = mysql_query("SELECT userID FROM tabuser WHERE userEmail LIKE '$user'");
	$infoid = mysql_fetch_array($dataid);
	$query = mysql_query("SELECT * FROM tabfile WHERE dataName LIKE '%$searchq%' AND userID = '$infoid[userID]'") or die("could not search");
	$count = mysql_num_rows($query);
	if($count == 0){
		echo 'File not found!';
	}
	else{
		?>    
									
     <?php
		while($row = mysql_fetch_array($query)){ 
	?>            
    								<tr>
										<td><?php echo $row['dataName'] ?></td>
                                        <td align="center"><?php echo $row['fileSize'] ?></td>
										<td style="text-align:center"><a href="delete_check.php?fileID=<?php echo $row['fileID'] ?>" style="color:#000000"><span class="arrow icon fa-close"></span></td>
										<td style="text-align:center"><a href="uploads/<?php echo $row['fileName'] ?>" style="color:#000000"><span class="arrow icon fa-film"></span></a></td>                                     
									</tr>
         <?php
		}
	?>                                      
         <?php
	}
	?>                                      
								</table>
 							</article>

						<!-- Setting --> 
							<article id="setting" class="panel">
								<header>
									<h2>Setting</h2>
								</header>
								<p>
									<form action="sign_in_setting.php?userEmail=<?php echo $user; ?>" method="post">
										<table style="width:100%">
											<tr style="height:75px">
												<td>Change Password</td>
												<td><input type="password" name="newpassword" placeholder="Password" /></td>
											</tr>
											<tr style="height:75px">
												<td style="vertical-align:top">Change Status</td>
												<td><textarea name="message" placeholder="Change Status" rows="8" ></textarea></td>
											</tr>
											<tr>
												<td colspan="2" align="center">
													<input type="submit" value="Save" style="width:125px" />
													<input type="reset" value="Reset" style="width:125px" />
												</td>
											</tr>
										</table>
									</form>
								</p>
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