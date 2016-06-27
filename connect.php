<?php
    // connect your database here first 
    // 

	
	$connection= mysqli_connect('localhost','root','','project');
	
	
    // Actual code starts here 

    $sql = "category";

    $rs = mysql_query($sql);

    while($row = mysql_fetch_array($rs))
    {
        $tbl = $row[0];
        $sql = "ALTER TABLE `$category` ENGINE=INNODB";
        mysql_query($sql);
    }
?>