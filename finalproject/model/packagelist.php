<?php 

   
 require_once('db.php');
function packagelist( ){
    $conn = getConnection();
	$sql = "select * from packages ";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);
    mysqli_close($conn);
   return $result;
}
function addpackage($user){
    
    $conn = getConnection();
    
	$sql = "insert into packages  ( place, day, cost, date,images) values( '{$user['place']}', '{$user['day']}','{$user['cost']}','{$user['date']}','{$user['file_location']}')";

    if(mysqli_query($conn, $sql)){
        return ;
    }else{
        return false;
    }
}
function deletepackage($user){
    $conn = getConnection();
    
	$sql = "delete from packages where serial={$user['serial']}";
    

    if(mysqli_query($conn, $sql)){
        return ;
    }else{
        return false;
    }
}
function updatetrip($user){
    $conn = getConnection();
    
	$sql = "update train SET  leaving_from='{$user['leaving_from']}',going_to='{$user['going_to']}',time='{$user['time']}',date='{$user['date']}' WHERE serial= {$user['serial']}";
    

    if(mysqli_query($conn, $sql)){
        return ;
    }else{
        return false;
    }
}
function searchtrip($user){
    $conn = getConnection();
    
	$sql = "select * from train where going_to like '{$user['SEARCH']}'";
    

    $result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);
    mysqli_close($conn);
   return $result;
}