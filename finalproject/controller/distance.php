<?php


require_once('../model/trainlist.php');
$FROM = $_REQUEST['FROM'];
$TO=$_REQUEST['TO'];

if ($FROM == null || $TO == null) {
    echo "<h1 align= center> PLEASE ADD INFORMATION <br><div align=center><a href=train.php> BACK </a></div>";
    return ;
}else{
    $user['FROM']=$FROM;
    $user['TO']=$FROM;
   
    require_once('../model/trainlist.php');
    $result=searchtrip($user);
    if(mysqli_num_rows($result) > 0){
   while ($row = mysqli_fetch_array($result)) {
       echo "<tr>";
       echo "<td>" . $row['from'] . "</td>";
       echo "<td>" . $row['to'] . "</td>";
      // echo "<td>" . $row['going_to'] . "</td>";
      
       
       
       echo "</tr>";
       
   
   }
   mysqli_free_result($result);
    }

    Disatance($user);

}
echo"<br>";
echo "<h2><div><a href=../view/train.php> BACK </a></div>";

?>