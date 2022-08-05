<?php 

   
 require_once('db.php');
function traintriplist( ){
    $conn = getConnection();
	$sql = "select * from train ";
	$result = mysqli_query($conn, $sql);
    mysqli_close($conn);
   return $result;
}
function addtrip($user){
    
    $conn = getConnection();
    
	$sql = "insert into train  ( leaving_from, going_to, time, date,upload_location) values( '{$user['leaving_from']}', '{$user['going_to']}','{$user['time']}','{$user['date']}','{$user['file_location']}')";

    if(mysqli_query($conn, $sql)){
        return ;
    }else{
        return false;
    }
}
function deletetrip($user){
    $conn = getConnection();
    
	$sql = "delete from train where serial={$user['serial']}";
    

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
    $sql = "select * from train where going_to like '%{$user['SEARCH']}%'";
    
    
 $result = mysqli_query($conn, $sql);
	
    mysqli_close($conn);
   return $result;
}
function Disatance($user){
    
    $conn = getConnection();
    $sql = "select * from distance_info where from & to like '%{$user['FROM']}%','%{$user['TO']}%'";
    
    
 $result = mysqli_query($conn, $sql);
	
    mysqli_close($conn);
   return $result;
}