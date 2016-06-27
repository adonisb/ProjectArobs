<?php

include "db.php";

function create_category(){
	
global $connect;
@$title=$_POST["title"];
@$describtion=$_POST["describtion"];
$query="INSERT INTO category(title, describtion)";
$query .="VALUES('$title', '$describtion')";
$result= mysqli_query($connect, $query);
}
function update_category(){
			
global $connect;
@$title=$_POST["title"];
$query1="SELECT * FROM category";
$result1= mysqli_query($connect, $query1);
@$describtion=$_POST["describtion"];
@$id=$_POST["id"];
$query="UPDATE category SET title= '$title' , describtion = '$describtion' WHERE id = $id ";
$result= mysqli_query($connect, $query);
}

function create_sub_category(){
			
global $connect;
@$title=$_POST["title"];
@$describtion=$_POST["describtion"];
@$category_id=$_POST["id"];
@$query="INSERT INTO sub_category(title, describtion , category_id) ";
@$query .=" VALUES('$title', '$describtion' , '$category_id')";
@$result= mysqli_query($connect, $query);

}
function category_id_show(){
	global $connect;
	@$query1="SELECT * FROM category ";
	@$result1= mysqli_query($connect, $query1);
	
	while($row= mysqli_fetch_assoc($result1)){
	$category_id=$row['id'];
	$category_title=$row['title'];
	echo "<option value ='$category_id'> $category_title </option>";
	}
}


function category_id_up_show(){
	global $connect;
	@$query1="SELECT * FROM category ";
	@$result1= mysqli_query($connect, $query1);
	while($row=mysqli_fetch_assoc($result1)){
	$id=$row['id'];
	echo "<option value='$id'>$id</option>";
}
}
function sub_category_id_up_show(){
	global $connect;
	@$query1="SELECT * FROM sub_category ";
	@$result1= mysqli_query($connect, $query1);
	while($row=mysqli_fetch_assoc($result1)){
	$id=$row['id'];
	echo "<option value='$id'>$id</option>";
}
}
function update_sub_category(){
global $connect;
@$title=$_POST["title"];
@$describtion=$_POST["describtion"];
@$category_id=$_POST["id"];
@$id=$_POST['id1'];
@$query="UPDATE sub_category SET title= '$title' , describtion ='$describtion' , category_id = '$category_id' WHERE id = $id";
@$query1="SELECT * FROM category";
@$query2="SELECT * FROM sub_category";
@$result= mysqli_query($connect, $query);
@$result1= mysqli_query($connect, $query1);
@$result2= mysqli_query($connect, $query2);
}
function create_event1(){
			
			global $connect;
@$price=$_POST["price"];
@$event1_time=$_POST["event1_time"];
@$interest_point_id=$_POST["id"];
@$query="INSERT INTO event1(price, event1_time , interest_point_id)";
@$query1="SELECT * FROM interest_point";
@$query .="VALUES('$price', '$event1_time' ,'$interest_point_id')";
@$result1= mysqli_query($connect, $query1);
@$result= mysqli_query($connect, $query);
}

function update_event1(){
			
			global $connect;
@$price=$_POST["price"];
@$event1_time=$_POST["event1_time"];
@$interest_point_id=$_POST["id"];
@$id=$_POST["id_p"];
$query="UPDATE event1 SET price = '$price' , event1_time = '$event1_time' , interest_point_id = '$interest_point_id' WHERE id = $id ";
$result= mysqli_query($connect, $query);
}



function event1_id_show(){
	global $connect;
	@$query1="SELECT * FROM event1 ";
	@$result1= mysqli_query($connect, $query1);
	while($row=mysqli_fetch_assoc($result1)){
	$id=$row['id'];
	echo "<option value='$id'>$id</option>";
}}


function create_interest_point(){
			
			global $connect;
@$title=$_POST["title"];
@$describtion=$_POST["describtion"];
@$location_longitude=$_POST["location_longitude"];
@$location_latitude=$_POST["location_latitude"];
@$phone_number=$_POST["phone_number"];
$query="INSERT INTO interest_point(title, describtion , location_latitude, location_longitude , phone_number)";
$query .="VALUES('$title', '$describtion' , '$location_latitude' , '$location_longitude' , '$phone_number')";
$result= mysqli_query($connect, $query);
}


function update_interest_point(){
global $connect;
@$title=$_POST["title"];
@$describtion=$_POST["describtion"];
@$location_longitude=$_POST["location_longitude"];
@$location_latitude=$_POST["location_latitude"];
@$phone_number=$_POST["phone_number"];
@$id=$_POST['id'];
$query="UPDATE interest_point title='$title', describtion='$describtion' , location_latitude='$location_latitude', location_longitude='$location_longitude' , phone_number='$phone_number' WHERE id =$id ";
$result= mysqli_query($connect, $query);


}

function interest_point_id_show()
{
	global $connect;
	$query1="SELECT * FROM interest_point";
  $result1= mysqli_query($connect, $query1);
	while($row= mysqli_fetch_assoc($result1)){
	$interest_point_id=$row['id'];
	$interest_point_title=$row['title'];
	echo "<option value ='$interest_point_id'> $interest_point_title </option>;";
}


}




function interest_point_id_up_show()
{
	global $connect;
	$query1="SELECT * FROM interest_point";
  $result1= mysqli_query($connect, $query1);
	while($row= mysqli_fetch_assoc($result1)){
	$interest_point_id=$row['id'];
	echo "<option value ='$interest_point_id'> $interest_point_id </option>;";
}


}





?>