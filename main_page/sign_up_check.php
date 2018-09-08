<?php
include("config.php");
$table = "tabuser";

// konek ke server MYSQL
$link = mysql_connect($server, $db_user, $db_pass)
or die ("Could not connect to mysql because ".mysql_error());

// pilih database
mysql_select_db('raindrop')
or die ("Could not select database because ".mysql_error());

// masukkan data
$insert = mysql_query("INSERT INTO `raindrop`.`tabuser` (`userEmail`, `userPassword`, `firstName`, `lastName`, `userStatus`, `accessControl`) VALUES ('".$_POST['email']."', '".$_POST['password']."', '".$_POST['first_name']."', '".$_POST['last_name']."', 'No Status', 'user')")
or die("Could not insert data because ".mysql_error());

// tampilkan pesan sukses
?><script language="JavaScript">document.location='enter.php#confirmation'</script><? 

?>