<?php
	session_start(); 		//mulai session, karena kita akan menggunakan session pd file php ini
	include 'config.php'; 		//hubungkan dengan config.php untuk berhubungan dengan database
	
	if($_SESSION['useremail'])
	{	
		mysql_connect("localhost","root","");
		$link=mysql_select_db('raindrop');
		if (!$link) {
			die('Not connected : ' . mysql_error());
		}
		
		$userEmail=$_GET['userEmail'];
		$status=$_POST['message']; 	//tangkap data yg di input dari form setting input status
		$newpassword=$_POST['newpassword']; 	//tangkap data yg di input dari form setting input newpassword
		
		if(!empty($status)){
			mysql_query("UPDATE tabuser SET userStatus = '$status' WHERE userEmail = '$userEmail'");
		}
		if(!empty($newpassword)){			
			mysql_query("UPDATE tabuser SET userPassword = '$newpassword' WHERE userEmail = '$userEmail'");
		}
		header('location:sign_in.php');
	} 
?>