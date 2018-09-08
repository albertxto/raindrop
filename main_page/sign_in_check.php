<?php
	session_start(); 		//mulai session, krena kita akan menggunakan session pd file php ini
	include 'config.php'; 		//hubungkan dengan config.php untuk berhubungan dengan database
	$useremail=$_GET['email']; 	//tangkap data yg di input dari form login input username
	$password=$_GET['password']; 	//tangkap data yg di input dari form login input password
 
	$query=mysql_query("SELECT * FROM `tabUser` WHERE `userEmail` LIKE '$useremail' AND `userPassword` LIKE '$password'");	 //melakukan pengampilan data dari database untuk di cocokkan
	$xxx=mysql_num_rows($query);	 //melakukan pencocokan
	$res=mysql_fetch_array($query);
	if($xxx==TRUE){ 		// melakukan pemeriksaan kecocokan dengan percabangan.
		$_SESSION['useremail']=$useremail;  //jika cocok, buat session dengan nama sesuai dengan username
		header("location:sign_in.php");     // dan alihkan ke index.php
	}else{   				//jika tidak tampilkan pesan gagal login
		header("location:enter.php#sign-in");
	}
 
?>