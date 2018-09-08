<?php session_start();
if($_SESSION['useremail'])
{
	mysql_connect("localhost","root","");
	mysql_select_db('raindrop');
	$query="DELETE FROM `raindrop`.`tabfile` WHERE `fileID` =" .$_GET['fileID'];
	mysql_query($query);
	header('location:sign_in.php#confirmation-delete');
}
?>