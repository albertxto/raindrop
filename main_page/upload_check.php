<?php
session_start();
include 'config.php';
$user = $_SESSION["useremail"];

// menampilkan data
// lihat perubahannya di bawah ini:
	$sql="SELECT * FROM `tabUser` WHERE `useremail` = '$user'";
	$result_set=mysql_query($sql) or die(mysql_error());
	while($row=mysql_fetch_array($result_set))
	{ ?>
<?php 
if(isset($_POST['upload']))
{    
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder = "uploads/";
	$data_name		= $_POST['nama'];
 	$file_category	= $_POST['category'];
 	$tgl			= date("Y-m-d");
	$userid = $row['userID'];

	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file = str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO `raindrop`.`tabfile` (`userID`, `dataName`, `dateUploaded`, `fileName`, `fileType`, `fileSize`, `fileCategory`) VALUES ('$userid', '$data_name', '$tgl', '$final_file', '$file_type', $new_size, '$file_category')";
		mysql_query($sql) or die(mysql_error());
		
		header("location:sign_in.php#confirmation-upload");
	}
	else
	{
		echo "gagal";
		//header("location:sign_in.php#upload");
	}
} ?> 
<?php } ?>