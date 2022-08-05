<!DOCTYPE html>
<html>
<head>
	
	<title>bus</title>
</head>
<body>
	<h2 align="center">MANGE BUS TRIP</h2>

	<table align="center">
		<?php

header("Content-type: text/html");


?>


<table align="center" border="2px" cellpadding="2px" cellspacing="4px">

<tr>

<th>SERIAL NO</th>

<th>LEAVING FROM</th>

<th>GOING TO</th>

<th>TIME</th>

<th>DATE</th>

<th>PICTURE</th>

</tr>

<?php

require_once('../model/buslist.php');
 $result=bustriplist();
 if(mysqli_num_rows($result) > 0){
while ($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>" . $row['serial'] . "</td>";
	echo "<td>" . $row['leaving_from'] . "</td>";
	echo "<td>" . $row['going_to'] . "</td>";
	echo "<td>" . $row['time'] . "</td>";
	echo "<td>" . $row['date'] . "</td>";
    echo "<td><img src='" . $row['upload_location'] . "'alt=' not found' width='100' height='100'></td>";
	
	echo "</tr>";

}
mysqli_free_result($result);
 }

?>

	</table>
	<form action="../controller/busaddCheak.php" method="post" enctype="multipart/form-data"onsubmit="return validateadd()">

			<fieldset >
				<legend>ADD NEW TRIP</legend>
				<table align="center">
                <tr>
						<td>LEAVING</td>
						<td><input type="text" id ="LEAVING" name="LEAVING" value=""></td>
					</tr>
					<tr>
						<td>GOING</td>
						<td><input type="text" id ="GOING" name="GOING" value=""></td>
					</tr>
					<tr>
						<td>TIME</td>
						<td><input type="text" id ="TIME" name="TIME" value=""></td>
					</tr>
					<tr>
						<td>DATE</td>
						<td><input type="text" id="DATE" name="DATE" value=""></td>
					</tr>
                    <tr>
						<td>select Image</td>
						<td><input type="file" name="filename" value=""></td>
						
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" id="submit" name="" value="ADD"></td>
					</tr>
				</table>

			</fieldset>

		</form>
        <script>
            function validateadd(){
                let LEAVING = document.getElementById('LEAVING').value;
				let GOING = document.getElementById('GOING').value;
				let TIME = document.getElementById('TIME').value;
				let DATE = document.getElementById('DATE').value;


                if(LEAVING != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }
				if(GOING != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }
				if(TIME != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }
				if(DATE != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }
            }
        </script>
		</table>

	<form action="../controller/deletebus.php" method="post" enctype=""onsubmit="return validatedelete()">
		
			<fieldset >
				<legend> DELET TRIP</legend>
				<table align="center">
                <tr>
						<td>SERIAL</td>
						<td><input type="text" id="SERIAL" name="SERIAL" value=""></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="" id ="submit" value="DELET"></td>
					</tr>
				</table>

			</fieldset>

		</form>
        <script>
            function validatedelete(){
                let SERIAL = document.getElementById('SERIAL').value;

                if(SERIAL != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }
            }
        </script>
		<form action="../controller/updatebus.php" method="post" enctype=""onsubmit="return validateupdate()">
		
			<fieldset >
				<legend>UPDATE TRIP</legend>
				<table align="center">
                <tr>
						<td>SERIAL</td>
						<td><input type="text" id="SERIAL_2" name="SERIAL" value=""></td>
					</tr>
					<tr>
						<td>LEAVING</td>
						<td><input type="text" id ="LEAVING_2" name="LEAVING" value=""></td>
					</tr>
					<tr>
						<td>GOING</td>
						<td><input type="text" id="GOING_2" name="GOING" value=""></td>
					</tr>
					<tr>
						<td>TIME</td>
						<td><input type="text" id="TIME_2" name="TIME" value=""></td>
					</tr>
					<tr>
						<td>DATE</td>
						<td><input type="text" id="DATE_2" name="DATE" value=""></td>
					</tr>
					<tr>
					<tr>
						<td></td>
						<td><input type="submit" id="submit" name="" value="UPDATE"></td>
					</tr>
				</table>

			</fieldset>

		</form>
        <script>
            function validateupdate(){
				let SERIAL = document.getElementById('SERIAL_2').value;
                let LEAVING = document.getElementById('LEAVING_2').value;
				let GOING = document.getElementById('GOING_2').value;
				let TIME = document.getElementById('TIME_2').value;
				let DATE = document.getElementById('DATE_2').value;

                if(SERIAL != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }

                if(LEAVING != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }
				if(GOING != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }
				if(TIME != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }
				if(DATE != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }
            }
        </script>
        <form action="../controller/searchbus.php" method="post" enctype="" >
		
		<fieldset >
			<legend> SEARCH TRAIN TRIP </legend>
			<table align="center">
				<tr>
					<td>SEARCH</td>
					<td><input type="text"  name="SEARCH" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="" value="SEARCH"></td>
				</tr>
			</table>

		</fieldset>

	</form>
 <br>
 <a href="../view/travelhome.html"> Back to home </a>
</body>
</html>