<?php
include_once ('db.php');
$query= "SELECT * FROM category";
$query1= "SELECT * FROM sub_category";
$query2= "SELECT * FROM interest_point";
$query3= "SELECT * FROM event1";
global $connect;
$result =  mysqli_query($connect,$query);
$result1 = mysqli_query($connect,$query1);
$result2 = mysqli_query($connect,$query2);
$result3 = mysqli_query($connect,$query3);
$array = array();
$array1 = array();
$array2 = array();
$array3 = array();

while($row=mysqli_fetch_array($result))
	array_push($array , array( 'id'          => $row[0],
							   'title'       => $row[1],
							   'describtion' => $row[2]
));
							   
while($row1=mysqli_fetch_array($result1))
	array_push($array1 , array( 'id'         => $row1[0],
							   'category_id' => $row1[1],
							   'title'       => $row1[2],
							   'describtion' => $row1[3]
							   
));
while($row2=mysqli_fetch_array($result2))
	array_push($array2 , array('id'                => $row2[0],
							   'title'             => $row2[1],
							   'location_latitude' => $row2[2],
							   'location_longitude'=> $row2[3],
							   'phone_number'      => $row2[4],
							   'describtion'       => $row2[5]
							   
));
while($row3=mysqli_fetch_array($result3))
	array_push($array3 , array( 
							   'id'               => $row3[0],
							   'interest_point_id'=> $row3[1],
							   'price'            => $row3[2],
							   'event1_time'      => $row3[3]
));
			

$output = array(
   "array" =>$array,
   "array1"=>$array1,
   "array2"=>$array2,
   "array3"=>$array3
);

echo json_encode($output);			
	
	

?>