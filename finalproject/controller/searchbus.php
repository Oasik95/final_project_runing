<table align="center" border="2px" cellpadding="2px" cellspacing="4px">

<tr>

<th>SERIAL NO</th>

<th>LEAVING FROM</th>

<th>GOING TO</th>

<th>TIME</th>

<th>DATE</th>

<th>Picture</th>

</tr>


<?php


require_once('../model/buslist.php');
$SEARCH = $_REQUEST['SEARCH'];

if ($SEARCH == null) {
    echo "<h1 align= center> PLEASE ADD INFORMATION <br><div align=center><a href=train.php> BACK </a></div>";
    return ;
}else{
    $user['SEARCH']=$SEARCH;
   
    require_once('../model/buslist.php');
    $result=searchtrip($user);
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

    searchtrip($user);

}
echo"<br>";
echo "<h2><div><a href=../view/train.php> BACK </a></div>";

?>
<table/>