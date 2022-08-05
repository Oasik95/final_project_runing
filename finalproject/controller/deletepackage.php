<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
<?php
   require_once('../model/packagelist.php');
   $SERIAL = $_REQUEST['SERIAL'];	


   if ($SERIAL == null ) {
		echo "<h1 align= center> PLEASE ADD INFORMATION <br><div align=center><a href=../view/packages.php> BACK </a></div>";
		return ;
}else{
    $user['serial']=$SERIAL;
		

	deletepackage($user);
}
	
?>
<div align="center"><a href="../view/packages.php"> BACK </a></div>
</body>
</html>