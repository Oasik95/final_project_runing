<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
<?php
   require_once('../model/buslist.php');
   $SERIAL = $_REQUEST['SERIAL'];	


   if ($SERIAL == null ) {
		echo "<h1 align= center> PLEASE ADD INFORMATION <br><div align=center><a href=train.php> BACK </a></div>";
		return ;
}else{
    $user['serial']=$SERIAL;
		

	deletetrip($user);
}
	
?>
<div align="center"><a href="../view/bus.php"> BACK </a></div>
</body>
</html>