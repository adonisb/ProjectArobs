<?php
include "db.php";


function Show() {
	global $connect;
$query1= "SELECT * FROM name";
$result1 = mysqli_query($connect, $query1);
if(!$result1){
	die("QUERY FAILED" . mysqli_error()) ;
}
while($row=mysqli_fetch_assoc($result1)){
	$id= $row['id'];
    echo "<option value='$id'>$id</option>";
}
}


function UpdateTable(){
	global $connect;
	$username=$_POST['username'];
	$password=$_POST['password'];
	$id=$_POST['id'];
	$query="UPDATE name SET ";
	$query.="username = '$username' ,";
    $query.="password='$password' ";
	$query.="WHERE id  = $id";
	$result=mysqli_query($connection,$query);
}
?>