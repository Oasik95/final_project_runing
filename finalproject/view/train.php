<!DOCTYPE html>
<html>
<head>
	
	<title>train</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<h2 class = "title" align="center">MANGE TRAIN TRIP</h2>
	<div class="search_trip">
	<form >
		
		
		
			<table align="center">
				<tr>
					<td>SEARCH TRIP</td>
					<td><input type="text"  name="SEARCH" value="" size="30" onkeyup="showResult(this.value)"></td>
				</tr>
				
			</table>
			
	</form>

</div>

	<table align="center">
<?php

header("Content-type: text/html");


?>
<div id="livesearch"></div>
<table align="center" border="2px" cellpadding="2px" cellspacing="4px">

<tr>

<th>SERIAL NO</th>

<th>LEAVING FROM</th>

<th>GOING TO</th>

<th>TIME</th>

<th>DATE</th>

<th>Picture</th>

</tr>
<tbody id="liveb">

<?php

require_once('../model/trainlist.php');
 $result=traintriplist();
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
</tbody>
	</table>
	

	<div class="add_new_trip">
	<form action="../controller/trainaddCheak.php" method="post" enctype="multipart/form-data"onsubmit="return validateadd()">

			
	
				<table align="center">
				<h2>ADD NEW TRIP<h2/>
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
						<td><input type="submit" class="add_box" id="submit" name="" value="ADD"></td>
					</tr>
					
					
				</table>
      
			

		</form>
        </div>
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
		<div class="delet_trip">
	<form action="../controller/deletetrian.php" method="post" enctype="" onsubmit="return validatedelete()">
		
		
				
				<table align="center">
					<tr>
						<h2>DELET TRIP<h2/>
						<td>SERIAL</td>
						<td><input type="text" id="SERIAL" name="SERIAL" value=""></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="delet_box" name="" id ="submit" value="DELET"></td>
					</tr>
				</table>

			

		</form>
		</div>
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
		<div class="update_trip">
		<form action="../controller/updatetrain.php" method="post" enctype="" onsubmit="return validateupdate()">
		
			
				
				<table align="center">
					<tr>
						<h2>UPDATE TRIP<h2/>
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
						<td><input type="submit" class="update_box" id="submit" name="" value="UPDATE"></td>
					</tr>
				</table>

		

		</form>
		</div>
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
		
 <br>

		<script>
			function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","../controller/searchtrain.php?SEARCH="+str,true);
  xmlhttp.send();
}
			 </script>


<form action="../controller/distance.php" method="post" >

<table align="center">
<h2>VIEW DISTANCE<h2/>
	<tr>
		<td>FROM</td>
		<td><input type="text"  name="FROM" value=""></td>
	</tr>
	<tr>
		<td>TO</td>
		<td><input type="text"  name="TO" value=""></td>
	</tr>
	<tr>
		<td>DISTANCE</td>
		<td><input type="text"  name="DISTANCE" value=""></td>
	</tr>
	
	<tr>
		<td></td>
		<td><input type="submit" name="" value="CALCULATE"></td>
	</tr>
	
	
</table>

</form>
<div class="color">
 <a href="../view/travelhome.html"> Back to home </a>
		</div>
</body>
</html>